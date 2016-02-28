<?php
return [
    'name' => "Larablog",
    'title' => "Pri Anton S.",
    'subtitle' => 'Larablog dari Laravel 5.2',
    'description' => 'Larablog Purwokerto',
    'author' => 'Pri Anton Subardio',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];
