<div>
    <div class="flex flex-col items-center justify-center py-12">
        <h2 class="text-3xl text-center font-bold pb-4">Securely share your env file with your team</h2>
        <p class="text-center text-black/50">With Envflow, you can share your env file with your team securely. Simply paste your env file into the box below and click the "Share Env" button.</p>
    </div>
    <form wire:submit="encrypt">
        <div class="grid gap-6">
            <textarea wire:model="form.value" class="border rounded-lg w-full p-6 outline-none focus:ring focus:ring-rose-600" rows="10" placeholder="Paste your env file here"></textarea>
            <div class="border rounded-lg divide-y">
                <div class="p-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium pb-1">Include Comments</h3>
                        <p class="text-xs text-black/50">Should comments be included in the share?</p>
                    </div>
                    <div>
                        <x-toggle wire:model="form.includeComments" sr="Include Comments" />
                    </div>
                </div>
                <div class="p-6 flex items-center justify-between gap-4">
                    <div>
                        <h3 class="text-sm font-medium pb-1">Read Limit</h3>
                        <p class="text-xs text-black/50">How many times can a share be read?</p>
                    </div>
                    <div>
                        <x-input type="number" wire:model="form.shareLimit" class="w-24 text-right" />
                    </div>
                </div>
                <div class="p-6 flex items-center justify-between gap-4">
                    <div>
                        <h3 class="text-sm font-medium pb-1">Time to Live</h3>
                        <p class="text-xs text-black/50">How many minutes should the share be available?</p>
                    </div>
                    <div>
                        <x-input type="number" wire:model="form.shareTtl" class="w-24 text-right" />
                    </div>
                </div>
            </div>
            <x-button type="submit">
                Share Env
            </x-button>
        </div>
    </form>
</div>
