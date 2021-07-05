<?php



class columns extends aggregation{
    public function __construct(operation $operation, $parameters)
    {
        if ($operation->function=="select" || $operation->function=="inner")
        {
            parent:: __construct($operation);
            $this->function="column";
            $this->model=$operation->model;
            $this->parameters=$parameters;
            $this->filtros="";
            $keys=array_keys($parameters);
            for ($i=0; $i <count($keys) ; $i++) { 
                if(!in_array($keys[$i],$operation->model->columns)){
                    echo "The columns specified for this query have not been defined yet";

                   exit(); 
                }
                

            }
            
        }
        else {
            echo "The SQL structure at fieds clausure is wrong. Verify and try again!";
            exit();
        }        
    }
    public function concatenate(): string
    {
        

        if ($this->parameters)
        {


            $columns=array_map(function($keys,$valores){
                return $keys." as '".$valores."'";
            },array_keys($this->parameters),array_values($this->parameters));
            
            
            $this->currentStringQuery=implode(",",$columns);
            return $this->operation->concatenate()." ".$this->currentStringQuery." from ".$this->operation->model->table;
        }
        else{
            return "";
        }

    }
    // public function run(){

    // }
    
}

?>