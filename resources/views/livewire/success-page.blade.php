<div>
    <div class="flex flex-col items-center justify-center py-12">
        <h2 class="text-3xl text-center font-bold pb-4">Successfully encrypted your env file</h2>
        <p class="text-center text-black/50 dark:text-white/50">You can now share your encrypted env file with your team.</p>
    </div>

    <div class="border p-6 rounded-lg mb-12 dark:border-slate-700">
        <h2 class="text-sm font-medium pb-1">Share this link with your team (includes decryption key):</h2>
        <x-input type="text" readonly class="w-full" value="{{ route('decrypt', ['id' => $this->id, 'key' => $this->key]) }}" />
        <div class="flex justify-end pt-4">
            <x-clipboard-copy :value="route('decrypt', ['id' => $this->id, 'key' => $this->key])" />
        </div>
    </div>

    <div class="border p-6 rounded-lg mb-12 grid gap-6 dark:border-slate-700">
        <div>
            <h2 class="text-sm font-medium pb-1">Share this link with your team (does not include decryption key):</h2>
            <x-input type="text" readonly class="w-full" value="{{ route('decrypt', [
                'id' => $this->id,
            ]) }}" />
            <div class="flex justify-end pt-4">
                <x-clipboard-copy :value="route('decrypt', [ 'id' => $this->id ])" />
            </div>
        </div>
        <div>
            <p class="text-sm font-medium pb-1">You'll need to enter the key in the decrypt page to read the env file.</p>
            <x-input type="text" readonly class="w-full" value="{{ $this->key }}" />
            <div class="flex justify-end pt-4">
                <x-clipboard-copy :value="$this->key" />
            </div>
        </div>
    </div>
</div>
