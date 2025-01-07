<?php

namespace App\Actions;

use App\Data\EncryptFileResult;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Str;

class EncryptEnvFile
{
    public function encrypt(#[\SensitiveParameter] string $value): EncryptFileResult
    {
        $key = $this->generateKey();
        $encrypter = new Encrypter($key, config('app.cipher'));

        $encryptedValue = $encrypter->encryptString($value);

        return new EncryptFileResult(key: $key, value: $encryptedValue);
    }

    private function generateKey(): string
    {
        return Str::random(32);
    }
}
