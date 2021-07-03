<?php
abstract class  operation {
    // it refers to the string query it will return
    protected $queryString; 
    // it refers  to the model it implements. it provides all the information related to model or Db table
    protected model $model; 
    // it refers to the type of function or type of aggregate function like select, limit, update, from, where etc
    protected $function;
    // collection of possible predecessor functions according to sql syntax
    protected $predecesors;
    // this is the isolated strig formed. it is made up with the parameters passed. 
    protected $currentStringQuery;
    function __construct()
    {
        
    }


    public function concatenate(): string {
        $this->queryString=$this->operation->concatenate()." ".$this->currentStringQuery;
        return $this->queryString;
    }
    abstract public function run();
    
}
?>