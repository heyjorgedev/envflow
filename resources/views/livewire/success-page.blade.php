<div>
    <div class="flex flex-col items-center justify-center py-12">
        <h2 class="text-3xl text-center font-bold pb-4">Successfully encrypted your env file</h2>
        <p class="text-center text-black/50">You can now share your encrypted env file with your team.</p>
    </div>

    <div class="border p-6 rounded-lg mb-12">
        <h2 class="text-sm font-medium pb-1">Share this link with your team (includes key):</h2>
        <x-input type="text" readonly class="w-full" value="{{ route('decrypt', [
            'id' => $this->id,
            'key' => $this->key,
        ]) }}" />
    </div>

    <div class="border p-6 rounded-lg mb-12 grid gap-6">
        <div>
            <h2 class="text-sm font-medium pb-1">Share this link with your team (does not include key):</h2>
            <x-input type="text" readonly class="w-full" value="{{ route('decrypt', [
            'id' => $this->id,
        ]) }}" />
        </div>
        <div>
            <p class="text-sm font-medium pb-1">You'll need to enter the key in the decrypt page to read the env file.</p>
            <x-input type="text" readonly class="w-full" value="{{ $this->key }}" />
        </div>
    </div>
</div>
