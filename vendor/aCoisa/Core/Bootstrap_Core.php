<?php

class Bootstrap_Core
{
    public static function init()
    {
        //Tratar requisição (endereço, post, get)
        Request_Core::init();
        
        //Configurações
        //Config_Core::init();
        
        $controller = Request_Core::getController();
        $controller = new $controller();
        
        $action = Request_Core::getAction();
        
        $controller->{$action}();

    }
}