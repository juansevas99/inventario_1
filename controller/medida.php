<?php

class medida extends Controller{
    public function __construct(){
        parent::__construct('medida_m');



    }
    public function visualizar(){
        $estructura=[
        'nombre_medida' => 'Nombre' ];
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($estructura,$filtros);
        echo json_encode($this->model->data);   


    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location:index.php?cl=rutas&me=administracion"); 
                }
       
    }
}