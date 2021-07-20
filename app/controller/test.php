<?php
class test extends Controller{
    public function __construct()
    {
        parent::__construct('ordenCompra_m');
    }
    public function visualizar(){
        $operation=new select($this->model);
        // $operation=new all($operation);
        $operation=new columns($operation,[
        'id_oden_compra' => 'Id',
        'referencia_entradas'=>'Referencia',
        'lote_entradas'=>'Lote',
        'cantidad'=>'Cantidad',
        'precioUnitario'=>'Precio',
        'fecha_creacion_entrada'=>'Fecha',
        'producto_id_producto'=>'Producto',
        'proveedor_id_proveedor'=>'Proveedor']);
        //  Request of type GET cant be received well
        // $operation=new where($operation,['producto_id_producto'=>3]);
        // its lack for adding the functionaluty of allowing more columns by which it orders
        // $operation=new orderby($operation,["fecha_creacion_entrada"]); 
        // $operation=new limit($operation,$_GET['id']);
        // echo $_GET['id'];
    //    $operation->run(); 
        // echo $operation->concaruntenate();
        // exit();
        
        tablas::paginate($operation,7,$_GET['id']);
        // var_dump($this->model->data);
        
        echo json_encode([$this->model->data,tablas::$pages]);
    }   
}
?>