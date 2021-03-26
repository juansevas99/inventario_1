<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=empleado&me=confirmarActualizacion" method="POST">
    <div class="form-group">
        <label for="id_empleado">Id</label>
        <input class="form-control" type="text" name="id_empleado_where"  value=<?=$datos['datos'][0]['id_empleado']?> required disabled>
        <input class="form-control" type="hidden" name="id_empleado_where"  value=<?=$datos['datos'][0]['id_empleado']?> required>
    </div>
    <div class="form-group">
        <label for="documento_empleado">Documento</label>
        <input class="form-control" type="text" name="documento_empleado_set" value=<?=$datos['datos'][0]['documento_empleado']?> required>   

    </div>      
    <div class="form-group">
        <label for="telefono_empleado">Telefono</label>
        <input class="form-control" type="text" name="telefono_empleado_set" value=<?=$datos['datos'][0]['telefono_empleado']?> required>   

    </div> 
    <div class="form-group">
        <label for="correo_empleado">Correo</label>
        <input class="form-control" type="text" name="correo_empleado_set" value=<?=$datos['datos'][0]['correo_empleado']?> required>   

    </div>           
    <div class="form-group">
        <label for="id_departamento">Departamento</label>
        <select class="form-control" class="form-control" name="id_departamento_set" id="">
        <option value=<?=$datos['datos'][0]['id_departamento']?>><?=$datos['datos'][0]['id_departamento']?> - <?=$datos['datos_select'][0]['Departamento']?></option>
            <?php
            for ($i=0; $i < count($datos['opciones']['departamento']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['departamento'][$i]['Id']?>><?=$datos['opciones']['departamento'][$i]['Id']?> - <?=$datos['opciones']['departamento'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>
   
   
    </div>
        
        <button name="ActualizarEmpleado" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>