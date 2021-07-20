<?php

class usuario_has_rol extends model{
   
    function __construct()
    {
        parent::__construct();
        $this->table="usuario";
        $this->columns=["id_usuario","usuario","correo","password"];
        
        
    } 


}


?>