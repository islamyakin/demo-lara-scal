<footer class="mt-24 border-t border-slate-200 dark:border-slate-800">
    <div class="mx-auto flex max-w-5xl flex-col gap-3 px-6 py-10 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between dark:text-slate-400">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Semua hak dilindungi.</p>
        <p class="font-mono text-xs">
            Laravel {{ app()->version() }} &middot; PHP {{ PHP_VERSION }} &middot;
            {{ config('octane.server') === 'frankenphp' ? 'Octane/FrankenPHP' : 'Octane/'.config('octane.server') }}
        </p>
    </div>
</footer>
