<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;

class Test extends ApiTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        static::createClient();
    }
}