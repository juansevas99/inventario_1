<?php

class tipo_salida_m extends model{
    function __construct(){
        parent::__construct();
        $this->table="tipo_salida";
    }

    function select_($estructura,$filtros){
        $this->select($this->table,$estructura,$filtros);
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
        $query="INSERT INTO tipo_salida (nombre_tipo_salida) values ( ";
        $this->insert($query,$filtros);         
    }
    // public function index_($filtros){
    //         $query="SELECT * FROM tipo_salida";
    //     $this->select($query,$filtros);
    //     } 
}