<?php

class usuario_m extends model{
   
    function __construct()
    {
        parent::__construct();
        
    } 
    
    public function select_($filtros){
        $query="SELECT  * from usuario";
        $this->select($query,$filtros);

    }


    public function update_($valores,$filtros){
        $query="UPDATE usuario SET ";
        $this->update($query,$valores,$filtros);
    }
    public function delete_($data){
        
    }
    
    public function insert_($data){
        
        $stmt=$this->dbo->prepare("INSERT INTO usuario (id_usuario,usuario,correo,password) VALUES (:id_usuario,:usuario,:correo,:password)");
        $stmt->bindParam(":id_usuario",1,PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$data['email_user'],PDO::PARAM_STR);
        $stmt->bindParam(":correo",$data['psw_user'],PDO::PARAM_STR);
        $stmt->bindParam(":password",$data['name_user'],PDO::PARAM_STR);
        $stmt->execute();

        
    }
    public function index_($filtros){
        $query="SELECT * FROM usuario a";
    $this->select($query,$filtros);
    }
  


}


?>