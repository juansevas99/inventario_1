<?php

    class medida_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_medida as 'Id',nombre_medida as 'Nombre' FROM medida ";
            $this->select($query,$filtros);
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
            $query="INSERT INTO medida (codigo_medida, nombre_medida) values ( ";
            $this->insert($query,$filtros);
            
    }
    public function index_($filtros){
        $query="SELECT * FROM medida";
    $this->select($query,$filtros);
    } 
    }
    
?>