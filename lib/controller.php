<?php

class Controller {
    protected $model;
    public function __construct($model)

    {

        $this->model=new $model;
         
         
    } 
}
?>