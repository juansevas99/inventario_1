<?php
class marca extends Controller{
    function __construct()
    {
        parent::__construct("marca_m");
        
    }

    function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_marca'=>'COD',
            'nombre'=>'Marca']);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]); 
    }
    function actualizar(){
      
        $estructura=[
            'id_marca'=> 'id_marca',
            'nombre' => 'nombre'
        ];

        $this->model->select_($estructura,['id_marca'=>$_GET['id']]);
        $data=$this->model->data;
        include 'resources/templates/actualizarmarca.php';
        
    }

    public function prepararCreacion(){
        include "resources/templates/crearmarca.php";
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
            // exit();
    //    
        $this->model->update_($valores,$filtros);
        // 

      
        
    
        header("Location: http://localhost/project_1/routes/admin");


        
        

    }
    function delete(){
        $this->model->delete_(['id_marca'=>$_GET['id']]);
        $this->visualizar();
    }
    function insertar(){
        
        if (isset($_POST['crear']) && !empty($_POST['crear'])){
            unset($_POST['crear']);
            // var_dump($_POST);
            // exit();
            $this->model->insert_($_POST);
            header("Location: http://localhost/project_1/routes/admin"); 
                }
       
    }
}

    
    

?>