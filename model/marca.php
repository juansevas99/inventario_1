<?php

    class marca_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_marca	 as 'Id', codigo_marca as 'Codigo',nombre_marca as 'Nombre' FROM marca ";
            $this->select($query,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE marca SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            
            $query="DELETE FROM marca";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO marca (codigo_marca, nombre_marca) values ( ";
            $this->insert($query,$filtros);
            
    }
    public function index_($filtros){
        $query="SELECT * FROM marca";
    $this->select($query,$filtros);
    } 
    }
    
?>