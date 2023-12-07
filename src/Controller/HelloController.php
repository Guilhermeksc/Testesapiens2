<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response(
            '<html><body>Hello World!</body></html>'
        );
    }
    #[Route('/indexnovo')]
    public function indexnovo(): Response
    {
        return new Response(
            '<html><body>Novo index Hello World!</body></html>'
        );
    }
    #[Route('/testeindex')]
    public function testeindex(): Response
    {
        return new Response(
            '<html><body>Teste index Hello World!</body></html>'
        );
    }
    #[Route('//insetos')]
    public function insetos(): Response
    {
        return new Response(
            '<html><body>Teste index Hello World!</body></html>'
        );
    }
}