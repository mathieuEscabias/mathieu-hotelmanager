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
$router->get('rooms/new/', 'RoomsController@new'); // crée nouvelle chambre
$router->post('rooms/new/', 'RoomsController@create');// on envoie


/**
 * Routes CLIENT
 */
$router->get('clients/', 'ClientsController@index');
$router->get('clients/new/', 'ClientsController@new'); //crée nouveau client
$router->post('clients/new/', 'ClientsController@create'); // boom on envoie

$router->run();


