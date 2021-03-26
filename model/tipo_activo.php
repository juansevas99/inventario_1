<?php
class tipo_activo_m extends model{
    function __construct(){
        parent::__construct();

    }

    function select_($filtros){
        $query="SELECT id_tipo_activo as 'Id',code_tipo_activo as 'Codigo',	nombre_tipo_activo  as 'Nombre' FROM tipo_activo";
        $this->select($query,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE tipo_activo SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM tipo_activo";
            $this->delete($query,$filtros);
        }
 
    public function insert_($filtros){
        $query="INSERT INTO tipo_activo (code_tipo_activo, nombre_tipo_activo) values ( ";
        $this->insert($query,$filtros);         
    }
    public function index_($filtros){
            $query="SELECT * FROM tipo_activo";
        $this->select($query,$filtros);
        } 
}
?>