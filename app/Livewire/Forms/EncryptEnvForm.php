<?php

namespace App\Livewire\Forms;

use App\Actions\ProcessEnvFile;
use App\Actions\StoreEnvFile;
use Livewire\Form;

class EncryptEnvForm extends Form
{
    public string $value = '';

    public bool $includeComments = true;

    public int $shareLimit = 1;

    public int $shareTtl = 60 * 5;

    protected function rules()
    {
        return [
            'value' => [
                'required',
            ],
        ];
    }

    public function submit()
    {
        $this->validate();

        $result = app(StoreEnvFile::class)->store(
            fileContents: (new ProcessEnvFile)->sanitize(
                fileContents: $this->value,
                includeComments: $this->includeComments,
            ),
            shareLimit: $this->shareLimit,
            ttl: $this->shareTtl
        );

        $this->reset();

        return $result;
    }
}
