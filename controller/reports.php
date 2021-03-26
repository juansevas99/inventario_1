<?php 
class reports extends Controller{
    function __construct()
    {   
        parent::__construct("reports_m");
    }
    function cargarReporte(){
        if(isset($_POST["cargar"]) && !empty($_POST["cargar"])){

        }
        else{
            $this->view="reports";
            include 'lib/templates.php';
        }
    }
}

?>