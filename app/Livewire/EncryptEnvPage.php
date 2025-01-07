<?php

namespace App\Livewire;

use App\Livewire\Forms\EncryptEnvForm;
use Livewire\Component;

class EncryptEnvPage extends Component
{
    public EncryptEnvForm $form;

    public function encrypt()
    {
        $result = $this->form->submit();

        $this->redirect(route('success', ['id' => $result->id, 'key' => $result->key]));
    }

    public function render()
    {
        return view('livewire.encrypt-env-page');
    }
}
