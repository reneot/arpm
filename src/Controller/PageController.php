<?php

namespace App\Controller;


class PageController {

    public function index(): void
    {
        $pageTitle = "Homepage";
        $pageContent = "I'm in the homepage";
        require_once 'src/View/View.php';
    }

    public function folder1(): void
    {
        $pageTitle = "Folder 1";
        $pageContent = "I'm in folder1";
        require_once 'src/View/View.php';
    }

    public function folder2(): void
    {
        $pageTitle = "Folder 2";
        $pageContent = "I'm in folder2";
        require_once 'src/View/View.php';
    }

}