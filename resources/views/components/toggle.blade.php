@props(['sr' => null])
<div x-data="{ enabled: false }" x-modelable="enabled" {{ $attributes }}>
    <button x-on:click="enabled = !enabled" x-bind:class="enabled ? 'bg-rose-600' : 'bg-gray-200'" type="button" class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-rose-600 focus:ring-offset-2" role="switch" x-bind:aria-checked="enabled">
        @if($sr)
            <span class="sr-only">{{ $sr }}</span>
        @else
            <span class="sr-only">Toggle</span>
        @endif
        <span aria-hidden="true" x-bind:class="enabled ? 'translate-x-5' : 'translate-x-0'" class="pointer-events-none inline-block size-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
    </button>
</div>
