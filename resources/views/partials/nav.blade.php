@php
    $links = [
        ['route' => 'home', 'label' => 'Beranda'],
        ['route' => 'about', 'label' => 'Tentang'],
        ['route' => 'services', 'label' => 'Layanan'],
        ['route' => 'contact', 'label' => 'Kontak'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-slate-200 bg-white/80 backdrop-blur dark:border-slate-800 dark:bg-slate-950/80">
    <nav class="mx-auto flex max-w-5xl items-center justify-between gap-6 px-6 py-4" aria-label="Navigasi utama">
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-semibold tracking-tight text-slate-900 dark:text-white">
            <span class="grid h-8 w-8 place-items-center rounded-lg bg-slate-900 text-sm font-bold text-white dark:bg-white dark:text-slate-900">
                {{ substr(config('app.name'), 0, 1) }}
            </span>
            {{ config('app.name') }}
        </a>

        <ul class="flex items-center gap-1 text-sm">
            @foreach ($links as $link)
                @php $active = request()->routeIs($link['route']); @endphp
                <li>
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'rounded-md px-3 py-2 transition-colors',
                            'bg-slate-100 font-medium text-slate-900 dark:bg-slate-800 dark:text-white' => $active,
                            'text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-900 dark:hover:text-white' => ! $active,
                        ])
                        @if ($active) aria-current="page" @endif
                    >
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
