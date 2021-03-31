const d=document


function administracion(){
    
    document.querySelectorAll('[data-ruta]').forEach(e=>{
        e.addEventListener('click',(element)=>{
            
                
                
                
            fetch('index.php?cl='+element.currentTarget.getAttribute('data-ruta')+'&me=visualizar',{
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
                        
                        $cadenaCuerpo+="<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#actualizar'>Actualizar</button></td><td><button class='btn btn-danger'>Borrar</button></td></tr>";

                        
                    }

                    $cuerpo.innerHTML=$cadenaCuerpo
                }
            ).catch(
                err=>{
                    console.error(err)
                }
            )

            
    
        })
    })
    
}


// --------------------------------------------------------------------------------------------------------------

function funciones(e){ // Carga de funciones
    setTimeout(()=>{
        fetch('js/json/funciones.json')
        .then(
            result=>{
                return result.json()
            }
        )
        .then(
            result=>{
                // console.log(result)
                let cadena=""
                for (let r in result){
                    // console.log(r)
                    cadena+="<li><a data-funcion="+result[r].funcion_ruta+" href='#'>"+result[r].funcion_nombre+"</a></li>"
                }
                e.innerHTML=cadena

                d.querySelectorAll('[data-funcion]').forEach(e=>{
                    console.log(e)
                    e.addEventListener('click',()=>{
                        cargarFunciones(e.dataset.funcion,d.getElementById('contenido'))

                    })   
                })


            }
        )
    },1000)
}
function cargarContenido(metodo,ruta){
    let $main=d.getElementById("contenido")
    fetch('templates/'+ruta)
    .then(
        content=>{
            if (content.ok==false  || content.status>299) return Promise.reject={error:"No se encontro la ruta especificada"}
            return content.text();
        } 
    )
    .then(
        content=>{
            // console.log($main)
            $main.innerHTML=content
        }
        
    )
    .catch(
        err=>{
            console.error("Error P: "+err)
        }
    )

}



function cargarFunciones(ruta,e){
    
        fetch("templates/"+ruta)
        .then(
            content=>{
                if (content.ok==false  || content.status>299) return Promise.reject={error:"No se encontro la ruta especificada"}
                return content.text();
            } 
        )
        .then(
            content=>{
                
                e.innerHTML=content
                
                // e.innerHTML="<h1> Se estan cargando las funciones ...</h1>"
                
                if (ruta=="funciones.html"){
                    funciones(e)
                    e.innerHTML=" <ul><li> Se estan cargando las funciones ... </li></h1>"
                }
                if (ruta=="administration.html"){
                    administracion()
                }
                
                
                
                
            }
        )
        .catch(
            err=>{
                console.error("Error P: "+err)
            }

            
        )

        
}



d.addEventListener('DOMContentLoaded', () => {
    
    let data=d.querySelectorAll("[data-content]")
    data.forEach(e=>{
        let ruta=e.dataset.content

        cargarFunciones(ruta,e);

    });



    // setTimeout(cargarContenido('GET','stock.html'),3000);
    // let $main=d.getElementById("contenido");
    // $main.innerHTML="<h1>Se esta cargando el contenido ...</h1>";


    // Evento click para cada funcion
    


    })



