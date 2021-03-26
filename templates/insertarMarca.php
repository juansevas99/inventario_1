<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=marca&me=insertar" method="POST">
         <div class="form-group">
            <label for="codigo_marca">Codigo</label>
            <input class="form-control" type="text" name="codigo_marca"  required>   
         </div>  
         <div class="form-group">
            <label for="nombre_marca">Nombre</label>
            <input class="form-control" type="text" name="nombre_marca"  required>   
         </div>                
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear</button>



    </form>
</div>
</section>

</div>