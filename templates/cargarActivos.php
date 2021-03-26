<div class="container">
<h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

<div class="" style="max-width:900px; width:100% ;">
<div>
<form action="">
    <div class="form-group">
        <label for="search">Ingrese el código de referencia del Activo</label>
        <input  class="form-control" type="text" name="search" placeholder="search">
    </div>
</form>
</div>
<form action="?cl=activos&me=confirmarCargaArchivos" method="POST">

    <div class="form-group">
        <label for="id_activos">Seleccione el activo</label>
        <select class="form-control" id="activos"  name="id_activo_where" id="" required>

            <option value="0">Seleccione</option>
            <?php

            if (isset($this->buffer) && !empty($this->buffer)) {
                echo $this->buffer;
            } else {

                for ($i = 0; $i < count($this->data); $i++) {
            ?>
                    <option value="<?= $this->data[$i]['Id'] ?>"><?= $this->data[$i]['Id'] ?> - <?= $this->data[$i]['Referencia'] ?></option>
            <?php
                }
            }

            ?>
            <!-- Aca se insertaran los activos dinamicamente -->
        </select>
        </div>
        <div class="form-group">
        <label for="cantidad">Cantidad a cargar</label>
        <input class="form-control" type="number" name="cantidad_set" min="1" placeholder="Cantidad" required>
        </div>
        <button type="submit" class="btn btn-warning" name="cargarActivos">Cargar</button>
    
</form>
</div>
</div>
</section>

</div>