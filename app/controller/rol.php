<?php

class rol extends Controller{
    public function __construct()
    {
        parent::__construct("rol_m");
        
    }


    public function prepararCreacion(){
        include "resources/templates/crearrol.php";
    }
    function visualizar(){
        $estructura=[
            'id_rol'=>'id_rol',
            	'rol' => 'Rol'
        ];

        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($estructura,$filtros);
    
        echo json_encode($this->model->data);   
        
    }

    function actualizar(){

        $estructura=[
            'id_rol'=>'id_rol',
            	'rol' => 'rol'
        ];

        $this->model->select_($estructura,['id_rol'=>$_GET['id']]);
        $data=$this->model->data;

        include 'resources/templates/actualizarRol.php';

    }
    function confirmarActualizar(){

            
            $filtros=[];
            $valores=[];
            foreach ($_POST as $key => $value) {
                if (strstr($key,"_set")){
                    $antes=strpos($key,"_set");
                    $key=substr($key,0,$antes);
                    $valores[$key]=$value;
                }
                else if (strstr($key,"_where")){
                    $antes=strpos($key,"_where");
                    $key=substr($key,0,$antes);
                    $filtros[$key]=$value;
                }
            }
            // var_dump($filtros,$valores);
        $this->model->update_($valores,$filtros);

        header("Location: ".URL."routes/admin");

        
        

    }
    function delete(){
        $this->model->delete_(['id_rol'=>$_GET['id']]);
        $this->visualizar();
    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ".URL."routes/admin"); 
                }
       
    }
}