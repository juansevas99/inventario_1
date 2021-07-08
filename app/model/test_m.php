<?php
class test_m extends model{
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="usuario";
         $this->columns=["id_usuario","usuario","correo","password"];
         
        
    }   

    // public function listar($query,$filtros){
    //     $this->listar($query,$filtros);
    // }
}
?>