<?php


$router->get('/podcasts', 'PodcastController@index');
$router->get('/podcasts/{id}', 'PodcastController@show');
