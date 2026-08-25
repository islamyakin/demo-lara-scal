@extends('layouts.app')

@section('title', 'Beranda')
@section('description', 'Static page Laravel yang dilayani Octane di atas runtime FrankenPHP.')

@section('content')
    <section class="mx-auto max-w-5xl px-6 pb-16 pt-20 sm:pt-28">
        <p class="inline-flex items-center gap-2 rounded-full border border-slate-200 px-3 py-1 text-xs font-medium text-slate-600 dark:border-slate-800 dark:text-slate-400">
            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
            Berjalan di atas Laravel Octane
        </p>

        <h1 class="mt-6 text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl dark:text-white">
            Halaman statis,<br>dilayani secepat mungkin.
        </h1>

        <p class="mt-6 max-w-2xl text-lg leading-relaxed text-slate-600 dark:text-slate-400">
            Aplikasi ini merender halaman langsung dari template Blade tanpa sentuhan database.
            Octane menahan aplikasi tetap hidup di memori, sehingga tidak ada biaya bootstrap
            framework pada setiap request.
        </p>

        <div class="mt-10 flex flex-wrap gap-3">
            <a href="{{ route('services') }}" class="rounded-lg bg-slate-900 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-slate-700 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200">
                Lihat layanan
            </a>
            <a href="{{ route('contact') }}" class="rounded-lg border border-slate-300 px-5 py-3 text-sm font-medium text-slate-700 transition-colors hover:bg-slate-50 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-900">
                Hubungi kami
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-5xl px-6">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <article class="rounded-xl border border-slate-200 p-6 dark:border-slate-800">
                    <h2 class="text-base font-semibold text-slate-900 dark:text-white">{{ $feature['title'] }}</h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $feature['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
