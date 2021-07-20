<?php
include_once 'framework/lib/controller.php';
include_once 'framework/lib/conn.php';
include_once 'framework/lib/iadministrion.php';
include_once 'framework/lib/model.php';
include_once 'framework/lib/view.php';
include_once 'web/web.php';
include_once 'web/iniciarRutas.php';



include_once "./framework/querybuilder/operation.php";
include_once "./framework/querybuilder/aggregation.php";
include_once "./framework/querybuilder/concreteDecorators/columns.php";
include_once "./framework/querybuilder/concreteDecorators/from.php";
include_once "./framework/querybuilder/concreteDecorators/group.php";
include_once "./framework/querybuilder/concreteDecorators/inner.php";
include_once "./framework/querybuilder/concreteDecorators/limit.php";
include_once "./framework/querybuilder/concreteComponents/select.php";
include_once "./framework/querybuilder/concreteComponents/delete.php";
include_once "./framework/querybuilder/concreteComponents/update.php";
include_once "./framework/querybuilder/concreteComponents/insert.php";
include_once "./framework/querybuilder/concreteDecorators/where.php";
include_once "./framework/querybuilder/concreteDecorators/orderby.php";
include_once "./framework/querybuilder/concreteDecorators/offset.php";
include_once "./framework/querybuilder/concreteDecorators/all.php";
include_once "./framework/querybuilder/concreteDecorators/set.php";
include_once "./framework/componentes/tablas.php";




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
    
    header("Location: ".URL."routes/error");

}
