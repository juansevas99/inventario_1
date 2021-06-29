<?php
include_once 'lib/controller.php';
include_once 'lib/conn.php';
include_once 'lib/iadministrion.php';
include_once 'lib/formatearConsulta.php';
include_once 'lib/model.php';
include_once 'lib/factoryModel.php';
include_once 'lib/view.php';
include_once 'web/web.php';
include_once 'web/iniciarRutas.php';






// llama a todas los archivos que necesitara mas adelante

// incluira cada archivo de la clase que se instancie

// verificar si un request tiene es un POST o GET

// autenticacion d¡y login de usuarios

//Gestion de rutas


// Validate routes

// Asignacion de ruta a una clase y un metodo
// ASignacion de un nombre de pila a esa ruta   




// spl_autoload_register(function ($class_name){
//     $file_controller='controller/'.$class_name.'.php';// Relacion  de controlador y modelo uno a uno
//     // $file_model='model/'.$class_name.'.php';
  
//     if (file_exists($file_controller)){
//         include_once $file_controller;
        
        
        
//     }
//     else{
        
//         include_once 'templates/error.php';
//         exit();
//     }
// });

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
// if (isset($_GET)){
//     $class=isset($_GET['cl']) && !empty($_GET['cl'])?$_GET['cl']:null;
//     $method=isset($_GET['me']) && !empty($_GET['me'])?$_GET['me']:null;

// }
// else if (isset($_POST)){
//     $class=isset($_POST['cl']) && !empty($_POST['cl'])?$_POST['cl']:null;
//     $method=isset($_POST['me']) && !empty($_POST['me'])?$_POST['me']:null;

// }
session_start();


if (web::ValidarRutas($ruta)){
    // se validan las clases y metodos
    if (!isset($_SESSION['logged']) && $ruta!="rutas/error"){
       
        if (isset($_POST['login']) || isset($_POST['signUp']) ){
            //  echo $ruta;
            //  exit();
            web::validarArchivos($ruta);
        }
        else{
        
            
            include_once 'templates/login.php';
        }

    }
    else if((isset($_SESSION['logged']) && $_SESSION['logged']=="logged" ) || $ruta="rutas/error" )  {
       
        web::validarArchivos($ruta);
    }
}
else{
    
    header("Location: http://localhost/project_1/routes/error");

}

     

?>