<?php

// routes
return [
    '/' => [
        'class' => \App\Controller\PageController::class,
        'method' => 'index',
    ],
    '/folder1' => [
        'class' => \App\Controller\PageController::class,
        'method' => 'folder1',
    ],
    '/folder2' => [
        'class' => \App\Controller\PageController::class,
        'method' => 'folder2',
    ],
];