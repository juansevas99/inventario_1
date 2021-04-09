       
<div id="contenido" class="col">
    <main id="administracion" class="m-3">        
            <h1>

                <?php
                echo $titulo; //Verificar si esto debe ser una desicion de Front o  de back
                ?>
            </h1>
            <form action="index.php?cl=ordencompra&me=crear">
                <div class="form-group">
                    <label for="">Referencia De Orden</label>
                    <input type="text" name="referencia_entradas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Lote</label>
                    <input type="text" name="lote_entradas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="text" name="cantidad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Precio Unitario</label>
                    <input type="text" name="precioUnitario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Producto</label>
                    <select class="form-control" name="producto_id_producto" id="">
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
                    <button name="crear" type="submit">Crear</button>
                </div>
            </form>

        </main>
    </div>
    </div>

</body>
<html>