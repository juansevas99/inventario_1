<?php

class salidas extends Controller{
    public function __construct(){
        parent::__construct('salidas_m');



    }
    
    public function prepararCreacion(){
        include "templates/crearSalida.php";
    }
    // public function visualizar(){
    //     $estructura=[
    //     'id_oden_compra' => 'Id',
    //     'referencia_entradas'=>'Referencia',
    //     'lote_entradas'=>'Lote',
    //     'cantidad'=>'Cantidad',
    //     'precioUnitario'=>'Precio',
    //     'fecha_creacion_entrada'=>'Fecha',
    //     'producto_id_producto'=>'Producto',
    //     'proveedor_id_proveedor'=>'Proveedor'
    // ];
    //     $filtros="";
    //     if (isset($_POST['send'])){
    //         unset($_POST['send']);
    //         $filtros=$_POST;
    //     }
    //     $this->model->select_($estructura,$filtros);
    //     echo json_encode($this->model->data);   


    // }

    public function crear(){
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ?cl=rutas&me=ordencompra");
        }
        else{
            $variables=["titulo"=>"Creacion de salidas","referencia"=>$_GET["id"]];
            $this->view->render("crearSalida",$variables);
            
        }
    }
}

?>