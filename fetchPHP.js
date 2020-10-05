function listarPersonas()
{
    
    const data = new FormData(document.getElementById('formulario'));
    
    
    var tbody = document.querySelector('#tbodyID');

  
    fetch("controller/personaController.php?accion=listar",{
    method:'POST',
    body:data}
    ) 
    .then(res => res.json())
    .then(res=>{
        console.log(res);
        if (res.Response != false) {
           
            tbody.innerHTML='';

            res.forEach(element => {
                tbody.innerHTML += `
                
                <tr>                               
                    <td><h4>${element.id}</h4></td>
                    <td><h4>${element.nombre}</h4></td>
                    <td><h4>${element.apellido}</h4></td>
                    <td><h4>${element.dni}</h4></td>
                </tr>
        
                
                `
            });
            
            
        }      
    })
}

function agregarPersona()
{
    
    const data = new FormData(document.getElementById('formularioAgregarPersona'));
    // var obj = JSON.stringify(Object.fromEntries(data));
    // controller/personaController.php?accion=nuevo

    fetch("/controller/personaController.php",{
    method:'POST',
    body:data}) 
    .then(res => res.text())
    .then(res=>{
        console.log(res);
    })
        
}