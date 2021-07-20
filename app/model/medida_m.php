<?php

    class medida_m extends model{
        function __construct(){
            parent::__construct();
             $this->table="medida";
             $this->columns=['id_medida','nombre_medida'];
    
        }

       
    }
    
?>