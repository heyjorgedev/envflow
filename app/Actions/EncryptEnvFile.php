<?php

namespace App\Actions;

use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Str;

class EncryptEnvFile
{
    public function encrypt(#[\SensitiveParameter] string $value): array
    {
        $key = $this->generateKey();
        $encrypter = new Encrypter($key, config('app.cipher'));

        $encryptedValue = $encrypter->encryptString($value);

        return [
            'value' => $encryptedValue,
            'key' => $key,
        ];
    }

    private function generateKey(): string
    {
        return Str::random(32);
    }
}
