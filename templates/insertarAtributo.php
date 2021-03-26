<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=atributo&me=insertar" method="POST">
        <div class="form-group">
            <label for="code_atributos">Codigo</label>
            <input class="form-control" type="text" name="code_atributos" required >   

         </div>    
         <div class="form-group">
            <label for="nombre_atributos">Nombre</label>
            <input class="form-control" type="text" name="nombre_atributos"  required>   
         </div>                
                    
        
        
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear</button>



    </form>
</div>
</section>

</div>