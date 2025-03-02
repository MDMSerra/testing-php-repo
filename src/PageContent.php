<?php

declare(strict_types=1);

namespace App;

class PageContent
{
    public static function getTitle(): string
    {
        return "Bienvenido a Mi Página PHP";
    }

    public static function getParagraph(): string
    {
        return "Esta es una prueba con integración continua.";
    }
}
