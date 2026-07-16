<?php

namespace App\Imports;

use App\Models\Careers;
use App\Models\CareerRatings;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class CareersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Skip header row
        $rows->shift();

        foreach ($rows as $row) {
            // Create Career
            $career = Careers::create([
                'title' => $row[0],             // Career Title
                'short_description' => $row[1], // Short Description
                'description' => $row[2],       // Full Description
            ]);

            // Loop Brain Profile ratings (columns 3–17)
            for ($i = 1; $i <= 15; $i++) {
                $rating = $row[2 + $i] ?? null; // offset by 3 for first 3 columns
                if ($rating !== null) {
                    CareerRatings::create([
                        'careers_id' => $career->id, 
                        'brain_profile_id' => $i,
                        'rating' => $rating,
                    ]);
                }
            }
        }
    }
}
