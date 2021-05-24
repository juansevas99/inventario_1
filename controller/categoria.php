<?php
class categoria extends Controller{
    public function __construct()
    {
        parent::__construct("categoria_m");
        
    }


    function visualizar(){
        $estructura=[
            'id_categoria' => 'Id',
             'nombre_categoria' => 'Nombre'
        ];
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($estructura,$filtros);
    
        echo json_encode($this->model->data);   
        
    }

    function actualizar(){

        $estructura=[
            'id_categoria' => 'id_categoria',
             'nombre_categoria' => 'nombre_categoria'
        ];
        $this->model->select_($estructura,['id_categoria'=>$_GET['id']]);
        $data=$this->model->data;

        include 'templates/actualizarCategoria.php';

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

        header("Location: index.php?cl=rutas&me=administracion");


        
        

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
            header("Location: index.php?cl=rutas&me=administracion");
        }
       
    }
}
?>