<?php

class inner extends aggregation{
    public function __construct(operation $operation,$table)
    {   
        $this->function="inner join";
        if ($operation->function=="*" || $operation->function=="columns"){
            parent:: __construct($operation);
            $this->innerTable=model($table);

        }
        else {
            echo "The SQl strutucture is wrong at ".$this->function." function.";
            exit();
        }
        
        
    }
    public function concatenate(): string
    {
        $this->currentStringQuery=$this->function." ".$this->innerTable->table;

       return $this->operation->concatenate();
    }
    public function run(){

    }
    private function model($table){
        switch ($table) {
            case 'usuario':
                return new usuario_m();
                break;
            case 'rol':
                return new rol_m();
                break;
            case 'categoria':
                return new cateogria_m();
                break;
            default:
                echo "The table you wanted doesn't exist";
                exit();
                break;
        }
    }
    
}

?>