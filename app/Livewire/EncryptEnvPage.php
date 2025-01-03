<?php

namespace App\Livewire;

use App\Livewire\Forms\EncryptEnvForm;
use Livewire\Component;

class EncryptEnvPage extends Component
{
    public EncryptEnvForm $form;

    public function encrypt()
    {
        $this->form->submit();
    }

    public function render()
    {
        return view('livewire.encrypt-env-page');
    }
}
