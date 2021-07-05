<?php
class rutas extends Controller{
    function __construct()
    {
        parent::__construct("");
    }
    public function administracion(){
        $variable="This was passed as a variable";
        $this->view->render("administracion",$variable);
    }
    public function productos(){
        $variable="This was passed as a variable";
        $this->view->render("producto",$variable);
    }
    public function planeacion(){
        $variable="Planeacion de compra";
        $this->view->render("planeacion",$variable);
    }
    public function reportes(){
        $variable="Reportes";
        $this->view->render("reportes",$variable);
    }
    public function ordenCompra(){
        $variable="Gestion de inventario";
        $this->view->render("gestionInventario",$variable);
    }
    public function test(){
        $variable="Test";
        $this->view->render("test",$variable);
    }
    public function error(){
        $titulo="ERROR 404";
        include "resources/templates/error/404.php";
    }

    public function errorSQL(){
        
        
        include "resources/templates/error/errorSQL.php";
    }
   



}
?>