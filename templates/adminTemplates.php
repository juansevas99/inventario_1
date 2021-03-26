<div class="container">
    <span style="background-color: red;"><?php echo isset($this->response) ? $this->response : "" ?></span>
    <h1><?php echo isset($this->title) ? $this->title : "" ?></h1>
    <?php
    if (isset($buffer)) {
        echo $buffer;
    } else {

    ?>
        <div class="flex-row navbar">
            <div>


                <button class="btn bg-secondary" data-toggle="collapse" href="#Filters" role="button" aria-expanded="false" aria-controls="collapseExample">Filtros </button>



            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="?cl=<?= $clase ?>&me=insertar">Crear</a>
            </div>

        </div>




        <div>
            <div>

            </div>
            <table class="table table-responsive-xl table-bordered">

                <thead>
                    <tr>
                        <?php
                        foreach ($data[0] as $key => $value) {
                        ?>
                            <th><?= $key ?></th>
                        <?php
                        }
                        ?>


                    </tr>
                </thead>
                <tbody>
                    <?php

                    for ($i = 0; $i < count($data); $i++) {
                    ?>
                        <tr>

                            <?php
                            $j = 0;
                            foreach ($data[$i] as $key => $value) {
                                if ($j == 0) {
                                    $data_id = $value;
                            ?>
                                    <th>
                                        <?= $value ?>
                                    </th>
                                <?php
                                } else {
                                ?>
                                    <td>
                                        <?= $value ?>
                                    </td>
                                <?php
                                }
                                ?>

                            <?php
                                $j++;
                            }
                            ?>
                            <td>
                                <button class="btn btn-warning"><a href="?cl=<?= $clase ?>&me=<?= $metodoActualizar ?>&Id=<?= $data_id ?>">Actualizar</a></button>

                            </td>
                            <td>

                                <button class="btn btn-danger"><a href="?cl=<?= $clase ?>&me=borrar&Id=<?= $data_id ?>">Eliminar</a></button>

                            </td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    <?php
    }

    ?>

</div>

</section>
<!-- <form id="Filters" class="popover" action="?cl=<?= $clase ?>&me=visualizarActivos" method="POST">
            <?php
            $i = 0;
            $keys = array_keys($data[0]);
            foreach ($data_select[0] as $key => $value) {
            ?>
                <div class="form-group">
                <label for="<?= $key ?>"><?= $keys[$i] ?></label>
                <input class="form-control" name="<?= $key ?>" type="text">
                </div> 
            <?php
                $i++;
            }

            ?>
 
            <button class="form-group btn btn-primary" type="submit" name="send" value="send" >Filtrar</button>
            
        </form> -->
</div>



