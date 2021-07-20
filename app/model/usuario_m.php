<?php

class usuario_m extends model{
   
    function __construct()
    {
        parent::__construct();
        $this->table="usuario";
        $this->columns=["id_usuario","usuario","correo","password"];
        
        
    } 


}


?>