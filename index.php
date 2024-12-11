<?php

$books = [
    [
        'name' => 'Do Androids of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1986,
        'purchaseUrl' => 'http://Example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://Example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 1986,
        'purchaseUrl' => 'http://Example.com'
    ]
    ];



    $filteredBooks = array_filter($books, function ($book) {
        return $book['author'] === 'Andy Weir';
    });

    require "index.view.php";

