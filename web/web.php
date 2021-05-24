<?php


// requerimiento: Se necesita que se implemente una forma para poder hacer 
// 1. Validacion de estrucura y de existencia de rutas
// 2. Acceso a rutas desde cualquier parte de la aplicacion
// 3. Inicializacion de clases y metodos desde las rutas


class web{

    function __construct()
    {
        $this->routes=[];   
    }
    
    function registrarRutas($rutaBar, $clase, $metodo){
            
        $this->routes[$rutaBar]=[$clase,$metodo]; // it suggested that if it specified the same route, it is going to relate the last specified route
        
    }
    function ValidarRutas($rutaBar){
        $exists=array_key_exists($rutaBar,$this->routes);
        return $exists;
    }   
    function validarArchivos($rutaBar){
        
    }

    


}