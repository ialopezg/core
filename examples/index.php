<?php

require_once '../vendor/autoload.php';

$array = \ialopezg\Core\IteratorObject::toArray([
    'log_path' => 'logs',
    'default_view' => 'Home'
]);

var_dump($array);

// Produces:
