<?php

class Request_Core 
{
    
    private static $_controller;
    private static $_action;
    
    public static function init()
    {
        require APP_PATH . 'config/routes.php';
        $request_uri = explode('/' , $_SERVER['REQUEST_URI']);
        
        
        $requestAux =  explode('@',$routes[$request_uri[1]]);
        self::$_controller = $requestAux[0];
        self::$_action = $requestAux[1];

    }
    
    public static function getController()
    {
        return self::$_controller;
    }
    
    public static function getAction()
    {
        return self::$_action;
    }
}