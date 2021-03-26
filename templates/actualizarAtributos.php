<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=atributo&me=confirmarActualizacion" method="POST">
        <div class="form-group">
            <label for="id_atributos">Id</label>
            <input class="form-control" type="text" name="id_atributos_where"  value=<?=$datos['datos'][0]['id_atributos']?> required disabled>
            <input class="form-control" type="hidden" name="id_atributos_where"  value=<?=$datos['datos'][0]['id_atributos']?> required>
        </div>
        <div class="form-group">
            <label for="code_atributos">Codigo</label>
            <input class="form-control" type="text" name="code_atributos_where" value=<?=$datos['datos'][0]['code_atributos']?> required disabled>   
            <input class="form-control" type="hidden" name="code_atributos_where" value=<?=$datos['datos'][0]['code_atributos']?> required>   

         </div>    
         <div class="form-group">
            <label for="nombre_atributos">Codigo</label>
            <input class="form-control" type="text" name="nombre_atributos_set" value=<?=$datos['datos'][0]['nombre_atributos']?> required>   
         </div>                
                    
        
        
        
        <button name="ActualizarAtributo" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>