<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    #[Route('/test')]
    public function index(Request $request): Response
    {
        return new Response(
            '<h1>id</h1>: ' . $request->query->get('id'),
            401,
            [
                'Header-test' => 'Test'
            ]
        );
    }
}
