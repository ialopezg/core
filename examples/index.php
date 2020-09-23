<?php

require_once '../vendor/autoload.php';

$array = ialopezg\Core\IteratorObject::toArray([
    'movies' => [
        'the_thin_red_line' => [
            'title' => 'The Thin Red Line',
            'directed_by' => 'Terrence Malick',
            'produced_by' => 'Robert Michael, Geisler Grant Hill, John Roberdeau',
            'decription' => 'Adaptation of James Jones autobiographical 1962 novel, focusing on the conflict at Guadalcanal during the second World War.'
        ]
    ]
]);

var_dump($array);
