@extends('layouts.app')

@section('title', 'Tentang')
@section('description', 'Latar belakang dan cara kerja aplikasi static page ini.')

@section('content')
    <section class="mx-auto max-w-3xl px-6 pb-12 pt-20 sm:pt-24">
        <h1 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Tentang</h1>

        <div class="mt-8 space-y-6 text-slate-600 dark:text-slate-400">
            <p class="text-lg leading-relaxed">
                Aplikasi ini adalah contoh situs statis yang dibangun di atas Laravel. Seluruh isi
                halaman berasal dari template Blade dan array PHP biasa, sehingga tidak ada koneksi
                database yang perlu dijaga saat melayani pengunjung.
            </p>

            <h2 class="pt-4 text-xl font-semibold text-slate-900 dark:text-white">Kenapa Octane</h2>
            <p class="leading-relaxed">
                Pada mode PHP-FPM tradisional, setiap request memuat ulang autoloader, membaca
                konfigurasi, dan membangun ulang service container. Octane menjalankan aplikasi
                sebagai worker jangka panjang: proses bootstrap terjadi sekali, lalu request
                berikutnya langsung masuk ke router.
            </p>

            <h2 class="pt-4 text-xl font-semibold text-slate-900 dark:text-white">Kenapa FrankenPHP</h2>
            <p class="leading-relaxed">
                FrankenPHP adalah server aplikasi PHP berbasis Caddy yang dikemas sebagai satu
                binary. Tidak perlu memasang ekstensi Swoole atau menyiapkan Nginx terpisah,
                dan HTTPS lokal tersedia secara otomatis.
            </p>

            <h2 class="pt-4 text-xl font-semibold text-slate-900 dark:text-white">Batasan yang perlu diingat</h2>
            <p class="leading-relaxed">
                Karena aplikasi tetap hidup antar request, state pada singleton dan properti statis
                ikut bertahan. Untuk situs statis hal ini jarang menjadi masalah, tetapi saat
                menambahkan fitur dinamis, hindari menyimpan data milik satu pengunjung di dalam
                service yang terdaftar sebagai singleton.
            </p>
        </div>
    </section>
@endsection
