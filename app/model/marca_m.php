<?php   

    class marca_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="marca";
            $this->columns=['id_marca','nombre'];
        }

        
    }
    
?>