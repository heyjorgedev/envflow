<?php

namespace App\Actions;

use App\Data\StoreEnvFileResult;
use Illuminate\Support\Facades\Redis as RedisFacade;
use Illuminate\Support\Str;
use Redis;

class StoreEnvFile
{
    public function __construct(private EncryptEnvFile $encrypter) {}

    public function store(#[\SensitiveParameter] string $fileContents, int $shareLimit = 1, int $ttl = 60 * 5): StoreEnvFileResult
    {
        $id = Str::uuid();
        $encrypted = $this->encrypter->encrypt($fileContents);

        RedisFacade::pipeline(function (Redis $pipe) use ($id, $encrypted, $ttl, $shareLimit) {
            $options = ['EX' => $ttl];
            $pipe->set("envfile:$id", $encrypted->value, $options);
            $pipe->set("envfile:$id:shareLimit", $shareLimit, $options);
        });

        return new StoreEnvFileResult(id: $id, key: $encrypted->key);
    }
}
