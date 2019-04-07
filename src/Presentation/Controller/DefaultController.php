<?php

declare(strict_types = 1);

namespace App\Presentation\Controller;

use Symfony\Component\HttpFoundation\Response;

final class DefaultController
{
    public function index()
    {
        return new Response('<h1>It works</h1><p>A Symfony 4 project deployed on OpenShift.</p>', 200);
    }
}
