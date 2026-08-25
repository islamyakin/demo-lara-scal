<?php

namespace App\Providers;

use Illuminate\Foundation\DevCommands;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // "php artisan dev" defaults to "artisan serve". This app is served by
        // Octane, so swap in the Octane worker and drop the queue listener,
        // since none of the static pages dispatch jobs.
        $port = parse_url((string) config('app.url'), PHP_URL_PORT) ?: 8000;

        DevCommands::artisan("octane:start --watch --port={$port}", 'server');

        DevCommands::except('queue');
    }
}
