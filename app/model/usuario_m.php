<?php

class usuario_m extends model{
   
    function __construct()
    {
        parent::__construct();
        $this->table="usuario";
        
    } 
    
    public function select_($estructura,$filtros){
        $this->select($this->table,$estructura,$filtros);

    }


    public function update_($valores,$filtros){
        $query="UPDATE usuario SET ";
        $this->update($query,$valores,$filtros);
    }
    public function delete_($filtros){
        $query="delete from ".$this->table;
        $this->delete($query,$filtros);

    }
    
    public function insert_($filtros){
        $query="INSERT INTO usuario (usuario, correo, password) values ( ";
        $this->insert($query,$filtros);
        
        }
    // public function index_($filtros){
    //     $query="SELECT * FROM usuario a";
    // $this->select($query,$filtros);
    // }
  


}


?>