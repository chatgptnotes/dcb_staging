<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Services\Auth\WpHashService;
use PHPUnit\Framework\TestCase;

class WpHashServiceTest extends TestCase
{
    private WpHashService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new WpHashService();
    }

    /**
     * Builds a hash exactly the way WordPress >= 6.8 wp_hash_password() does.
     */
    private function makeWpBcryptHash(string $password): string
    {
        $preHashed = base64_encode(hash_hmac('sha384', $password, 'wp-sha384', true));

        return '$wp' . password_hash($preHashed, PASSWORD_BCRYPT);
    }

    public function test_accepts_correct_password_for_wp_bcrypt_hash(): void
    {
        $hash = $this->makeWpBcryptHash('MySecret#2026');

        $this->assertTrue($this->service->check('MySecret#2026', $hash));
    }

    public function test_rejects_wrong_password_for_wp_bcrypt_hash(): void
    {
        $hash = $this->makeWpBcryptHash('MySecret#2026');

        $this->assertFalse($this->service->check('mysecret#2026', $hash));
        $this->assertFalse($this->service->check('MySecret#2027', $hash));
        $this->assertFalse($this->service->check('', $hash));
    }

    public function test_accepts_correct_password_for_phpass_hash(): void
    {
        // Reference vector generated with WordPress's own
        // wp-includes/class-phpass.php (PasswordHash(8, true)).
        $hash = '$P$BdEbEvoPab9mowPZ7Il8na7LLTaCPY1';

        $this->assertTrue($this->service->check('correct horse battery staple', $hash));
    }

    public function test_rejects_wrong_password_for_phpass_hash(): void
    {
        $hash = '$P$BdEbEvoPab9mowPZ7Il8na7LLTaCPY1';

        $this->assertFalse($this->service->check('incorrect horse battery staple', $hash));
    }

    public function test_accepts_plain_bcrypt_hash(): void
    {
        $hash = password_hash('hello-world-123', PASSWORD_BCRYPT);

        $this->assertTrue($this->service->check('hello-world-123', $hash));
        $this->assertFalse($this->service->check('hello-world-124', $hash));
    }

    public function test_rejects_malformed_hashes(): void
    {
        $this->assertFalse($this->service->check('anything', ''));
        $this->assertFalse($this->service->check('anything', 'not-a-hash'));
        $this->assertFalse($this->service->check('anything', '$P$tooShort'));
        $this->assertFalse($this->service->check('anything', '$wp$2y$garbage'));
    }

    public function test_rejects_overlong_password(): void
    {
        $hash = $this->makeWpBcryptHash('x');

        $this->assertFalse($this->service->check(str_repeat('a', 4097), $hash));
    }

    public function test_needs_rehash_only_for_wordpress_formats(): void
    {
        $this->assertTrue($this->service->needsRehash($this->makeWpBcryptHash('pw')));
        $this->assertTrue($this->service->needsRehash('$P$BdEbEvoPab9mowPZ7Il8na7LLTaCPY1'));
        $this->assertTrue($this->service->needsRehash('$H$9aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'));

        $this->assertFalse($this->service->needsRehash(password_hash('pw', PASSWORD_BCRYPT)));
    }
}
