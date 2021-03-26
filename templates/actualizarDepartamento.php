<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=departamento&me=confirmarActualizacion" method="POST">
        <div class="form-group">
            <label for="id_departamento">Id</label>
            <input class="form-control" type="text" name="id_departamento_where"  value=<?=$datos['datos'][0]['id_departamento']?> required disabled>
            <input class="form-control" type="hidden" name="id_departamento_where"  value=<?=$datos['datos'][0]['id_departamento']?> required>
        </div>

        <div class="form-group">
            <label for="nombre_departamento">Nombre</label>
            <input class="form-control" type="text" name="nombre_departamento_set" value=<?=$datos['datos'][0]['nombre_departamento']?> >   

         </div>    
         <!-- <div class="form-group">
            <label for="nombre_atributos">Codigo</label>
            <input class="form-control" type="text" name="nombre_atributos_set" value=<?//=$datos['datos'][0]['nombre_atributos']?> required>   
         </div>                
                     -->
        
        
        
        <button name="ActualizarDepartamento" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>