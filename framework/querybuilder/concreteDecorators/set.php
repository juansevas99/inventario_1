<?php
include "./aggregation.php";
class set extends aggregation{
    public function __construct(operation $operation)
    {
        parent:: __construct($operation);
        
    }
    public function concatenate(): string
    {
       return parent::concatenate();
    }
    public function run(){

    }
    
}

?>