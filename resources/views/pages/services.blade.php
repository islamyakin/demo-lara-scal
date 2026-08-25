@extends('layouts.app')

@section('title', 'Layanan')
@section('description', 'Jenis situs yang cocok dibangun dengan pendekatan static page Laravel.')

@section('content')
    <section class="mx-auto max-w-5xl px-6 pb-12 pt-20 sm:pt-24">
        <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Layanan</h1>
        <p class="mt-4 max-w-2xl text-lg text-slate-600 dark:text-slate-400">
            Pendekatan halaman statis cocok untuk situs yang isinya jarang berubah namun harus
            selalu cepat dan tersedia.
        </p>

        <div class="mt-12 grid gap-6 sm:grid-cols-2">
            @foreach ($services as $index => $service)
                <article class="rounded-xl border border-slate-200 p-6 dark:border-slate-800">
                    <span class="font-mono text-xs text-slate-400 dark:text-slate-600">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    <h2 class="mt-2 text-lg font-semibold text-slate-900 dark:text-white">{{ $service['name'] }}</h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service['body'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
