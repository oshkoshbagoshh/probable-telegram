<?php

$viewData = [
    'name' => 'Article Listing Page',
    'subtitle' => 'As i have met you, so you must acquire one another.',
    'foo' => 'bar',
    'users' => [
        'aj' => 'Chief Technology Officer',
        'Michael' => 'Chief Executive Officer',
        'Jeff' => 'Director of Marketing',
        'Janelle' => 'Director of Human Resources',
        'Kamron' => 'temp',
    ]

];
print_r($viewData);
$encoded = json_encode($viewData);
echo $encoded;