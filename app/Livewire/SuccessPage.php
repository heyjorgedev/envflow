<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;

class SuccessPage extends Component
{
    #[Locked]
    public string $id;

    #[Url]
    public string $key = '';

    public function mount(string $id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.success-page')->title('Success');
    }
}
