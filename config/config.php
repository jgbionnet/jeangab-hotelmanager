<?php

use App\Service\ServiceContainer;

$configuration = [
    'db' => [
        'dsn'      => 'mysql:dbname=hbhotelmanager;host=localhost;charset=utf8',
        'username' => 'root',
        'password' => '',
    ],
    'env' => [
        'base_path' => 'http://poo/jeangab-hotelmanager',
        'site_name' => 'Jean-Gab Hotel Manager'
    ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer($configuration);

require_once __DIR__ . '/routes.php';