<?php
    $square = [];
    $cube = [];

    for ($i = 10; $i <= 20; $i++) {
        $square[] = $i ** 2;
    }
    echo '<pre>Square ';
    print_r($square);
    echo '</pre>';

    for ($i = 1; $i <= 10; $i++) {
        $cube[] = $i ** 3;
    }
    echo '<pre>Cube ';
    print_r($cube);
    echo '</pre>';

    $merged = array_merge($square, $cube);

    echo '<pre>Merged ';
    print_r($merged);
    echo '</pre>';
