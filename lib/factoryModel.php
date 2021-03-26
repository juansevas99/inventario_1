<?php
class factoryModel{
    public function __construct()
    {
        
    }
    function validateModel($model):model
    {
        switch ($model) {
            case 'activos':
                include_once 'model/activos.php';
                return new activo_m;
                break;
            case 'departamento':
                include_once 'model/departamento.php';
                return new departamento_m;
                break;

            case 'atributos':
                include_once 'model/atributo.php';
                return new atributo_m;
                break;
            case 'tipo_activo':
                include_once 'model/tipo_activo.php';
                return new tipo_activo_m;
                break;
            case 'proveedor':
                include_once 'model/proveedor.php';
                return new proveedor_m;
                break;
            case 'marca':
                include_once 'model/marca.php';
                return new marca_m;
                break;
            case 'empleado':
                include_once 'model/empleado.php';
                return new empleado_m;
                break;
            case 'usuario':
                include_once 'model/usuario';
                return new usuario_m;
                break;
            case 'estado':
                include_once 'model/estado.php';
                return new estad_m;
                break;
            default:
            
                return null;
                break;
        }
    }
}
?>