<?php

class usuario_m extends model{
   
    function __construct()
    {
        parent::__construct();
        
    } 
    
    public function select_($filtros){
        $query="SELECT  * from users";
        
        $this->select($query,$filtros);

    }


    public function update_($valores,$filtros){
        $query="UPDATE users SET ";
        $this->update($query,$valores,$filtros);
    }
    public function delete_($data){
        
    }
    
    public function insert_($data){
        $stmt=$this->dbo->prepare("INSERT INTO users (email_user,psw_user,name_user) VALUES (:email,:psw,:name_user)");
        $stmt->bindParam(":email",$data['email_user'],PDO::PARAM_STR);
        $stmt->bindParam(":psw",$data['psw_user'],PDO::PARAM_STR);
        $stmt->bindParam(":name_user",$data['name_user'],PDO::PARAM_STR);
        $stmt->execute();

        
    }
    public function index_($filtros){
        $query="SELECT * FROM usuario a";
    $this->select($query,$filtros);
    }
  


}


?>