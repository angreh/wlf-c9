<?php

class Festivals_Controller 
{
    public function list_festivals()
    {
        $festivals = new Festival_Model();
        $list = $festivals->list_festivals();
        
        $return = [
            'festivals' => $list,
        ];
        
        echo json_encode($return);
    }
}