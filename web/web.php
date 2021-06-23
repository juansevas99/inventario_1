<?php


// requerimiento: Se necesita que se implemente una forma para poder hacer 
// 1. Validacion de estrucura y de existencia de rutas
// 2. Acceso a rutas desde cualquier parte de la aplicacion
// 3. Inicializacion de clases y metodos desde las rutas


class web{ 
    
    
    public static $routes=[];
    function __construct()
    {
        
    }
    
    static function registrarRutas($rutaBar, $clase, $metodo){
            
        web::$routes[$rutaBar]=[$clase,$metodo]; // it suggested that if it specified the same route, it is going to relate the last specified route
        
    }
    static function ValidarRutas($rutaBar){
        $exists=array_key_exists($rutaBar,web::$routes);
        return $exists;
    }   
    static function validarArchivos($rutaBar){
        
        spl_autoload_register(function ($class_name) {
            $file="controller/".$class_name.".php";
            if (file_exists($file)){
                
                include $file;
                
            }
            else{

                echo "file not found";
                exit();
                // header("Location: rutas/error");
                
            }
        });

       
        
        $class= new web::$routes[$rutaBar][0];
        $class->{web::$routes[$rutaBar][1]}();
       
            
        }//  verify the existence of both: method and class


}

    


