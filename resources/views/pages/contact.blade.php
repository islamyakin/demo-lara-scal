@extends('layouts.app')

@section('title', 'Kontak')
@section('description', 'Cara menghubungi kami.')

@section('content')
    <section class="mx-auto max-w-3xl px-6 pb-12 pt-20 sm:pt-24">
        <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Kontak</h1>
        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
            Halaman ini sengaja dibiarkan statis. Silakan hubungi lewat kanal di bawah.
        </p>

        <dl class="mt-10 divide-y divide-slate-200 border-y border-slate-200 dark:divide-slate-800 dark:border-slate-800">
            <div class="flex flex-col gap-1 py-5 sm:flex-row sm:items-baseline sm:gap-8">
                <dt class="w-32 shrink-0 text-sm font-medium text-slate-500 dark:text-slate-400">Email</dt>
                <dd class="text-slate-900 dark:text-white">
                    <a href="mailto:halo@example.test" class="underline decoration-slate-300 underline-offset-4 hover:decoration-slate-900 dark:decoration-slate-700 dark:hover:decoration-white">
                        halo@example.test
                    </a>
                </dd>
            </div>
            <div class="flex flex-col gap-1 py-5 sm:flex-row sm:items-baseline sm:gap-8">
                <dt class="w-32 shrink-0 text-sm font-medium text-slate-500 dark:text-slate-400">Telepon</dt>
                <dd class="text-slate-900 dark:text-white">+62 21 0000 0000</dd>
            </div>
            <div class="flex flex-col gap-1 py-5 sm:flex-row sm:items-baseline sm:gap-8">
                <dt class="w-32 shrink-0 text-sm font-medium text-slate-500 dark:text-slate-400">Alamat</dt>
                <dd class="text-slate-900 dark:text-white">Jakarta, Indonesia</dd>
            </div>
            <div class="flex flex-col gap-1 py-5 sm:flex-row sm:items-baseline sm:gap-8">
                <dt class="w-32 shrink-0 text-sm font-medium text-slate-500 dark:text-slate-400">Jam kerja</dt>
                <dd class="text-slate-900 dark:text-white">Senin&ndash;Jumat, 09.00&ndash;17.00 WIB</dd>
            </div>
        </dl>
    </section>
@endsection
