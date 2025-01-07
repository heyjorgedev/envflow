<?php

namespace App\Actions;

use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Redis as RedisFacade;

class DecryptEnvFile
{
    public function decrypt(string $id, #[\SensitiveParameter] string $key): ?string
    {
        $encrypter = new Encrypter($key, config('app.cipher'));

        $value = RedisFacade::get("envfile:$id");
        if (! $value) {
            return null;
        }

        RedisFacade::del("envfile:$id");

        return $encrypter->decryptString($value);
    }
}
