<?php

return [
    'meta' => [
        'header' => '[Adblock Plus 2.0]',
        'title' => 'AdBlockID',
        'description' => 'Filter list that specifically removes adverts on Indonesian language websites.',
        'last_modified' => '%timestamp%',
        'expires' => '4 days (update frequency)',
        'homepage' => 'https://github.com/realodix/AdBlockID',
    ],

    'content' => [
        'tests/international.adfl',
        'tests/movie.adfl',
    ],
];
