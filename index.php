<?php
include_once 'lib/controller.php';
include_once 'lib/conn.php';
include_once 'lib/iadministrion.php';
include_once 'lib/formatearConsulta.php';
include_once 'lib/model.php';
include_once 'lib/factoryModel.php';

spl_autoload_register(function ($class_name){
    $file_controller='controller/'.$class_name.'.php';// Relacion  de controlador y modelo uno a uno
    $file_model='model/'.$class_name.'.php';
    if (file_exists($file_controller) && file_exists($file_model)){
        include_once $file_controller;
        include_once $file_model;
        
        
        
    }
    else{
        return false;
    }
});

// Things we are more likely to receive from anywhere
/*

1. GET Request
2. Post Request

*/
  // we may receive the class and the methiod to execute

    // index.php?c=class_name&method=method_namea

    //escenarios en los que se valida la session 
    /*
        Validacion en cada request
        Validacion al iniciar session y cerrar session
    */ 
if (isset($_GET)){
    $class=isset($_GET['cl']) && !empty($_GET['cl'])?$_GET['cl']:null;
    $method=isset($_GET['me']) && !empty($_GET['me'])?$_GET['me']:null;

}
else if (isset($_POST)){
    $class=isset($_POST['cl']) && !empty($_POST['cl'])?$_POST['cl']:null;
    $method=isset($_POST['me']) && !empty($_POST['me'])?$_POST['me']:null;

}
session_start();

    if (!isset($_SESSION['logged'])){
       
        if (isset($_POST['login']) || isset($_POST['signUp']) ){
            
            ValidateClasss($class,$method);
        }
        else{
        
            
            include_once 'templates/login.php';
        }

    }
    else if(isset($_SESSION['logged']) && $_SESSION['logged']=="logged" )  {

        ValidateClasss($class,$method);
    }


     
 function ValidateClasss ($class, $method)
{
    if ($class){
        $class_instance= new $class;
        if ($method)
        {
            
            $class_instance->{$method}();
            

        }
        
    }  
    else{
        include_once 'templates/index.html';

            
    }
}


?>