<?php
include 'operation.php';
class aggregation extends operation{
    public operation $operation;
    
    function __construct(operation $operation)
    {   
        parent::__construct();
        $this->operation=$operation;

        
        
    }
    
    public function concatenate(): string
    {
       return parent::concatenate();
    }
    public function run(){

    }

    
}
?>
