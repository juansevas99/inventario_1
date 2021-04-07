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

}
?>