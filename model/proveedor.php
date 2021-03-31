<?php

    class proveedor_m extends model{
        function __construct(){
            parent::__construct();
    
        }

        function select_($filtros){
            $query="SELECT id_proveedor as 'Id',	nombre_proveedor as 'Nombre',	correo  as 'Correo',	documento  as 'Documento', 'telefono' as 'Telefono' FROM proveedor ";
            $this->select($query,$filtros);
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
            $query="INSERT INTO proveedor (codigo_proveedor, nombreContacto_proveedor,correo_proveedor,telefono_proveedor) values ( ";
            
            $this->insert($query,$filtros);         
    }
    public function index_($filtros){
        $query="SELECT * FROM proveedor";
    $this->select($query,$filtros);
    } 
    }
    
?>