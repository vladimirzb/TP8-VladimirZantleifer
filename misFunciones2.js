function buscarPeli()
{
    
        
    
    
    var tbody = document.querySelector('#tbodyID');

  
    fetch("testeando-clases.php")
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