<button {{ $attributes->class('rounded-md bg-rose-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-rose-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-600 disabled:opacity-50 disabled:pointer-events-none') }}>
    {{ $slot }}
</button>
