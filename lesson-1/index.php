<?php

$sum = 40 + 1;

$hello = 'Hello';
$skillbox = "{$hello} Skillbox";

// echo $skillbox . PHP_EOL;


function print_special(string $message, int $mode = 1) : string {

    if($mode === 1) {
        $decorator = '-=';
    } else {
        $decorator = '\/';
    }

    $decorator_line = str_repeat($decorator, strlen($message) / 2) . '<br>';
    
    return $decorator_line . $message . '<br>' . $decorator_line;

}

$hello = print_special('TESTTESTTEST', 2);

echo $hello;