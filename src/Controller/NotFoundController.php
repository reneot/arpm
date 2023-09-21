<?php

namespace App\Controller;

class NotFoundController
{
    public function index(): void
    {
        require 'src/View/NotFound.php';
    }
}