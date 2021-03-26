<?php
class estad_m extends model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
    }
    public function select_($filtros){
        
        $query="SELECT id_estado as 'Id', nombre_estado as 'Nombre' from estado";
        
        
        $this->select($query,$filtros);
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

        $this->select($query,$filtros);
        }
    
}
?>