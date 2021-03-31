<?php

    class atributo_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_atributo as 'Id', nombre_atributo as 'Codigo',medida_id_medida as 'Medida'  FROM atributo";
            $this->select($query,$filtros);
        }
        public function update_($valores,$filtros){
            $query="UPDATE atributos SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM atributos";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO atributos (code_atributos, nombre_atributos) values ( ";
            $this->insert($query,$filtros);
    }
    public function index_($filtros){
        $query="SELECT * FROM atributos";
    $this->select($query,$filtros);
    }
    }
    
?>