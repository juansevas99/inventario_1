<?php
class proveedor extends Controller{
    function __construct()
    {
        parent::__construct("proveedor_m");
        
    }
    
    public function prepararCreacion(){
        include "resources/templates/crearproveedor.php";
    }
    function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_proveedor' => 'Id',
        	'nombre_proveedor' => 'Nombre',
            'correo'  => 'Correo',
            'documento'  => 'Documento',
            'telefono' => 'Telefono']);
        $operation=new orderby($operation,['correo']);
        $operation->run();
        echo json_encode([$this->model->data]);
    }
    
    
    function actualizar(){

        $estructura=[
            'id_proveedor' => 'id_proveedor',
        	'nombre_proveedor' => 'nombre_proveedor',
            'correo'  => 'correo',
            'documento'  => 'documento',
            'telefono' => 'telefono'];

        $this->model->select_($estructura,['id_proveedor'=>$_GET['id']]);
        $data=$this->model->data;

        include 'resources/templates/actualizarproveedor.php';

    }
    function confirmarActualizar(){

            
            $filtros=[];
            $valores=[];
            foreach ($_POST as $key => $value) {
                if (strstr($key,"_set")){
                    $antes=strpos($key,"_set");
                    $key=substr($key,0,$antes);
                    $valores[$key]=$value;
                }
                else if (strstr($key,"_where")){
                    $antes=strpos($key,"_where");
                    $key=substr($key,0,$antes);
                    $filtros[$key]=$value;
                }
            }
            // var_dump($filtros,$valores);
        $this->model->update_($valores,$filtros);

        header("Location: ".URL."routes/admin");

        
        

    }

    function delete(){
        $this->model->delete_(['id_proveedor'=>$_GET['id']]);
        $this->visualizar();
        }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: ".URL."routes/admin"); 
                }
       
    }
}

    
    

?>