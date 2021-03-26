<?php

class empleado_m extends model{

    function __construct()
    {
        parent::__construct();
    }
    public function select_($filtros){
        
        $query=" SELECT  id_empleado as 'Id', documento_empleado as 'Documento',telefono_empleado as 'Telefono',correo_empleado as 'Correo',nombre_departamento as 'Departamento'";
        $query.=" FROM empleado E LEFT JOIN departamento D ON E.id_departamento=D.id_departamento";
        $this->select($query,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE empleado SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM empleado";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO empleado (documento_empleado, telefono_empleado,correo_empleado,id_departamento) values ( ";
            $this->insert($query,$filtros);
    }
    public function index_($filtros){
        $query="SELECT * FROM empleado";
    $this->select($query,$filtros);
    } 
}
?>