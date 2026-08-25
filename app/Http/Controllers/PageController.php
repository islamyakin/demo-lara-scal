<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'features' => [
                [
                    'title' => 'Octane + FrankenPHP',
                    'body' => 'Aplikasi di-boot sekali lalu tetap di memori, sehingga request berikutnya dilayani tanpa bootstrap ulang.',
                ],
                [
                    'title' => 'Blade Statis',
                    'body' => 'Setiap halaman dirender dari template Blade. Tidak ada database, tidak ada state per-request yang bocor.',
                ],
                [
                    'title' => 'Tailwind CSS 4',
                    'body' => 'Aset dibundel Vite dan disajikan langsung dari direktori public sebagai file statis.',
                ],
            ],
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services', [
            'services' => [
                [
                    'name' => 'Company Profile',
                    'body' => 'Halaman profil perusahaan yang ringan, cepat dimuat, dan siap diindeks mesin pencari.',
                ],
                [
                    'name' => 'Landing Page',
                    'body' => 'Halaman kampanye dengan satu tujuan konversi yang jelas dan waktu render minimal.',
                ],
                [
                    'name' => 'Dokumentasi',
                    'body' => 'Kumpulan halaman konten yang tersusun rapi dan mudah dirawat lewat Blade.',
                ],
                [
                    'name' => 'Microsite',
                    'body' => 'Situs kecil untuk kebutuhan acara atau peluncuran produk dengan biaya operasional rendah.',
                ],
            ],
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
