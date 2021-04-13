<?php
class salidas_m extends model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="salidas";
    }
    public function select_($estructura,$filtros){        
        
        $this->select($this->table,$estructura,$filtros);
        }


        public function update_($valores,$filtros){
            $query="UPDATE salidas SET ";
            $this->update($query,$valores,$filtros);
        }
        public function delete_($filtros){
            $query="DELETE FROM salidas ";
            $this->delete($query,$filtros);

        }
        public function insert_($data){
            
        }
        public function index_($filtros){
            $query="SELECT * from salidas";

        // $this->select($query,$filtros);
        }
    
}
?>