<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=empleado&me=insertar" method="POST">

    <div class="form-group">
        <label for="documento_empleado">Documento</label>
        <input class="form-control" type="text" name="documento_empleado" required>   

    </div>      
    <div class="form-group">
        <label for="telefono_empleado">Telefono</label>
        <input class="form-control" type="text" name="telefono_empleado"  required>   

    </div> 
    <div class="form-group">
        <label for="correo_empleado">Correo</label>
        <input class="form-control" type="text" name="correo_empleado"  required>   

    </div>           
    <div class="form-group">
        <label for="id_departamento">Departamento</label>
        <select class="form-control" class="form-control" name="id_departamento" id="">
        <option >Seleccione</option>
            <?php
            for ($i=0; $i < count($datos['opciones']['departamento']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['departamento'][$i]['Id']?>><?=$datos['opciones']['departamento'][$i]['Id']?> - <?=$datos['opciones']['departamento'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>
   
   
    </div>
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">crear</button>



    </form>
</div>
</section>

</div>