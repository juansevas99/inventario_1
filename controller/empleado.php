<?php
class empleado extends Controller {
    function __construct()
    {
        parent::__construct("empleado_m");
        $this->factoryModel=new factoryModel();
        

    }
    function visualizarEmpleado(){
        $this->title="Administracion de empleado";
        $clase="empleado";
        $metodoActualizar="actualizarEmpleado";
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($filtros);
        if (isset($this->model->buffer)){
            $buffer=$this->model->buffer;
        }
        else{
            $data=$this->model->data;
        }
       
        $this->view="adminTemplates";
        include 'lib/templates.php';
    }

    function actualizarEmpleado(){
        $this->title="Actualizar Empleado";
        if ($_GET['Id']){ //validar esta linea
            $filtros=['id_empleado'=>$_GET['Id']];
            $this->model->index_($filtros);

            $activo=$this->model->data;
            $this->model->select_($filtros);
            $activo_select=$this->model->data;
            
            //Se buscan los indices en las tabls relacionadas usando model->index
            $departamento=$this->factoryModel->validateModel("departamento");
            $departamento->select_("");

            
            

            
            //Se genera el array
            
            $opciones=array(
                'departamento'=>$departamento->data,
                
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
        }
        $this->view="actualizarEmpleado";
        include 'lib/templates.php';
        
    }
    function confirmarActualizacion(){
        if(isset($_POST['ActualizarEmpleado'])){ 
            
            unset($_POST['ActualizarEmpleado']);
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
        
    
        header("Location: ?cl=empleado&me=visualizarEmpleado");


        
        

    }
    function borrar(){
        $filtros=[];
        if(isset($_GET['Id'])){
            $filtros['id_empleado']=$_GET['Id'];
        }
       
        $this->model->delete_($filtros);
        if (isset($this->model->buffer)){
            $this->buffer.=$this->model->buffer;
            
        }
        else{
            $this->response=$this->model->response;
            
        }
        header("Location: ?cl=empleado&me=visualizarEmpleado");
    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();

            $this->model->insert_($_POST);


            header("Location: ?cl=empleado&me=visualizarEmpleado");
        }
        else{
            $departamento=$this->factoryModel->validateModel("departamento");
            $departamento->select_("");
            $opciones=array(
                'departamento'=>$departamento->data,
                
            );$datos=array(
                'opciones'=>$opciones
            );

            $this->view="insertarEmpleado";
            include 'lib/templates.php';
            
        }
    }
}
?>