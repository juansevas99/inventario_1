<?php

    class ordenCompra_m extends model{
        function __construct(){
            parent::__construct();
             $this->table="ordencompra";
    
        }

        function select_($estructura,$filtros){
            
            $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE ordencompra SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            
            $query="DELETE FROM ordencompra";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO ordencompra (codigo_ordencompra, nombre_ordencompra) values ( ";
            $this->insert($query,$filtros);
            
    }
    public function index_($filtros){
    $this->select($query,$filtros);
    } 
    }
    
?>