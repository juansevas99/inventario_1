<?php
abstract class  operation {
    public operation $operation;
    // it refers to the string query it will return
    protected $queryString; 
    // it refers  to the model it implements. it provides all the information related to model or Db table
    public  model $model; 
    // it refers to the type of function or type of aggregate function like select, limit, update, from, where etc
    protected $function;
    // collection of possible predecessor functions according to sql syntax
    protected $predecesors;
    // this is the isolated strig formed. it is made up with the parameters passed. 
    protected $currentStringQuery;
    protected $mainOperation;

    public $filtros=[];
    public $valores=[];
    function __construct()
    {
        
    }


    public function concatenate(): string {
        return "";
       
    }
    public function run(){
        switch ($this->operation->mainOperation) {
            case 'select':
                $this->model->listar($this->concatenate(),$this->filtros);
                break;
            case 'update':
                $filtros=array_merge($this->valores,$this->filtros);
                $this->model->actualizar($this->concatenate(),$filtros);
                break;
            case 'delete':
                break;
            case 'insert':
                break;
            
            default:
                
                break;
        }
        


    }
}
?>