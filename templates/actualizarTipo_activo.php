<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=tipo_activo&me=confirmarActualizacion" method="POST">
        <div class="form-group">
            <label for="id_tipo_activo">Id</label>
            <input class="form-control" type="text" name="id_tipo_activo_where"  value=<?=$datos['datos'][0]['id_tipo_activo']?> required disabled>
            <input class="form-control" type="hidden" name="id_tipo_activo_where"  value=<?=$datos['datos'][0]['id_tipo_activo']?> required>
        </div>
        <div class="form-group">
            <label for="code_tipo_activo">Codigo</label>
            <input class="form-control" type="text" name="code_tipo_activo_where" value=<?=$datos['datos'][0]['code_tipo_activo']?> required disabled>   
            <input class="form-control" type="hidden" name="code_tipo_activo_where" value=<?=$datos['datos'][0]['code_tipo_activo']?> required>   

         </div>    
         <div class="form-group">
            <label for="nombre_tipo_activo">Nombre</label>
            <input class="form-control" type="text" name="nombre_tipo_activo_set" value=<?=$datos['datos'][0]['nombre_tipo_activo']?> required>   
         </div>                
                    
        
        
        
        <button name="ActualizarTipo_activo" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>