<div>
    <div class="flex flex-col items-center justify-center py-12">
        <h2 class="text-3xl text-center font-bold pb-4">Securely share your env file with your team</h2>
        <p class="text-center text-black/50 dark:text-white/50">With Envflow, you can share your env file with your team securely. Simply paste your env file into the box below and click the "Share Env" button.</p>
    </div>
    <form wire:submit="encrypt">
        <div class="grid gap-6">
            <textarea wire:model="form.value" class="border rounded-lg w-full p-6 outline-none focus:ring focus:ring-rose-600 dark:bg-slate-800 dark:border-slate-700" rows="10" placeholder="Paste your env file here"></textarea>
            <div class="border rounded-lg divide-y dark:border-slate-700 dark:divide-slate-700">
                <x-feature title="Include Comments" description="Should comments be included in the share?">
                    <x-toggle wire:model="form.includeComments" sr="Include Comments" />
                </x-feature>
                <x-feature title="Read Limit" description="How many times can a share be read?">
                    <x-input type="number" min="1" max="100" wire:model="form.shareLimit" class="w-24" />
                </x-feature>
                <x-feature title="Time to Live" description="How many minutes should the share be available?">
                    <x-input type="number" min="1" max="60" wire:model="form.shareTtl" class="w-24" />
                </x-feature>
            </div>
            <x-button type="submit" wire:loading.attr="disabled">
                Share Env
            </x-button>
        </div>
    </form>
</div>
