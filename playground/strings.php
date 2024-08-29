<?php

$title = 'PHP fundamentals';

$message = 'Welcome to ' . $title;

// "" double qutes can do intepolation
$message2 = "Welcome to $title";

// json as string heredoc syntax if i want to interpolate, nowdoc
$json = <<<JSON
    {
        "test": "2",
        "canInsidePut": "$message"
    }
JSON;


$year = 2024;
// if i want to put expression inside
$message3 = "Welcome to $title " . ($year+1);

// or  "Welcome to $title {($year + 1)}"
// not working
$message4 = "Welcome to $title {($year + 1)}";
echo $message4;
