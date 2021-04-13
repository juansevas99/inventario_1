       
<div id="contenido" class="col">
    <main id="gestionInventario" class="m-3">        
            <h1>

                <?php
                echo $titulo; //Verificar si esto debe ser una desicion de Front o  de back
                ?>
            </h1>
            <div>

            <div class="d-block d-lg-flex justify-content-between">
                
                
                <div class="d-flex align-items-center">
                    
                    <button class="btn">Otros Filtros</button>
                    <input class="form-control" type="select">
                    <button class="btn"  name="" id="">Search</button>
                </div>
            </div>
            <div style="overflow-x: scroll;">
                <table id="tabla-admin" class="table my-3" >
                    <thead class="cabecera">
                        
                    </thead>

                    <tbody class="cuerpo">

                       
                    </tbody>
                </table>
            </div>
        </div>
            

        </main>
    </div>
    </div>

</body>
<html>