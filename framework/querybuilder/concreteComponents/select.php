<?php

include './operation.php';
class select extends operation {
    private $table;
    function __construct(model $model)
    {
        $this->model=$model;
        $this->function="select ";
        $this->table=$this->model->table;

        parent::__construct();
    }
    
    public function concatenate(): string
    {
       return parent::concatenate();
    }
    public function run(){

    }
}

?>