<?php

namespace App\Livewire;

use App\Actions\DecryptEnvFile;
use Illuminate\Http\Request;
use Livewire\Attributes\Locked;
use Livewire\Component;

class DecryptEnvPage extends Component
{
    #[Locked]
    public string $id;

    public string $key = '';

    #[Locked]
    public bool $displaySecret = false;

    public string $fileContents = '';

    public bool $hasError = false;

    public function mount(string $id, Request $request): void
    {
        $this->id = $id;
        $this->key = $request->query('key', '');
    }

    public function decrypt(DecryptEnvFile $decryptEnvFile): void
    {
        try {
            $this->fileContents = $decryptEnvFile->decrypt($this->id, $this->key);
            $this->displaySecret = true;
        } catch (\Throwable $e) {
            $this->hasError = true;
            $this->displaySecret = false;
        }
    }

    public function render()
    {
        return view('livewire.decrypt-env-page')->title('Decrypt');
    }
}
