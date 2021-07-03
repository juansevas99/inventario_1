<?php

class paginacion{

    private int $numeroRegistros;
    private int $limite=10;
    public  int $paginas;
    private $num_pagina=0;
    public  $modelo;
    function __construct($model){
        $this->modelo=$model;
        
    }


    private function numeroregistro(){
        $this->modelo->select_([],[]);
        $this->modelo->stmt->store_result();
        $this->numeroRegistros=$this->modelo->stmt->num_rows();
    }
}
?>