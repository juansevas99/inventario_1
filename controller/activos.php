<?php

class activos extends Controller{
    public $view;
    public $buffer="";
    public $data=[];
    function __construct()
    {
        parent::__construct("activo_m");
        $this->factoryModel=new factoryModel();
       
       
    }
    
    function visualizarActivos(){
        $this->title="Administracion de Activos";
        $clase="activos";
        $metodoActualizar="actualizarActivo";
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }

        // Getting an array with original headers
        
        //

        $this->model->select_($filtros);
        if (isset($this->model->buffer)){
            $buffer=$this->model->buffer;
        }
        else{
            $data=$this->model->data;
        }
        $this->model->index_("");
        $data_select=$this->model->data;
       
        $this->view="adminTemplates";
        include 'lib/templates.php';
    }


    function actualizarActivo(){
        $this->title="Actualizar Activo";
        if ($_GET['Id']){ //validar esta linea
            $filtros=['id_activo'=>$_GET['Id']];
            $this->model->index_($filtros);

            $activo=$this->model->data;
            $this->model->select_($filtros);
            $activo_select=$this->model->data;
            
            //Se buscan los indices en las tabls relacionadas usando model->index
            $marca=$this->factoryModel->validateModel("marca");
            $marca->select_("");

            $proveedor=$this->factoryModel->validateModel("proveedor");
            $proveedor->select_("");
            
            $tipo_activo=$this->factoryModel->validateModel("tipo_activo");
            $tipo_activo->select_("");

            $empleado=$this->factoryModel->validateModel("empleado");
            $empleado->select_("");

            $estado=$this->factoryModel->validateModel("estado");
            $estado->select_("");
            

            
            //Se genera el array
            
            $opciones=array(
                'marca'=>$marca->data,
                'proveedor'=>$proveedor->data,
                'tipo_activo'=>$tipo_activo->data,
                'empleado'=>$empleado->data,
                'estado'=>$estado->data
            );
           
            $datos=array(
                'datos'=>$activo,
                'datos_select'=>$activo_select,
                'opciones'=>$opciones
            );
        //    echo "<pre>";
        //     var_dump($datos);
        //     echo "</pre>";
        //     exit();
        //     exit();
        }
        $this->view="actualizarActivo";
        include 'lib/templates.php';
        
    }
    function confirmarActualizacion(){
        if(isset($_POST['ActualizarActivo'])){ 
            
            unset($_POST['ActualizarActivo']);
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
        
    
        header('Location ?cl=activo&me=visualizarActivos');


        
        

    }
    function confirmarCargaArchivos(){
        unset($_POST['cargarActivos']);
        $valores=[];
        $filtros=[];
        
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
        if (isset($this->model->buffer)){
            $this->buffer=$this->model->buffer;
        }
        else{
            $this->respuesta=$this->model->response;
        }
        
    
        $this->cargarActivos();
        
    }
    
    function cargarActivos(){
        
        //verificar uso de esta línea
        $this->title="Cargar archivos";
        
        $this->model->select_("");
        if (isset($this->model->buffer)){
            $this->buffer.=$this->model->buffer;
        }
        else{
            $this->data=$this->model->data;
            // var_dump($this->data);
            // exit();
        }
        $this->view="cargarActivos";
        include 'lib/templates.php';
        
        
    }
    function borrar(){
        $filtros=[];
        if(isset($_GET['Id'])){
            $filtros['id_activo']=$_GET['Id'];
        }
       
        $this->model->delete_($filtros);
        if (isset($this->model->buffer)){
            $this->buffer.=$this->model->buffer;
            
        }
        else{
            $this->response=$this->model->response;
            
        }
        header("Location: ?");

    }
    
    
    function insertar(){
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            



            $this->model->insert_($_POST);
            header("Location: ?cl=atributo&me=visualizarAtributos");
        }
        else{
            

            $marca=$this->factoryModel->validateModel("marca");
            $marca->select_("");

            $proveedor=$this->factoryModel->validateModel("proveedor");
            $proveedor->select_("");
            
            $tipo_activo=$this->factoryModel->validateModel("tipo_activo");
            $tipo_activo->select_("");

            $atributo=$this->factoryModel->validateModel("atributos");
            $atributo->select_("");  
            
            
            $opciones=array(
                'marca'=>$marca->data,
                'proveedor'=>$proveedor->data,
                'tipo_activo'=>$tipo_activo->data,
                'atributos'=>$atributo->data,
                
            );
           
            $datos=array(
                
                'opciones'=>$opciones
            );
            // echo "<pre>";
            // var_dump($datos);
            // echo "</pre>";
            // exit();
            $this->view="planearCompra";
            include 'lib/templates.php';
            
        }
    }

}
?>