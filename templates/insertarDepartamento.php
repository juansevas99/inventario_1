<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=departamento&me=insertar" method="POST">


        <div class="form-group">
            <label for="nombre_departamento">Nombre</label>
            <input class="form-control" type="text" name="nombre_departamento" required >   

         </div>    
         <!-- <div class="form-group">
            <label for="nombre_atributos">Codigo</label>
            <input class="form-control" type="text" name="nombre_atributos_set" value=<?//=$datos['datos'][0]['nombre_atributos']?> required>   
         </div>                
                     -->
        
        
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear</button>



    </form>
</div>
</section>

</div>