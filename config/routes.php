<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room
$router->get('/rooms/new/', 'RoomsController@new');     // Affiche le form de création
$router->post('/rooms/new/', 'RoomsController@create'); // Traite le form de création

$router->get('/rooms/(\d+)/edit/', 'RoomsController@edit');     // Affiche le form d'édition utilisé pour affecter un client
$router->post('/rooms/(\d+)/edit/', 'RoomsController@update');  // Traite le form d'édition utilisé pour affecter un client

$router->get('/rooms/(\d+)/delete/', 'RoomsController@delete'); // Supprime une room

/**
 * Routes CLIENT
 */
$router->get('/clients', 'ClientsController@index');
$router->get('/clients/(\d+)/', 'ClientsController@show');

$router->get('/clients/new/', 'ClientsController@new');     // Affiche le form de création
$router->post('/clients/new/', 'ClientsController@create'); // Traite le form de création

$router->get('/clients/(\d+)/edit/', 'ClientsController@edit');     // Affiche le form d'édition
$router->post('/clients/(\d+)/edit/', 'ClientsController@update');  // Traite le form d'édition

$router->get('/clients/(\d+)/delete/', 'ClientsController@delete'); // Supprime un client



$router->run();