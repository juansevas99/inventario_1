<?php
// Es el encagado de formatear la consulta
// Da respuesta de lo que salio en la base de datos
class model extends conn implements iadministracion{
    public $data=[];

function update($query,$valores,$filtros){
    $formatear=new formatearConsulta();
    $query.=$formatear->update($valores,$filtros);
    

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

    
   
    
    $this->prepararSentencia($query,$filtros);
    $this->data=$this->stmt;
    

} 

public function select($table,$estructura,$filtros){
    $formatear=new formatearConsulta();
        $query=$formatear->select($table,$estructura,$filtros);
        // echo json_encode($query);
        
        $this->prepararSentencia($query,$filtros);
        
    
         if($this->stmt){
            $this->data=$this->stmt->fetchAll();
            
            
            // exit();
            
        }
}

public function listar($query,$filtros){
    $this->prepararSentencia($query,$filtros);
    if($this->stmt){
        $this->data=$this->stmt->fetchAll();
        
        
        // exit();
        
    }
    
}


}

?>