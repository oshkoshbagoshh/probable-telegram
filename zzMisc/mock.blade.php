<?php
$viewData = [
    'categories' => [
        [
            'id' => 1,
            'name' => 'Electronics',
            'products' => [
                [
                    'id' => 101,
                    'name' => 'Smartphone',
                    'price' => "$699",
                    'rating' => '★★★★☆',
                    'image' => asset('img/game.png'),
                ],
                [
                    'id' => 102,
                    'name' => 'Laptop',
                    'price' => "$999",
                    'rating' => '★★★★★',
                    'image' => asset('img/safe.png'),
                ],
            ],
        ],
        [
            'id' => 2,
            'name' => 'Fashion',
            'products' => [
                [
                    'id' => 201,
                    'name' => 'Sneakers',
                    'price' => "$120",
                    'rating' => '★★★★☆',
                    'image' => asset('img/submarine.png'),
                ],
                [
                    'id' => 202,
                    'name' => 'Jacket',
                    'price' => "$250",
                    'rating' => '★★★★★',
                    'image' => asset('img/game.png'),
                ],
            ],
        ],
    ],
];

// Encode the PHP array as JSON
echo '<script>const data = ' . json_encode($viewData) . ';</script>';
?>
