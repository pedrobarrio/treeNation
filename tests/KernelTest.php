<?php

namespace App\Tests;

use App\Kernel;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

final class KernelTest extends TestCase
{
    public function testHomepageHasNoConfiguredRoute(): void
    {
        $kernel = new Kernel('test', false);
        try {
            $request = Request::create('/');
            $response = $kernel->handle($request);
            self::assertSame(404, $response->getStatusCode());
            $kernel->terminate($request, $response);
        } finally {
            $kernel->shutdown();
        }
    }
}
