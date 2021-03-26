<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=activos&me=confirmarActualizacion" method="POST">
        <div class="form-group">
        <label for="id_activo">Id</label>
        <input class="form-control" type="text" name="id_activo_where"  value=<?=$datos['datos'][0]['id_activo']?> required disabled>
        <input class="form-control" type="hidden" name="id_activo_where"  value=<?=$datos['datos'][0]['id_activo']?> required>
        </div>
        <div class="form-group">
        <label for="referencia_activo">Referencia</label>
        <input class="form-control" type="text" name="referencia_activo_where" value=<?=$datos['datos'][0]['referencia_activo']?> required disabled>   
        <input class="form-control" type="hidden" name="referencia_activo_where" value=<?=$datos['datos'][0]['referencia_activo']?> required>   

    </div>                
        
        <label for="id_marca">Marca</label>
        <select class="form-control" class="form-control" name="id_marca_set" id="">
        <option value=<?=$datos['datos'][0]['id_marca']?>><?=$datos['datos'][0]['id_marca']?> - <?=$datos['datos_select'][0]['Marca']?></option>
            <?php
            for ($i=0; $i < count($datos['opciones']['marca']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['marca'][$i]['Id']?>><?=$datos['opciones']['marca'][$i]['Codigo']?> - <?=$datos['opciones']['marca'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>
   
    <div class="form-group">
    <label for="id_proveedor">Proveedor</label>
        <select class="form-control" name="id_proveedor_set" id="">
    <option value=<?=$datos['datos'][0]['id_proveedor']?>><?=$datos['datos'][0]['id_proveedor']?> - <?=$datos['datos_select'][0]['Contacto de Proveedor']?></option>
        <?php
        for ($i=0; $i <count( $datos['opciones']['proveedor']) ; $i++) { 
        
        
            ?>
        <option value=<?=$datos['opciones']['proveedor'][$i]['Id']?>><?=$datos['opciones']['proveedor'][$i]['Codigo']?> - <?=$datos['opciones']['proveedor'][$i]['Nombre de Contacto']?></option>
        <?php
        }
        
            
        ?>
    </select>

    </div>
        
    <div class="form-group">

    <label for="id_tipo_activo">Tipo</label>    
    <select class="form-control" name="id_tipo_activo_set" id="">
        <option value=<?=$datos['datos'][0]['id_tipo_activo']?>><?=$datos['datos'][0]['id_tipo_activo']?> - <?=$datos['datos_select'][0]['Tipo']?></option>
            <?php
            for ($i=0; $i < count($datos['opciones']['tipo_activo']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['tipo_activo'][$i]['Id']?>><?=$datos['opciones']['tipo_activo'][$i]['Codigo']?> - <?=$datos['opciones']['tipo_activo'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
         </select>
    </div>
    
        <div class="form-group">
        <label for="id_empleado">Empleado</label>
         <select class="form-control" name="id_empleado_set" id="">
        <option value=<?=$datos['datos'][0]['id_empleado']?>><?=$datos['datos'][0]['id_empleado']?> - <?=$datos['datos_select'][0]['Empleado']?></option>
            <?php
            for ($i=0; $i < count($datos['opciones']['empleado']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['empleado'][$i]['Id']?>><?=$datos['opciones']['empleado'][$i]['Id']?> - <?=$datos['opciones']['empleado'][$i]['Documento']?></option>
            <?php
            }
            
                
            ?>
        </select>

        </div>
         
        <div class="form-group">
        <label for="id_estado">Estado</label>
        <select class="form-control" name="id_estado_set" id="">
        <option value=<?=$datos['datos'][0]['id_estado']?>><?=$datos['datos'][0]['id_estado']?> - <?=$datos['datos_select'][0]['Estado']?></option>
            <?php
            for ($i=0; $i <count( $datos['opciones']['estado']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['estado'][$i]['Id']?>><?=$datos['opciones']['estado'][$i]['Id']?> - <?=$datos['opciones']['estado'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>

        </div>
        
        
        <button name="ActualizarActivo" class="btn btn-warning" type="submit">Actualizar</button>



    </form>
</div>
</section>

</div>