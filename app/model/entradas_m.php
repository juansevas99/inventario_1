<?php
class entradas_m extends model {
    public $data=[];
    function __construct()
    {
        parent::__construct();
         $this->table="detalles_entrada";
    }
   
}
?>