<?php
class model extends conn implements iadministracion{
    public $data=[];

    function update($query,$valores,$filtros){
        $formatear=new formatearConsulta();
        $query.=$formatear->update($valores,$filtros);
        // echo $query;
        //     exit();
    
      $this->prepararSentencia_update($query,$valores,$filtros);
        if($this->stmt){
            $this->response=$this->stmt;
        }
    }

public function delete($query,$filtros){
    $formatear=new formatearConsulta();
  
    $query.=$formatear->delete($filtros);
    
    $this->prepararSentencia($query,$filtros);
        if($this->stmt){
            $this->response="Se borro exitosamente el dato";
            // echo $this->response;
            // exit();
        }
}
public function insert($query,$filtros){
    $formatear=new formatearConsulta();
    $query.=$formatear->insert($filtros);
    $query.=" )";
    // var_dump($query);
    // exit();
    $this->prepararSentencia($query,$filtros);
    

} 

public function select($query,$filtros){
    $formatear=new formatearConsulta();
        $query.=$formatear->select($filtros);
        // var_dump($query);
        $this->prepararSentencia($query,$filtros);
        
    
         if($this->stmt){
            $this->data=$this->stmt->fetchAll();
            
            // var_dump($this->data);
            // exit();
            
        }
}


}

?>