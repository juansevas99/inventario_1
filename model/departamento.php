<?php

    class departamento_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_departamento as 'Id', nombre_departamento as 'Nombre' FROM departamento";
            $this->select($query,$filtros);
        }
        public function update_($valores,$filtros){
            $query="UPDATE departamento SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM departamento";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO departamento (nombre_departamento) values ( ";
            $this->insert($query,$filtros);
    }
    public function index_($filtros){
        $query="SELECT * FROM departamento";
    $this->select($query,$filtros);
    }
    }
    
?>