<?php
class proveedor extends Controller{
    function __construct()
    {
        parent::__construct("proveedor_m");
        
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
    function actualizarProveedor(){
        $this->title="Actualizar Proveedor";
        if ($_GET['Id']){ //validar esta linea
            $filtros=['id_proveedor'=>$_GET['Id']];
            $this->model->index_($filtros);

            $activo=$this->model->data;
            $this->model->select_($filtros);
            $activo_select=$this->model->data;
           

            
            

            
            //Se genera el array
       
            $datos=array(
                'datos'=>$activo,
                'datos_select'=>$activo_select
            );
        //    echo "<pre>";
        //     var_dump($datos);
        //     echo "</pre>";
        //     exit();
        }
        $this->view="actualizarProveedor";
        include 'lib/templates.php';
        
    }
    function confirmarActualizacion(){
        if(isset($_POST['ActualizarProveedor'])){ 
            
            unset($_POST['ActualizarProveedor']);
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
        
    
        $this->visualizarProveedor();


        
        

    }

    function borrar(){
        $filtros=[];
        if(isset($_GET['Id'])){
            $filtros['id_proveedor']=$_GET['Id'];
        }
       
        $this->model->delete_($filtros);
        if (isset($this->model->buffer)){
            $this->buffer.=$this->model->buffer;
            
        }
        else{
            $this->response=$this->model->response;
            
        }
        header("Location: ?cl=proveedor&me=visualizarProveedor");
    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ?cl=proveedor&me=visualizarProveedor");
        }
        else{
            $this->view="insertarProveedor";
            include 'lib/templates.php';
            
        }
    }
}

    
    

?>