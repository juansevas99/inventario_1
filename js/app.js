const d=document

function display(response){
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

d.addEventListener('DOMContentLoaded',()=>{
    document.querySelector('#tabla-admin > .cabecera').innerHTML="Extrayendo Datos del servidor ..."; 

    if (document.getElementById('administracion')){
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
        productos();
        
    }
})


// --------------------------------------------------------------------------------------------------------------










