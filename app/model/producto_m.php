<?php
class producto_m extends model{
    function __construct(){

        parent::__construct();

         $this->table="producto";
         $this->columns=[
            'id_producto',
            'referencia_producto',
           'nombre_producto',
           'fecha_creacion',
           'estado_id_estado',
           'categoria_id_categoria',
           'stock_producto',
           'proveedor_id_proveedor',
           'marca_id_marca'
         ];

    }

   
}

?>
