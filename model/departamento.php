<?php

    class categoria_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_categoria as 'Id', nombre_categoria as 'Nombre' FROM categoria";
            $this->select($query,$filtros);
        }
        public function update_($valores,$filtros){
            $query="UPDATE categoria SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM categoria";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO categoria (nombre_categoria) values ( ";
            $this->insert($query,$filtros);
    }
    public function index_($filtros){
        $query="SELECT * FROM categoria";
    $this->select($query,$filtros);
    }
    }
    
?>