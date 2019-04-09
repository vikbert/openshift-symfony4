<?php

declare(strict_types = 1);

namespace App\Presentation\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;

final class DefaultController
{
    public function index(): Response
    {
        return new Response(sprintf('<h1>Azure, Welcome to Symfony %s</h1>', Kernel::VERSION), 200);
    }
}
