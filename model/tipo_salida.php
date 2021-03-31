<?php

class tipo_salida_m extends model{
    function __construct(){
        parent::__construct();

    }

    function select_($filtros){
        $query="SELECT id_tipo_salida as 'Id',nombre_tipo_salida as 'Nombre' FROM tipo_salida";
        $this->select($query,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE tipo_salida SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM tipo_salida";
            $this->delete($query,$filtros);
        }
 
    public function insert_($filtros){
        $query="INSERT INTO tipo_salida (code_tipo_salida, nombre_tipo_salida) values ( ";
        $this->insert($query,$filtros);         
    }
    public function index_($filtros){
            $query="SELECT * FROM tipo_salida";
        $this->select($query,$filtros);
        } 
}