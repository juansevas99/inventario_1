<div id="contenido" class="col">
    <main id="administracion" class="text-center  m-3">
            <div class="text-left">
                <h4>Administracion</h4>
            </div>
        <div class="navbar navbar-expand-xl justify-content-end ">
            
            <button class="navbar-toggler mr-3" type="button" data-bs-toggle="collapse" data-bs-target="#Items" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="./media/Menu_icon_2_icon-icons.com_71856.png" width="100%" alt=""></span>
            </button>

            <div class="collapse navbar-collapse" id="Items">
                <ul class="navbar-nav">
                    <a class="btn btn-light" style="color: black;" data-ruta="usuario" href="#">Usuarios</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="proveedor" href="#">Proveedores</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="marca" href="#">Marcas</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="atributo" href="#">Atributos</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="medida" href="#">Medida</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="tipo_salida" href="#">Tipo de salida</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="tipo_entrada" href="#">Tipo de entrada</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="producto" href="#">Productos</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="ordenCompra" href="#">Orden Compra</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="categoria" href="#">Categoria de Productos</a>
                    <a class="btn btn-light" style="color: black;" data-ruta="rol" href="#">Roles</a>
                </ul>
            </div>
        </div>

        <div>

            <div class="d-block d-lg-flex justify-content-between">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Crear Registro
                </button>
                <div class="d-flex align-items-center">

                    <button class="btn">Otros Filtros</button>
                    <input class="form-control" type="select">
                    <button class="btn" name="" id="">Search</button>
                </div>
            </div>
            <div style="overflow-x: scroll;">
                <table id="tabla-admin" class="table my-3">
                    <thead class="cabecera">

                    </thead>

                    <tbody class="cuerpo">


                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Creacion de ...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </div>
        </div>



        <!--  -->


        <div class="modal fade" id="actualizar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Actualizacion de ...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">Otro form</label>
                                <input class="form-control" type="text">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</html>