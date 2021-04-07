<?php

    class atributo_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="atributo";
    
        }

        function select_($estructura,$filtros){
            
            $this->select($this->table,$estructura,$filtros);
        }
        public function update_($valores,$filtros){
            $query="UPDATE atributo SET ";
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