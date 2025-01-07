<?php

namespace App\Actions;

use App\Data\StoreEnvFileResult;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class StoreEnvFile
{
    public function __construct(private EncryptEnvFile $encrypter) {}

    public function store(#[\SensitiveParameter] string $fileContents, int $shareLimit = 1, int $ttl = 60 * 5): StoreEnvFileResult
    {
        $id = Str::uuid();
        $encrypted = $this->encrypter->encrypt($fileContents);

        Redis::set("envfile:$id", $encrypted->value, 'ex', $ttl);

        return new StoreEnvFileResult(id: $id, key: $encrypted->key);
    }
}
