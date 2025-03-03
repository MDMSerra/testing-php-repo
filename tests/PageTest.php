<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use App\PageContent;

#[CoversClass(PageContent::class)]
class PageTest extends TestCase
{
    public function testDummy()
    {
        $this->assertTrue(true);
    }

    public function testGetTitle(): void
    {
        $this->assertSame("Bienvenidos a Mi Página PHP", PageContent::getTitle());
    }

    public function testGetParagraph(): void
    {
        $this->assertSame("Esta es una prueba con integración continua.", PageContent::getParagraph());
    }
}
