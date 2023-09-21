<?php

namespace App\Object;

class Foo
{

    private string $sHelloString = 'Hello world!';

    private array $aArray = [
        'test' => 'test value',
    ];

    public function __toString() {
        $result = '';
        foreach (get_object_vars($this) as $property => $value) {
            if (is_array($value)) {
                $result .= "$property: ". PHP_EOL . print_r($value, true) . PHP_EOL;
            } else {
                $result .= "$property: $value".PHP_EOL;
            }
        }
        return $result;
    }
}