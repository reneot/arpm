<?php

require './vendor/autoload.php';


if (php_sapi_name() === 'cli') {
// object
    $foo = new \App\Object\Foo();
    echo $foo;

// count
    $array = [
        'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
        'red' => ['strawberry', 'cheer', 'tomato'],
        'sweet' => ['sugar', 'cake', 'strawberry'],
    ];

    $counter = new \App\ArrayCounter\NestedArrayCounter('strawberry');
    echo $counter->countForArray($array);
}

// mvc
(new \App\Kernel())->process();