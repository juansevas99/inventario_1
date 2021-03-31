<?php
class categoria extends Controller{
    function __construct()
    {
        parent::__construct("categoria_m");
        
    }


    function visualizar(){
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($filtros);
    
        echo json_encode($this->model->data);   
        
    }

    function actualizarDepartamento(){
        $this->title="Actualizar Departamento";
        if ($_GET['Id']){ //validar esta linea
            $filtros=['id_departamento'=>$_GET['Id']];
            $this->model->index_($filtros);

            $activo=$this->model->data;
            $this->model->select_($filtros);
            $activo_select=$this->model->data;
            
            //Se buscan los indices en las tabls relacionadas usando model->index
            // $estado=$this->factoryModel->validateModel("estado");
            // $estado->select_("");

           
            $datos=array(
                'datos'=>$activo,
                'datos_select'=>$activo_select
            );
        //    echo "<pre>";
        //     var_dump($datos);
        //     echo "</pre>";
        //     exit();
        }
        $this->view="actualizarDepartamento";
        include 'lib/templates.php';
        
    }
    function confirmarActualizacion(){
        if(isset($_POST['ActualizarDepartamento'])){ 
            
            unset($_POST['ActualizarDepartamento']);
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
            // echo "<pre>";
            // var_dump($valores,$filtros);
            // echo "</pre>";
            // exit();
       
        $this->model->update_($valores,$filtros);

        }
        if (isset($this->model->buffer)){
            $this->buffer=$this->model->buffer;
            // var_dump($this->buffer);
            // exit();       
        }
        else{
            $this->respuesta=$this->model->response;
            // var_dump($this->respuesta);
            // exit();
        }
        
    
        header("Location: ?cl=departamento&me=visualizarDepartamento");


        
        

    }

    function borrar(){
        $filtros=[];
        if(isset($_GET['Id'])){
            $filtros['id_departamento']=$_GET['Id'];
        }
       
        $this->model->delete_($filtros);
        if (isset($this->model->buffer)){
            $this->buffer.=$this->model->buffer;
            
        }
        else{
            $this->response=$this->model->response;
            
        }
        header("Location: ?cl=departamento&me=visualizarDepartamento");
    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ?cl=departamento&me=visualizarDepartamento");
        }
        else{
            $this->view="insertarDepartamento";
            include 'lib/templates.php';
            
        }
    }
}

?>