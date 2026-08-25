# Demo Lara

Aplikasi **static page** Laravel yang dilayani oleh **Laravel Octane** di atas runtime **FrankenPHP**.

Seluruh isi halaman berasal dari template Blade dan array PHP — tidak ada query database saat
melayani pengunjung. Octane menahan aplikasi tetap hidup di memori, sehingga request tidak
membayar biaya bootstrap framework berulang kali.

## Kebutuhan

| Komponen | Versi yang dipakai |
| --- | --- |
| PHP | 8.5 |
| Laravel | 13.x |
| Laravel Octane | 2.x |
| Server Octane | FrankenPHP (binary diunduh oleh `octane:install`) |
| Node.js | 24.x (Vite 8 + Tailwind CSS 4) |

## Menjalankan

```bash
composer setup          # install dependency, siapkan .env, build aset
composer dev            # Octane (--watch) + Vite + log viewer
```

`composer dev` membaca port dari `APP_URL`, jadi ubah `APP_URL` di `.env` untuk memindahkan port.

Menjalankan server saja, tanpa Vite:

```bash
php artisan octane:start --host=127.0.0.1 --port=8300
```

## Produksi

```bash
npm run build
php artisan config:cache && php artisan route:cache && php artisan view:cache
php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=80 --workers=auto
```

Setelah deploy kode baru, muat ulang worker agar perubahan terbaca:

```bash
php artisan octane:reload
```

## Halaman

| URL | Route name | View |
| --- | --- | --- |
| `/` | `home` | `pages/home` |
| `/tentang` | `about` | `pages/about` |
| `/layanan` | `services` | `pages/services` |
| `/kontak` | `contact` | `pages/contact` |

Semua halaman dilayani oleh [`PageController`](app/Http/Controllers/PageController.php) dan
memakai layout [`layouts/app`](resources/views/layouts/app.blade.php).

Menambah halaman baru: tambahkan method di `PageController`, daftarkan route bernama di
`routes/web.php`, lalu buat Blade di `resources/views/pages/`. Menu navigasi otomatis ikut
menandai halaman aktif — daftarnya ada di
[`partials/nav.blade.php`](resources/views/partials/nav.blade.php).

## Catatan Octane

Aplikasi tetap hidup antar request, sehingga state pada singleton dan properti statis ikut
bertahan. Untuk situs statis ini hal tersebut tidak menjadi masalah, tetapi saat menambah fitur
dinamis, hindari menyimpan data milik satu pengunjung di dalam service yang terdaftar sebagai
singleton.

Binary `frankenphp` sengaja tidak ikut di-commit (lihat `.gitignore`). Jalankan ulang
`php artisan octane:install --server=frankenphp` untuk mengunduhnya di mesin baru.

## Test

```bash
composer test
```

[`tests/Feature/StaticPagesTest.php`](tests/Feature/StaticPagesTest.php) memverifikasi setiap
halaman merender dengan status 200, penanda navigasi aktif, dan URL tak dikenal menghasilkan 404.
