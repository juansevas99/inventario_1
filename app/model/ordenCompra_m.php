<?php

    class ordenCompra_m extends model{
        function __construct(){
            parent::__construct();
             $this->table="ordencompra";
             $this->columns=[
                'id_oden_compra',
                'referencia_entradas',
                'lote_entradas',
                'cantidad',
                'precioUnitario',
                'fecha_creacion_entrada',
                'producto_id_producto',
                'proveedor_id_proveedor'];
    
        }

    }
    
?>