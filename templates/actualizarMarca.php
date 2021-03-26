<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=marca&me=confirmarActualizacion" method="POST">
        <div class="form-group">
            <label for="id_marca">Id</label>
            <input class="form-control" type="text" name="id_marca_where"  value=<?=$datos['datos'][0]['id_marca']?> required disabled>
            <input class="form-control" type="hidden" name="id_marca_where"  value=<?=$datos['datos'][0]['id_marca']?> required>
        </div>
        
         <div class="form-group">
            <label for="nombre_marca">Codigo</label>
            <input class="form-control" type="text" name="nombre_marca_set" value=<?=$datos['datos'][0]['nombre_marca']?> required>   
         </div>                
                    
        
        
        
        <button name="ActualizarMarca" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>