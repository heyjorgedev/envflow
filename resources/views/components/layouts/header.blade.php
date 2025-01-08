@php
    $menus = [
        [
            'name' => 'Share',
            'url' => route('home'),
            'active' => request()->routeIs(['home', 'success']),
        ],
        [
            'name' => 'About',
            'url' => route('about'),
            'active' => request()->routeIs(['about']),
        ],
];
@endphp
<header x-data="{ open: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <a href="{{ route('home') }}" class="-m-1.5 p-1.5 font-bold text-2xl text-rose-600" wire:navigate>
            Envflow
        </a>
        <div class="flex lg:hidden">
            <button x-on:click="open = true" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-white">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            @foreach ($menus as $menu)
                <a href="{{ $menu['url'] }}" @class(["text-rose-600" => $menu['active'], "text-gray-900 dark:text-white/60" => !$menu['active'], "-m-1.5 p-1.5 font-semibold"]) class="rounded-md text-base/7 hover:bg-gray-50" wire:navigate>
                    {{ $menu['name'] }}
                </a>
            @endforeach
        </div>
    </nav>
    <div x-cloak x-show="open" class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10 bg-black/10 backdrop-blur"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white dark:bg-slate-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5 font-bold text-2xl text-rose-600">
                    Envflow
                </a>
                <button x-on:click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-white">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        @foreach ($menus as $menu)
                            <a href="{{ $menu['url'] }}" @class(['bg-rose-600 text-white' => $menu['active'], 'text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-600' => !$menu['active'], '-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold']) wire:navigate>
                                {{ $menu['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
