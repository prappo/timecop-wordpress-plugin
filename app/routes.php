<?php namespace MyPlugin;

/** @var \Herbert\Framework\Router $router */
$router->get(['uri'=>'/timecop','uses'=>__NAMESPACE__.'\Controllers\HomeController@index']);
