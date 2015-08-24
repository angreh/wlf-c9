<?php

/**
 * caso o PHP não encontre a classe que foi tentada ser instanciada o AutoLoader
 * vai buscar o lugar da classe e dar o require necessário, funciona tanto para
 * os helpers como para os Mappers, Models, Controller e etc ...
 * 
 * @author Angreh (angreh@gmail.com)
 * @version 2.0 
 */
class AutoLoader_Core 
{
    /**
     * Instância da classe AutoLoader
     * @var AutoLoader 
     */
    private static $_instance = null;
    
    /**
     * Retorna uma instância de AutoLoader, caso não exista é criada
     * 
     * @return AutoLoader_Core
     */
    public static function getInstance() {
        if (self::$_instance == null)
            self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * Informa para o PHP qual função ele deve executar caso não encontre a 
     * classe desejada
     */
    public function register() {
        spl_autoload_register(array($this, '_autoloader'));
    }
    /**
     * Define o caminho e arquivo que deve ser usado no require para que a 
     * classe seja instanciada
     * 
     * @param string $name nome da classe procurada
     */
    private function _autoloader($name)
    {
        $pieces = explode('_', $name);
        
        if($pieces[1]=='Core')
        {
            require_once SYSTEM_PATH . $name . '.php';
        } else {
            
            require_once APP_PATH . $pieces[1] . '/' . $name . '.php'; 
        }
    }
}
