<?php namespace MyPlugin;

/** @var \Herbert\Framework\Panel $panel */
use Herbert\Framework\Notifier;

$panel->add([
	'type'   => 'panel',
	'as'     => 'mainPanel',
	'title'  => 'My Plugin',
	'slug'   => 'myplugin-index',
	'uses'   => function(){
        echo "cool bro";
	}
]);