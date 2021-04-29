<?php

    class rol_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="rol";
        }

        function select_($estructura,$filtros){
              
            $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE rol SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM rol";
            $this->delete($query,$filtros);
            
        }
        public function insert_($filtros){
            $query="INSERT INTO rol (rol) values ( ";
            
            $this->insert($query,$filtros);         
    }
    // public function index_($filtros){
    //     $query="SELECT * FROM rol";
    // $this->select($query,$filtros);
    // } 
    }
    
?>