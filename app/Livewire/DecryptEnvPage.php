<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;

class DecryptEnvPage extends Component
{
    #[Locked]
    public string $id;

    #[Url]
    public string $key = '';

    public function mount(string $id): void
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.decrypt-env-page');
    }

    public function decrypt(): void
    {
        $this->js('alert("hello world")');
    }
}
