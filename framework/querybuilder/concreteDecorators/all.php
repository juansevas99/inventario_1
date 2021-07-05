<?php

class all extends aggregation {
    private $table;
    function __construct(operation $operation)
    {
        if ($operation->function=="select")
        {
            parent::__construct($operation);
            $this->model=$this->operation->model;
            $this->function="*";
            $this->table=$this->model->table;
            $this->filtros="";
            
            

        }
        else {
            echo "Sql structure is wrong at '".$this->function."'";
            exit();
        }
    }
    
    public function concatenate(): string
    {
        $this->currentStringQuery.=$this->function." from ".$this->operation->model->table;
        $this->queryString=$this->operation->concatenate()." ".$this->currentStringQuery;
        return $this->queryString;
    }
   
}

?>