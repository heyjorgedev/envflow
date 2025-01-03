<?php

namespace App\Actions;

class StoreEnvFile
{
    public function __construct(private EncryptEnvFile $encrypter)
    {
    }

    public function store(#[\SensitiveParameter] string $value) {
        $encrypted = $this->encrypter->encrypt($value);

        // TODO: Store
    }
}
