<?php

class usuario extends Controller
{


    function __construct()
    {
        parent::__construct("usuario_m");
    }
    public function visualizar()
    {
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_usuario'=>'COD',
            'usuario'=>'Usuario',
            'correo'=>'Correo'
        ]);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);
 }
    public function prepararCreacion(){
        include "resources/templates/crearusuario.php";
    }
    public function login()
    {
        unset($_POST['login']);
        $operation=new select($this->model);
        $operation=new all($operation);
        $operation=new where($operation,['correo' => $_POST['correo']]);
        $operation->run();
        
        if (isset($this->model->data) && !empty($this->model->data)) {
                $data = $this->model->data;
                
                $_SESSION['logged'] = "logged";
                $_SESSION['name_user'] = $data[0]['usuario'];
                $_SESSION['email_user'] = $data[0]['correo'];
                $_SESSION['id_user'] = $data[0]['password'];
               

       
           
        }
        
        header("Location: /project_1");
    }


    function actualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_usuario'=>'id_usuario',
            'usuario' => 'usuario',
             'correo' => 'correo',]);
        $operation=new where($operation,['id_usuario'=>$_GET['id']]);
        $operation->run();
        $data=$this->model->data;
        
        include 'resources/templates/actualizarUsuario.php';
    }
    public function confirmarActualizar(){
            $operation=new update($this->model);
            $operation=new set($operation,$_POST);
            
            $operation=new where($operation,['id_usuario'=>$_POST['id']]);
            $operation->run();
            header("Location: ".URL."routes/settings");            
    }

    function delete(){
        $this->model->delete_(['id_usuario'=>$_GET['id']]);
        header("Location: ".URL."routes/admin");
    }

    public function cerrarSesion()
    {
        session_destroy();
        header('Location: /project_1');
    }
    
}
