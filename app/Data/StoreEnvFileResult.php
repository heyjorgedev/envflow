<?php

namespace App\Data;

readonly class StoreEnvFileResult
{
    public function __construct(public string $id, #[\SensitiveParameter] public string $key) {}
}
