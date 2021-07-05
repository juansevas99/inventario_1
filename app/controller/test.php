<?php
class test extends Controller{

    public function __construct()
    {
        parent::__construct('test_m');
    }
    public function visualizar(){
        $operation=new select($this->model);
    //    $operation=new all($operation);
        $operation=new columns($operation,["id_usuario"=>"Cod","usuario"=>"Usuario","correo"=>"Correo"]);
        // $operation=new where($operation,["numeroIdentificacion"=>"123456","telefono"=>"46845348"]);
        // $operation=new orderby($operation,["numeroIdentificacion"]);
        $operation->run();


        echo json_encode($this->model->data);
        
        

        
        
        
    }   
}
?>