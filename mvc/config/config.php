<?php


Config::set('site_name','your site name');

Config::set('languages',array( 'en', 'fr'));

Config::set('routes',array(
    'default'=> '',
    'admin' => 'admin'
));

Config::set('default_route','default');
Config::set('default_language','en');
Config::set('default_controller','pages');
Config::set('default_action','index');