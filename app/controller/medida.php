<?php

class medida extends Controller{
    public function __construct(){
        parent::__construct('medida_m');



    }

    
    public function prepararCreacion(){
        include "resources/templates/crearmedida.php";
    }
    public function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_medida'=>'COD',
            'nombre_medida'=>'Medida']);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]); 
    }

    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: http://localhost/project_1/routes/admin"); 
                }
       
    }


    function actualizar(){

        $estructura=[
            'id_medida'=>'id_medida',
            'nombre_medida' => 'nombre_medida' ];

        $this->model->select_($estructura,['id_medida'=>$_GET['id']]);
        $data=$this->model->data;

        include 'resources/templates/actualizarmedida.php';

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

        header("Location: http://localhost/project_1/routes/admin");

        
        

    }
    function delete(){
        $this->model->delete_(['id_medida'=>$_GET['id']]);
        $this->visualizar();  
      }
}