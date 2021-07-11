<?php

    class proveedor_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="proveedor";
            $this->columns=[
                'id_proveedor',
                'nombre_proveedor',
                'correo',
                'documento',
                'telefono'
            ];
    
        }

        function select_($estructura,$filtros){
            
            $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE proveedor SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM proveedor";
            $this->delete($query,$filtros);
            
        }
        public function insert_($filtros){
            $query="INSERT INTO proveedor (nombre_proveedor,correo,documento,telefono) values ( ";
            
            $this->insert($query,$filtros);         
    }
    public function index_($filtros){
        $query="SELECT * FROM proveedor";
    $this->select($query,$filtros);
    } 
    }
    
?>