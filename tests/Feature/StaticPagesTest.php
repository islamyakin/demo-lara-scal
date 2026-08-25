<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class StaticPagesTest extends TestCase
{
    public static function pageProvider(): array
    {
        return [
            'beranda' => ['home', '/', 'Halaman statis'],
            'tentang' => ['about', '/tentang', 'Tentang'],
            'layanan' => ['services', '/layanan', 'Layanan'],
            'kontak' => ['contact', '/kontak', 'Kontak'],
        ];
    }

    #[DataProvider('pageProvider')]
    public function test_page_renders(string $name, string $path, string $heading): void
    {
        $this->get(route($name))
            ->assertOk()
            ->assertSee($heading, false);

        $this->assertSame($path, parse_url(route($name), PHP_URL_PATH) ?: '/');
    }

    public function test_navigation_marks_the_current_page(): void
    {
        $this->get(route('services'))
            ->assertOk()
            ->assertSee('aria-current="page"', false);
    }

    public function test_unknown_page_returns_not_found(): void
    {
        $this->get('/halaman-tidak-ada')->assertNotFound();
    }
}
