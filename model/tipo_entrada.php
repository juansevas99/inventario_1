<?php

class tipo_entrada_m extends model{
    function __construct(){
        parent::__construct();
        $this->table="tipos_entrada";
    }

    function select_($estructura,$filtros){
        $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE tipos_entrada SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM tipos_entrada";
            $this->delete($query,$filtros);
        }
 
    public function insert_($filtros){
        $query="INSERT INTO tipos_entrada (tipos_entrada, tipos_entrada) values ( ";
        $this->insert($query,$filtros);         
    }
    public function index_($filtros){
            $query="SELECT * FROM tipos_entrada";
        $this->select($query,$filtros);
        } 
}