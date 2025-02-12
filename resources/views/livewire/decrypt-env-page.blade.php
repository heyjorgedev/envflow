<div>
    <div class="flex flex-col items-center justify-center py-12">
        <h2 class="text-3xl text-center font-bold pb-4">Decrypt your secret env file</h2>
    </div>
    <div class="border p-6 rounded-lg mb-12 dark:border-slate-700">
        <form wire:submit="decrypt">
            <div class="grid gap-6">
                <div>
                    <x-label>Decryption Key</x-label>
                    <div class="mt-2">
                        <x-input class="w-full" type="text" wire:model="key" wire:loading.attr="disabled" x-bind:disabled="$wire.displaySecret || $wire.hasError" />
                    </div>
                </div>
                <x-button
                    type="submit"
                    wire:loading.attr="disabled"
                    x-bind:disabled="$wire.displaySecret || $wire.hasError">
                    Read Secret Env
                </x-button>
            </div>
        </form>
    </div>
    <div class="relative border rounded-lg overflow-hidden dark:border-slate-700">
        @if($this->displaySecret)
            <div>
                <textarea wire:model="fileContents" class="w-full p-5 dark:bg-slate-800" rows="10" disabled></textarea>
            </div>
        @else
            <div>
                <div class="blur">
                <textarea class="w-full p-5 select-none pointer-events-none dark:bg-slate-800" rows="10" disabled>
APP_NAME=Envflow
APP_ENV=local
APP_KEY=base64:dasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost
            </textarea>
                </div>
                @if($this->hasError)
                    <div class="absolute inset-0 bg-red-600/10 flex flex-col items-center justify-center text-red-600">
                        <p class="text font-medium">Something went wrong</p>
                        <p class="text-sm">Maybe the key is wrong or the env file has expired.</p>
                    </div>
                @endif
            </div>
        @endif
    </div>

</div>
