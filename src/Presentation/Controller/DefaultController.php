<?php

declare(strict_types = 1);

namespace App\Presentation\Controller;

use Symfony\Component\HttpFoundation\Response;

final class DefaultController
{
    public function index()
    {
        return new Response('<h1>Symfony 4 on OpenShift.</h1>', 200);
    }
}
