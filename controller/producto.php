<?php

 class producto extends Controller{
     public function __construct(){
         parent::__construct('producto_m');
 
 
 
     }
     public function visualizar(){
         $estructura=[
        'id_producto'=>'Id',
         'referencia_producto' => 'Referencia de Producto',
        'nombre_producto' => 'Producto',
        'fecha_creacion'=>'Fecha de creacion',
        'estado_id_estado'=>'Estado',
        'categoria_id_categoria'=>'Categoria',
        'categoria_id_categoria'=>'Stock de producto',
        'proveedor_id_proveedor'=>'Proveedor',
        'marca_id_marca'=>'Marca'
        ];
         $filtros="";
         if (isset($_POST['send'])){
             unset($_POST['send']);
             $filtros=$_POST;
         }
         $this->model->select_($estructura,$filtros);
         echo json_encode($this->model->data);   
 
 
     }

     public function productoView(){
        header('Location: templates/productos.html');
    }
    public function crear(){
     
        
        if (isset($_POST['crear'])){

            unset($_POST['crear']);
            $categoria=$_POST['categoria_id_categoria'];
            // var_dump($_POST);
            // exit();

            $this->model->insert_($_POST);

            $variables=[
                'titulo'=>'Atributos específicos',
                'categoria'=>$categoria
            ];  
            
            $this->view->render("producto",$variables);
        }
        else{
            $titulo="Creacion de Producto";
            $this->view->render("crearProducto",$titulo);
            
        }
    
    }
 }

?>