<?php

declare(strict_types=1);

namespace App\Services\Auth;

/**
 * Verifies passwords against every hash format found in the WordPress user
 * export, so imported users keep their existing password:
 *
 *   $wp$2y$... WordPress >= 6.8: bcrypt over an HMAC-SHA384 pre-hash
 *   $P$ / $H$  phpass portable hashes (WordPress < 6.8)
 *   $2y$...    plain bcrypt (also what Laravel produces after rehashing)
 */
final class WpHashService
{
    private const ITOA64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    public function check(string $password, string $hash): bool
    {
        if ($password === '' || $hash === '' || strlen($password) > 4096) {
            return false;
        }

        if (str_starts_with($hash, '$wp')) {
            $preHashed = base64_encode(hash_hmac('sha384', $password, 'wp-sha384', true));

            return password_verify($preHashed, substr($hash, 3));
        }

        if (str_starts_with($hash, '$P$') || str_starts_with($hash, '$H$')) {
            return hash_equals($hash, $this->phpassCrypt($password, $hash));
        }

        return password_verify($password, $hash);
    }

    /**
     * Whether the stored hash should be replaced with a native Laravel
     * bcrypt hash after a successful login.
     */
    public function needsRehash(string $hash): bool
    {
        return str_starts_with($hash, '$wp')
            || str_starts_with($hash, '$P$')
            || str_starts_with($hash, '$H$');
    }

    /**
     * Port of phpass crypt_private() as shipped in wp-includes/class-phpass.php.
     * Returns '*0'/'*1' (never equal to a real hash) on malformed settings.
     */
    private function phpassCrypt(string $password, string $setting): string
    {
        $output = '*0';
        if (substr($setting, 0, 2) === $output) {
            $output = '*1';
        }

        $id = substr($setting, 0, 3);
        if ($id !== '$P$' && $id !== '$H$') {
            return $output;
        }

        $countLog2 = strpos(self::ITOA64, $setting[3]);
        if ($countLog2 === false || $countLog2 < 7 || $countLog2 > 30) {
            return $output;
        }
        $count = 1 << $countLog2;

        $salt = substr($setting, 4, 8);
        if (strlen($salt) !== 8) {
            return $output;
        }

        $hash = md5($salt . $password, true);
        do {
            $hash = md5($hash . $password, true);
        } while (--$count);

        return substr($setting, 0, 12) . $this->encode64($hash, 16);
    }

    private function encode64(string $input, int $count): string
    {
        $output = '';
        $i = 0;

        do {
            $value = ord($input[$i++]);
            $output .= self::ITOA64[$value & 0x3f];

            if ($i < $count) {
                $value |= ord($input[$i]) << 8;
            }
            $output .= self::ITOA64[($value >> 6) & 0x3f];

            if ($i++ >= $count) {
                break;
            }

            if ($i < $count) {
                $value |= ord($input[$i]) << 16;
            }
            $output .= self::ITOA64[($value >> 12) & 0x3f];

            if ($i++ >= $count) {
                break;
            }

            $output .= self::ITOA64[($value >> 18) & 0x3f];
        } while ($i < $count);

        return $output;
    }
}
