<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=tipo_activo&me=insertar" method="POST">
       
        <div class="form-group">
            <label for="code_tipo_activo">Codigo</label>
            <input class="form-control" type="text" name="code_tipo_activo" required >   

         </div>    
         <div class="form-group">
            <label for="nombre_tipo_activo">Nombre</label>
            <input class="form-control" type="text" name="nombre_tipo_activo"  required>   
         </div>                
                    
        
        
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear</button>



    </form>
</div>
</section>

</div>