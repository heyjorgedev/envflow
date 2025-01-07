@props(['value' => ''])
<div x-data="{ copyText: '{{ $value }}', copied: false }" x-modelable="copyText" {{ $attributes }}>
    <button type="button" x-on:click="navigator.clipboard.writeText(copyText); copied = true; setTimeout(() => copied = false, 3000);" class="relative rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
        <span x-show="!copied">Copy to clipboard</span>
        <span x-cloak x-show="copied" class="text-green-600">Copied!</span>
    </button>
</div>
