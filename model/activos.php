<?php
class activo_m extends model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
    }
    public function select_($filtros){
        
        $query="SELECT id_activo as 'Id', referencia_activo as 'Referencia',m.nombre_marca as 'Marca',p.nombreContacto_proveedor as 'Contacto de Proveedor',ta.nombre_tipo_activo as 'Tipo',e.documento_empleado as 'Empleado',es.nombre_estado as 'Estado',cantidad as 'Cantidad' FROM activo a";
        $query.=" LEFT JOIN marca m ON m.id_marca=a.id_marca";
        $query.=" LEFT JOIN proveedor p ON p.id_proveedor=a.id_proveedor";
        $query.=" LEFT JOIN tipo_activo ta ON ta.id_tipo_activo=a.id_tipo_activo";
        $query.=" LEFT JOIN empleado e ON e.id_empleado=a.id_empleado";
        $query.=" LEFT JOIN estado es ON es.id_estado=a.id_estado";
        
        $this->select($query,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE activo SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM activo";
  
            $this->delete($query,$filtros);

        }
        public function insert_($data){
            // $query="INSERT INTO activo () values ()";
        }
        public function index_($filtros){
            $query="SELECT * FROM activo a";
        $this->select($query,$filtros);
        }
    
}
?>