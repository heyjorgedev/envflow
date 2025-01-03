<div>
    <div class="flex flex-col items-center justify-center py-6">
        <h2 class="text-2xl">Securely share your env file with your team</h2>
        <p class="text-center">With Envflow, lorem</p>
    </div>
    <form wire:submit="encrypt">
        <div class="grid gap-2">
            <textarea wire:model="form.value" class="border rounded-lg w-full" rows="10"></textarea>
            <div class="border p-4 rounded-lg">
                <label>
                    <input type="checkbox" wire:model="form.includeComments" />
                    Include Comments
                </label>
            </div>
            <button class="border p-2 rounded-lg">Share</button>
        </div>
    </form>
</div>
