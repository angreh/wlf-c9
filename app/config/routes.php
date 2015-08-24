<?php

$routes = [
    '/'             => 'Index_Controller@index',
    
    /* Festival */
    'festival-list' => 'Festivals_Controller@list_festivals',
    
    /* Login */
    'login'         => 'Login_Controller@login',
    'logout'        => 'Login_Controller@logout',
];