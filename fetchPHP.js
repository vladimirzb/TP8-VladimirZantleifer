function listarPersonas()
{
    
    
    
    
    var tbody = document.querySelector('#tbodyID');

  
    fetch("controller/personaController.php?accion=listar",{
    method:'POST'}
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

    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var dni = document.getElementById("dni").value;

    var boolCamposLlenos=false;
    var boolDnilargo=false;

    if (nombre=="" | apellido=="" | dni==""  ) 
    {
        alert("Complete todos los campos para agregar a la perosna");
        boolCamposLlenos=false;
    }
    
    else {
        boolCamposLlenos=true;

    }

    if (dni.length <=8 ) {
        boolDnilargo=true;
    }
    else
    {
        alert("Ponga un dni numerico con 8 caracteres");
        boolDnilargo=false;
    }
    
    

    if (boolCamposLlenos==true && boolDnilargo==true) {
        fetch("/controller/personaController.php",{
            method:'POST',
            body:data}) 
            .then(res => res.text())
            .then(res=>{
                console.log(res);
            })
        alert("Persona agregada exitosamente!");

    }
    
        
}