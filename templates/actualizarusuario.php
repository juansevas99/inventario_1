
<form action="index.php?cl=usuario&me=confirmarActualizar" method="POST">

        <input name="id_usuario_where" type=hidden" class="form-control" value=<?php echo $data[0]['id_usuario']?> ><div>
    <div class="form-group">
        <label for="">Nombre de Usuario</label>
        <input name="usuario_set" type="text" class="form-control" value=<?php echo $data[0]['usuario']?>></div>
    <div class="form-group">
        <label for="">Correo Electronico</label>
        <input name="correo_set" type="text" class="form-control" value=<?php echo $data[0]['correo']?>></div>
   <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Actualizar</button>
        </div>
</form>