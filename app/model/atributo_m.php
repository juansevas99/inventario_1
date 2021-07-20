<?php

    class atributo_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="atributo";
            $this->columns=['id_atributo','nombre_atributo','medida_id_medida'];
    
        }

    }
    
?>