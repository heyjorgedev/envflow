@props(['title', 'description'])
<div class="p-6 flex items-center justify-between gap-4">
    <div>
        <h3 class="text-sm font-medium pb-1">{{ $title }}</h3>
        <p class="text-xs text-black/50">{{ $description }}</p>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
