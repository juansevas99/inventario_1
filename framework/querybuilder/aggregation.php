<?php
class aggregation extends operation{
    
    
    function __construct(operation $operation)
    {   
        parent::__construct();
        $this->operation=$operation;
        $this->model=$this->operation->model;
        $this->table=$this->model->table;
        $this->filtros=$operation->filtros;
        $this->valores=$operation->valores;
        $this->mainOperation=$operation->mainOperation;
    }
    
    
    // public function run(){

    // }

    
}
?>
