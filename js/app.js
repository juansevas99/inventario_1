const d=document

function display(response){
    $cabecera=document.querySelector('#tabla-admin > .cabecera')
    $cadenaCabecera="";
    for (let i = 0; i < Object.keys(response[0]).length; i++) {
        
        $cadenaCabecera+="<th>"+Object.keys(response[0])[i]+"</th>"
    }
    $cadenaCabecera+="<th colspan=3>Accciones</th>";
    $cabecera.innerHTML=$cadenaCabecera
    $cuerpo=document.querySelector('#tabla-admin > .cuerpo')
    $cadenaCuerpo=""
    for (let j = 0; j < response.length; j++) {
        $cadenaCuerpo+="<tr>";
        for (let k = 0; k < Object.keys(response[j]).length; k++) {
            
            $cadenaCuerpo+="<td>"+response[j][Object.keys(response[0])[k]]+"</td>"
        }
        
        $cadenaCuerpo+="<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#Detalles'>Detalles</button><td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#actualizar'>Actualizar</button></td><td><button class='btn btn-danger'>Borrar</button></td></tr>";

        
    }

    $cuerpo.innerHTML=$cadenaCuerpo
}
function administracion(element){
    
    
            
            
            
            fetch('index.php?cl='+element+'&me=visualizar',{
                method:"POST"
            }).then(

                response=>{
                    if (response.ok==false || response.status>299){
                        return Promise.reject({err:"Error, no se encontro el archivo json"})   
                    response[0]}
                    return response.json();
                }
            ).then(
                response=>{
                    
                   display(response);
                }
            ).catch(
                err=>{
                    console.error(err)
                }
            )

            
    
        


    
    
}
function crearProducto(){
    // por ahora, la busqueda de datos en cada Select no dependera de la vista si no de la logica que se maneje en Javascript
    document.querySelector('[name="estado_id_estado"]').addEventListener('focus',el=>{
        fetch('index.php?cl=estado&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    options+="<option value="+response[i].id+">"+response[i].nombre+"</option>"
                    
                }
                document.querySelector('[name="estado_id_estado"]').innerHTML=options;
                
            }
        )
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
    document.querySelector('[name="categoria_id_categoria"]').addEventListener('focus',()=>{
        fetch('index.php?cl=categoria&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Nombre+"</option>"
                    
                }

                document.querySelector('[name="categoria_id_categoria"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
    document.querySelector('[name="proveedor_id_proveedor"]').addEventListener('focus',()=>{
        fetch('index.php?cl=proveedor&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Nombre+"</option>"
                    
                }

                document.querySelector('[name="proveedor_id_proveedor"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
    document.querySelector('[name="marca_id_marca"]').addEventListener('click',()=>{
        fetch('index.php?cl=marca&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Nombre+"</option>"
                    
                }

                document.querySelector('[name="marca_id_marca"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });

}

function atributosProducto(){
    fetch('index.php?cl=atributo&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                atributos="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    atributos+="<>";
                    
                }

                document.querySelector('[name="marca_id_marca"]').innerHTML=atributos;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    
}

function productos(){
            
                
                
            fetch('index.php?cl=producto&me=visualizar',{
                method:"GET"
            }).then(

                response=>{
                    if (response.ok==false || response.status>299){
                        return Promise.reject({err:"Error, no se encontro el archivo"})   
                    response[0]}
                    return response.json();
                }
            ).then(
                response=>{
                    
                    display(response);
                }
            ).catch(
                err=>{
                    console.error(err)
                }
            )
       
            
                
            

            
    
        
    
}

function planeacion(){
    document.querySelector('[name="producto_id_producto"]').addEventListener('focus',()=>{
        fetch('index.php?cl=producto&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Producto+"</option>"
                    
                }

                document.querySelector('[name="producto_id_producto"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
    document.querySelector('[name="proveedor_id_proveedor"]').addEventListener('focus',()=>{
        fetch('index.php?cl=proveedor&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Nombre+"</option>"
                    
                }

                document.querySelector('[name="proveedor_id_proveedor"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
}
function gestionInventario(){
    fetch('index.php?cl=ordenCompra&me=visualizar',{
        method:"GET"
    }).then(

        response=>{
            if (response.ok==false || response.status>299){
                return Promise.reject({err:"Error, no se encontro el archivo"})   
            response[0]}
            return response.json();
        }
    ).then(
        response=>{
                    
                    $cabecera=document.querySelector('#tabla-admin > .cabecera')
            $cadenaCabecera="";
            for (let i = 0; i < Object.keys(response[0]).length; i++) {
                
                $cadenaCabecera+="<th>"+Object.keys(response[0])[i]+"</th>"
            }
            $cadenaCabecera+="<th colspan=3>Accciones</th>";
            $cabecera.innerHTML=$cadenaCabecera
            $cuerpo=document.querySelector('#tabla-admin > .cuerpo')
            $cadenaCuerpo=""
            for (let j = 0; j < response.length; j++) {
                $cadenaCuerpo+="<tr>";
                for (let k = 0; k < Object.keys(response[j]).length; k++) {
                    
                    $cadenaCuerpo+="<td>"+response[j][Object.keys(response[0])[k]]+"</td>"
                }
                
                $cadenaCuerpo+="<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#Detalles'>Detalles</button><td><a href='index.php?cl=entradas&me=crear' class='btn btn-warning' >Gestionar Entradas</a></td><td><a href='index.php?cl=salidas&me=crear' class='btn btn-warning'>Gestionar Salidas</a></td></tr>";

                
            }

            $cuerpo.innerHTML=$cadenaCuerpo
        }
    ).catch(
        err=>{
            console.error(err)
        }
    )
}

function crearEntrada(){
    document.querySelector('[name="tipos_entrada_id_tipos_entrada"]').addEventListener('focus',()=>{
        fetch('index.php?cl=tipo_entrada&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Tipos+"</option>"
                    
                }

                document.querySelector('[name="tipos_entrada_id_tipos_entrada"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
}
function crearSalida(){
    document.querySelector('[name="id_tipo_salida"]').addEventListener('focus',()=>{
        fetch('index.php?cl=tipo_salida&me=visualizar')
        .then(
            response=>{
                if (response.ok==false || response.status>299){
                    return Promise.reject({err:"Error, no se encontro el archivo"})   
                }
                return response.json();
            }
        )   
        .then(
            response=>{
                options="";
                
                for (let i = 0; i < response.length; i++) {
                    
                    options+="<option value="+response[i].Id+">"+response[i].Tipos+"</option>"
                    
                }

                document.querySelector('[name="id_tipo_salida"]').innerHTML=options;
                
            }
        )
              
        .catch(
            err=>{
                console.error("Error Servidor !!"+err.err);
            }
        );
    });
}

function reportes(element){
    fetch('index.php?cl=reportes&me='+element,{
        method:"POST"
    }).then(

        response=>{
            if (response.ok==false || response.status>299){
                return Promise.reject({err:"Error, no se encontro el archivo json"})   
            response[0]}
            return response.json();
        }
    ).then(
        response=>{
                $cabecera=document.querySelector('#tabla-admin > .cabecera')
                $cadenaCabecera="";
                for (let i = 0; i < Object.keys(response[0]).length; i++) {
                    
                    $cadenaCabecera+="<th>"+Object.keys(response[0])[i]+"</th>"
                }
                $cabecera.innerHTML=$cadenaCabecera
                $cuerpo=document.querySelector('#tabla-admin > .cuerpo')
                $cadenaCuerpo=""
                for (let j = 0; j < response.length; j++) {
                    $cadenaCuerpo+="<tr>";
                    for (let k = 0; k < Object.keys(response[j]).length; k++) {
                        
                        $cadenaCuerpo+="<td>"+response[j][Object.keys(response[0])[k]]+"</td>"
                    }
                    
        
    }

    $cuerpo.innerHTML=$cadenaCuerpo
        }
    ).catch(
        err=>{
            console.error(err)
        }
    )
}
d.addEventListener('DOMContentLoaded',()=>{
   

    if (document.getElementById('administracion')){
        document.querySelector('#tabla-admin > .cabecera').innerHTML="Extrayendo Datos del servidor ..."; 
        document.querySelectorAll('[data-ruta]').forEach(e=>{
            e.addEventListener('click',(element)=>{
                // document.querySelector('#tabla-admin > .cabecera').innerHTML="Extrayendo Datos del servidor ..."; 

                // setTimeout(()=>{
                    administracion(element.currentTarget.getAttribute('data-ruta'));

                // }
                //     ,2000
                // )
            })
    })
    setTimeout(()=>{
        administracion(document.querySelector('[data-ruta]').getAttribute('data-ruta'))

    }
        ,2000
    )
}
    else if (document.getElementById('productos')){
        document.querySelector('#tabla-admin > .cabecera').innerHTML="Extrayendo Datos del servidor ..."; 
        productos();

       
        
    }
    else if (document.getElementById('crearProducto')){
        crearProducto();        
    }
    else if (document.getElementById('atributosProducto')){
        atributosProducto()
    }
    else if (document.getElementById('planeacion')){
        planeacion()
    }
    else if (document.getElementById('gestionInventario')){
        
        gestionInventario();
    }
    else if (document.getElementById('crearEntrada')){
        
        crearEntrada();
    }
    else if (document.getElementById('crearSalida')){
        
        crearSalida();
    }
    else if (document.getElementById('reportes')){
        document.querySelectorAll('[data-reporte]').forEach(e=>{
            e.addEventListener('click',(element)=>{

                    reportes(element.currentTarget.getAttribute('data-reporte'));
            })
    })
        
    }
})


// --------------------------------------------------------------------------------------------------------------










