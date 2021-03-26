<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=proveedor&me=insertar" method="POST">
    <div class="form-group">
        <label for="codigo_proveedor">Codigo</label>
        <input class="form-control" type="text" name="codigo_proveedor"  required>   

    </div>      
    <div class="form-group">
        <label for="nombreContacto_proveedor">Nombre de Contacto</label>
        <input class="form-control" type="text" name="nombreContacto_proveedor"  required>   

    </div> 
    <div class="form-group">
        <label for="correo_proveedor">Correo</label>
        <input class="form-control" type="text" name="correo_proveedor"  required>   

    </div>           
    <div class="form-group">
        <label for="telefono_proveedor">Telefono</label>
        <input class="form-control" type="number" name="telefono_proveedor"  required>   

    </div>    
   
   
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear</button>



    </form>
</div>
</section>

</div>