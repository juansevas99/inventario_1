<?php
class atributo extends Controller{
    function __construct()
    {
        parent::__construct("atributo_m");
        
    }
    function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_atributo'=>'COD',
            'nombre_atributo'=>'Atributo',
            'medida_id_medida'=>'Medida'
        ]);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);

       
    }

    function actualizarAtributo(){
        $estructura=[
            'id_marca'=> 'id_marca',
            'nombre' => 'nombre'
        ];

        $this->model->select_($estructura,['id_marca'=>$_GET['id']]);
        $data=$this->model->data;
        include 'resources/templates/actualizarmarca.php';
        
    }
    function confirmarActualizacion(){
        if(isset($_POST['ActualizarAtributo'])){ 
            
            unset($_POST['ActualizarAtributo']);
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
            // var_dump($valores,$filtros);
            // exit();
       
        $this->model->update_($valores,$filtros);

        }
        if (isset($this->model->buffer)){
            $this->buffer=$this->model->buffer;
            // var_dump($this->buffer);
            // exit();       
        }
        else{
            $this->respuesta=$this->model->response;
            // var_dump($this->respuesta);
            // exit();
        }
        
    
        header("Location: ".URL."routes/admin");


        
        

    }
    function delete(){
        $this->model->delete_(['id_categoria'=>$_GET['id']]);
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

    public function prepararCreacion(){
        include "resources/templates/crearatributo.php";
    }
}


?>