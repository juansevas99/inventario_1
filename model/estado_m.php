<?php
class estado_m extends model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="estado";
    }
    public function select_($estructura,$filtros){        
        
        $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE estado SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM estado ";
            $this->delete($query,$filtros);

        }
        public function insert_($data){
            
        }
        public function index_($filtros){
            $query="SELECT * from estado";

        // $this->select($query,$filtros);
        }
    
}
?>