<?php

function random_uniform(): float
{
    return mt_rand() / mt_getrandmax();
}

$table = [];
for ($i = 0; $i < 20; $i++) {
    $row = [];
    for ($j = 0; $j < 52; $j++) {
        $row[] = random_uniform();
    }
    $table[] = $row;
}

$csv = '';
foreach ($table as $row) {
    $csv .= implode(',', $row) . "\n";
}

file_put_contents('random_data.csv', $csv);