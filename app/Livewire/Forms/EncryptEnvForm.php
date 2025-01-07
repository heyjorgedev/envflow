<?php

namespace App\Livewire\Forms;

use App\Actions\ProcessEnvFile;
use App\Actions\StoreEnvFile;
use App\Data\StoreEnvFileResult;
use Livewire\Form;

class EncryptEnvForm extends Form
{
    public string $value = '';

    public bool $includeComments = true;

    public int $shareLimit = 1;

    public int $shareTtl = 5;

    protected function rules()
    {
        return [
            'value' => [
                'required',
            ],
            'shareLimit' => [
                'required',
                'integer',
                'min:1',
                'max:100',
            ],
            'shareTtl' => [
                'required',
                'integer',
                'min:1',
                'max:60',
            ],
        ];
    }

    public function submit(): StoreEnvFileResult
    {
        $this->validate();

        $result = app(StoreEnvFile::class)->store(
            fileContents: (new ProcessEnvFile)->sanitize(
                fileContents: $this->value,
                includeComments: $this->includeComments,
            ),
            shareLimit: $this->shareLimit,
            ttl: $this->shareTtl * 60
        );

        $this->reset();

        return $result;
    }
}
