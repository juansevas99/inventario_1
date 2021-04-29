<?php   

    class marca_m extends model{
        function __construct(){
            parent::__construct();
            $this->table="marca";
        }

        function select_($estructura,$filtros){
             
            $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE marca SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            
            $query="DELETE FROM marca";
            $this->delete($query,$filtros);
        }
        public function insert_($filtros){
            $query="INSERT INTO marca (nombre) values ( ";
            $this->insert($query,$filtros);
            
    }
    // public function index_($filtros){
    //     $query="SELECT * FROM marca";
    // $this->select($query,$filtros);
    // } 
    }
    
?>