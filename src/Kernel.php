<?php

namespace App;

use App\Controller\NotFoundController;

class Kernel
{
    private array $routes;

    public function __construct()
    {
        $this->routes = require './src/routes.php';
    }


    public function process(): void
    {
        $url = $_SERVER['REQUEST_URI'] ?? '';
        foreach ($this->routes as $route => $handler) {
            if (trim($url, '/') === trim($route, '/')) {
                $controller = new $handler['class'];
                $method = $handler['method'];
                $controller->$method();
                return;
            }
        }

        $this->notFound();
    }

    private function notFound(): void
    {
        $notFound = new NotFoundController();
        $notFound->index();
    }
}