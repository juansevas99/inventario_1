<?php

 class producto extends Controller{
     public function __construct(){
         parent::__construct('producto_m');
 
 
 
     }
     public function visualizar(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_producto'=>'Id',
            'referencia_producto' => 'Referencia de Producto',
           'nombre_producto' => 'Producto',
           'estado_id_estado'=>'Estado',
           'categoria_id_categoria'=>'Categoria',
           'stock_producto'=>'Stock de producto',
           'proveedor_id_proveedor'=>'Proveedor',
           'marca_id_marca'=>'Marca'
        ]);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);
    }

    public function visualizarEstadoActivo(){
        $operation=new select($this->model);
        $operation=new columns($operation,[
            'id_producto'=>'Id',
            'referencia_producto' => 'Referencia de Producto',
           'nombre_producto' => 'Producto',
           'categoria_id_categoria'=>'Categoria',
           'stock_producto'=>'Stock de producto',
           'proveedor_id_proveedor'=>'Proveedor',
           'marca_id_marca'=>'Marca'
        ]);
        $operation=new where($operation,['estado_id_estado'=>1]);
        tablas::paginate($operation,3,$_GET['id']);
        echo json_encode([$this->model->data,tablas::$pages]);
    }


     public function productoView(){
        header('Location: resources/templates/productos.html');
    }
    
    public function prepararCreacion(){
        include "resources/templates/crearProducto.php";
    }
    public function insertar(){
     
        
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