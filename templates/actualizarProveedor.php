<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=proveedor&me=confirmarActualizacion" method="POST">
    <div class="form-group">
        <label for="id_proveedor">Id</label>
        <input class="form-control" type="text" name="id_proveedor_where"  value=<?=$datos['datos'][0]['id_proveedor']?> required disabled>
        <input class="form-control" type="hidden" name="id_proveedor_where"  value=<?=$datos['datos'][0]['id_proveedor']?> required >
    </div>
    <div class="form-group">
        <label for="codigo_proveedor">Codigo</label>
        <input class="form-control" type="text" name="codigo_proveedor_set" value=<?=$datos['datos'][0]['codigo_proveedor']?> required>   

    </div>      
    <div class="form-group">
        <label for="nombreContacto_proveedor">Nombre de Contacto</label>
        <input class="form-control" type="text" name="nombreContacto_proveedor_set" value=<?=$datos['datos'][0]['nombreContacto_proveedor']?> required>   

    </div> 
    <div class="form-group">
        <label for="correo_proveedor">Correo</label>
        <input class="form-control" type="text" name="correo_proveedor_set" value=<?=$datos['datos'][0]['correo_proveedor']?> required>   

    </div>           
    <div class="form-group">
        <label for="telefono_proveedor">Telefono</label>
        <input class="form-control" type="text" name="telefono_proveedor_set" value=<?=$datos['datos'][0]['telefono_proveedor']?> required>   

    </div>    
   
   
        
        <button name="ActualizarProveedor" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>