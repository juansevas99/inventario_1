<?php
class producto_m extends model{
    function __construct(){
        parent::__construct();
         $this->table="producto";

    }

    function select_($estructura,$filtros){
        
        $this->select($this->table,$estructura,$filtros);
    }


    public function update_($valores,$filtros){
        $query="UPDATE producto SET ";
        $this->update($query,$valores,$filtros);
    }
    public function delete_($filtros){
        
        $query="DELETE FROM producto";
        $this->delete($query,$filtros);
    }
    public function insert_($filtros){
        $query="INSERT INTO producto (referencia_producto, nombre_producto,estado_id_estado, categoria_id_categoria,proveedor_id_proveedor ,marca_id_marca) values ( ";
        $this->insert($query,$filtros);
        
}
public function index_($filtros){
    $query="SELECT * FROM producto";
$this->select($query,$filtros);
} 
}

?>
