<?php

class Database_Core 
{

    private static $_dbLink;
    
    /**
     * @ return mysqli
     */
    public static function connectDB()
    {
        //connect no banco
        self::$_dbLink = mysqli_connect('localhost','root','','acoisa');
        return self::$_dbLink;
        
    }
    
    /**
     * @ return mysqli
     */
    private static function getDBLink()
    {
        return self::$_dbLink;
    }
    
    public static function query($sql)
    {
        $db = self::connectDB();
        
        return $db->query($sql);
        //faz query com retorno
    }
    
    public static function lastAffectedId()
    {
        //mostra ultima linha editada ou criado
        $db = self::getDBLink;
        return $db->insert_id;
    }
    
}