<?php

class ordenCompra extends Controller{
    public function __construct(){
        parent::__construct('ordenCompra_m');



    }
    public function visualizar(){
        $estructura=[
        'id_oden_compra' => 'Id',
        'referencia_entradas'=>'Referencia',
        'lote_entradas'=>'Lote',
        'cantidad'=>'Cantidad',
        'precioUnitario'=>'Precio',
        'fecha_creacion_entrada'=>'Fecha',
        'producto_id_producto'=>'Producto',
        'proveedor_id_proveedor'=>'Proveedor'
    ];
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($estructura,$filtros);
        echo json_encode($this->model->data);   


    }
}

?>