<div class="container">
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>

    <form action="?cl=activos&me=insertar" method="POST">
        

        <h2>Atributos generales</h2>  
        <div class="form-group">
        <label for="id_marca">Marca</label>
        <select class="form-control" class="form-control" name="id_marca" id="">
        <option>Seleccione</option>
            <?php
            for ($i=0; $i < count($datos['opciones']['marca']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['marca'][$i]['Id']?>><?=$datos['opciones']['marca'][$i]['Codigo']?> - <?=$datos['opciones']['marca'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>
   </div>
    <div class="form-group">
    <label for="id_proveedor">Proveedor</label>
        <select class="form-control" name="id_proveedor" id="">
    <option >Seleccione</option>
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
    <select class="form-control" name="id_tipo_activo" id="">
        <option >Seleccione</option>
            <?php
            for ($i=0; $i < count($datos['opciones']['tipo_activo']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['tipo_activo'][$i]['Id']?>><?=$datos['opciones']['tipo_activo'][$i]['Codigo']?> - <?=$datos['opciones']['tipo_activo'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
         </select>
    </div>

    <h2>Atributos especificos</h2>
    
        <div class="form-group">
        <label for="id_atributos">Atributo</label>
         <select class="form-control" name="id_atributos" id="">
        <option>Seleccione</option>
            <?php
            for ($i=0; $i < count($datos['opciones']['atributos']) ; $i++) { 
            
            
                ?>
            <option value=<?=$datos['opciones']['atributos'][$i]['Id']?>><?=$datos['opciones']['atributos'][$i]['Id']?> - <?=$datos['opciones']['atributos'][$i]['Nombre']?></option>
            <?php
            }
            
                
            ?>
        </select>

        </div>
        <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text">

        </div>
         
        
        
        
        <button name="crear" value="crear" class="btn btn-warning" type="submit">Crear Activo</button>



    </form>
</div>
</section>

</div>