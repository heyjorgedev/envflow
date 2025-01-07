<?php

namespace App\Data;

readonly class EncryptFileResult
{
    public function __construct(
        #[\SensitiveParameter] public string $key,
        public string $value,
    ) {}
}
