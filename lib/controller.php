<?php

class Controller {
    protected $model;
    public function __construct($model)

    {
        $modelRuta="model/".$model.".php";
        if (file_exists($modelRuta)){
            include $modelRuta;
            $this->model=new $model;
           
             
        }
        $this->view=new view();
        
         
    } 
    

    
}
?>