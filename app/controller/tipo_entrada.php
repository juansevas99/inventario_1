<?php
class tipo_entrada extends Controller{
    function __construct()
    {
        parent::__construct("tipo_entrada_m");
       
    }
    function visualizar(){
        $estructura=[
        'id_tipos_entrada'=>'Id',
         'nomnre_tipos_entrada' => 'Tipos'

        ];
        $filtros="";
        if (isset($_POST['send'])){
            unset($_POST['send']);
            $filtros=$_POST;
        }
        $this->model->select_($estructura,$filtros);
        
        echo json_encode($this->model->data);
    }
    public function prepararCreacion(){
        include "resources/templates/creartipo_entrada.php";
    }
    function actualizar(){

        $estructura=[
            'id_tipos_entrada'=>'id_tipos_entrada',
             'nomnre_tipos_entrada' => 'nomnre_tipos_entrada'
    
            ];

        $this->model->select_($estructura,['id_tipos_entrada'=>$_GET['id']]);
        $data=$this->model->data;

        include 'resources/templates/actualizarTipoEntrada.php';

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

        header("Location: http://localhost/project_1/routes/admin");

        
        

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
    
    function delete(){
        $this->model->delete_(['id_tipos_entrada'=>$_GET['id']]);
        $this->visualizar();
    }



    
    
}
?>