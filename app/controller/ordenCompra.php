<?php

class ordenCompra extends Controller{
    public function __construct(){
        parent::__construct('ordenCompra_m');



    }
    
    public function prepararCreacion(){
        include "resources/templates/error/404.php";
    }
    public function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
        'id_oden_compra' => 'Id',
        'referencia_entradas'=>'Referencia',
        'lote_entradas'=>'Lote',
        'cantidad'=>'Cantidad',
        'precioUnitario'=>'Precio',
        'fecha_creacion_entrada'=>'Fecha',
        'producto_id_producto'=>'Producto',
        'proveedor_id_proveedor'=>'Proveedor']);
        tablas::paginate($operation,6,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);


    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // echo "query";
            // exit();
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ".URL."routes/admin"); 
            }
       
    }
}

?>