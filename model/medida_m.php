<?php

    class medida_m extends model{
        function __construct(){
            parent::__construct();
             $this->table="medida";
    
        }

        function select_($estructura,$filtros){
            
            $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE medida SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            
            $query="DELETE FROM medida";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO medida (nombre_medida) values ( ";
            $this->insert($query,$filtros);
            
    }
    public function index_($filtros){
    $this->select($query,$filtros);
    } 
    }
    
?>