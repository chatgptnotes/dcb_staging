<?php

namespace Tests\Feature;

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\File;
use ReflectionMethod;
use setasign\Fpdi\Fpdi;
use Tests\TestCase;

class CorrectedReportSourceTest extends TestCase
{
    private string $fixtureDirectory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fixtureDirectory = sys_get_temp_dir() . '/dcb-report-source-' . bin2hex(random_bytes(8));
        File::makeDirectory($this->fixtureDirectory . '/reports_pdfs/6', 0755, true);
        $this->app->usePublicPath($this->fixtureDirectory);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->fixtureDirectory);
        parent::tearDown();
    }

    private function resolve($profileId, $ageGroup): ?string
    {
        $method = new ReflectionMethod(MainController::class, 'resolveLocalReportPdf');
        return $method->invoke(new MainController(), $profileId, $ageGroup);
    }

    public function test_corrected_child_report_takes_priority_over_an_old_uploaded_copy(): void
    {
        File::put($this->fixtureDirectory . '/reports_pdfs/6/12-14.pdf', 'old uploaded report');

        $source = $this->resolve('6', '12-14');
        $this->assertSame(resource_path('reports/16.pdf'), $source);
        $this->assertSame(19, (new Fpdi())->setSourceFile($source));
    }

    public function test_other_age_groups_still_use_their_uploaded_reports(): void
    {
        foreach (['15-18', '18+'] as $ageGroup) {
            $source = $this->fixtureDirectory . '/reports_pdfs/6/' . $ageGroup . '.pdf';
            File::put($source, 'existing uploaded report');
            $this->assertSame($source, $this->resolve(6, $ageGroup));
        }

        $this->assertNull($this->resolve(6, null));
        $this->assertNull($this->resolve(5, '12-14'));
    }
}
