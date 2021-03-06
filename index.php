<?php
$categories = ["Доски и лыжи","Крепления","Ботинки","«Одежда»","Инструменты","Разное"];
$products = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '9999.9',
        'picture' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => '999',
        'picture' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'picture' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal  ',
        'category' => 'Ботинки',
        'price' => '10999',
        'picture' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'picture' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'picture' => 'img/lot-6.jpg'
    ]

];

$page_content = include_template('main.php', [
        'categories' => $categories,
        'products' => $products
    ]
);
$page_layout = include_template('layout.php', [
        'content' => $page_content,
        'title' => 'Главная страница',
        'user_name' => $user_name,
        'categories' => $categories
    ]
);

print ($page_layout);

?>