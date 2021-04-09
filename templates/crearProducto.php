<main id="crearProducto" class="col">

    <h1>

        <?php
        echo $titulo //Verificar si esto debe ser una desicion de Front o  de back
        ?>
    </h1>

    <form action="index.php?cl=producto&me=crear" method="POST">

        <br>
        <br>
        <div class="form-group">

            <label for="">Imagen de producto</label>
            <input type="file">
        </div>
        <div class="form-group">
            <label for="">Referencia</label>
            <input name="referencia_producto" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Producto</label>
            <input name="nombre_producto" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Estado</label>
            <select class="form-control" name="estado_id_estado" id="">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Categoria</label>
            <select name="categoria_id_categoria" class="form-control">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Proveedor</label>
            <select class="form-control" name="proveedor_id_proveedor" id="">
                <option value="">Seleccione</option>

            </select>
        </div>
        <div class="form-group">
            <label for="">Marca</label>
            <select class="form-control" name="marca_id_marca" id="">
                <option value="">Seleccione</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="crear">Crear</button>
        </div>

    </form>
</main>
</div>

</body>

</html>