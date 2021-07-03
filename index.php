<?php
include_once 'framework/lib/controller.php';
include_once 'framework/lib/conn.php';
include_once 'framework/lib/iadministrion.php';
include_once 'framework/lib/formatearConsulta.php';
include_once 'framework/lib/model.php';
include_once 'framework/lib/factoryModel.php';
include_once 'framework/lib/view.php';
include_once 'web/web.php';
include_once 'web/iniciarRutas.php';


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
        
            
            include_once 'resources/templates/login.php';
        }

    }
    else if((isset($_SESSION['logged']) && $_SESSION['logged']=="logged" ) || $ruta="rutas/error" )  {
       
        web::validarArchivos($ruta);
    }
}
else{
    
    header("Location: http://localhost/project_1/routes/error");

}
