// ${element.Title}
function buscarPeli()
{
    let titulo = document.querySelector('#idPeliTituloText').value;
    if (titulo!="") {
        
    
    
    let añoPeli = document.querySelector('#idAñoPeli').value;
    let numPagina = document.querySelector('#idPaginaResult').value;
    var tbody = document.querySelector('#tbodyID');

    //type valores
    let type;
    if (document.getElementById("radioBtnSinFiltro").checked == true) //Si elegio buscar peli
    {
        type = "";
    }

    if (document.getElementById("radioBtnPeli").checked == true) //Si elegio buscar peli
    {
        type = document.getElementById("radioBtnPeli").value;
    }

    if (document.getElementById("radioBtnSerie").checked == true) //Si elegio buscar serie
    {
        type = document.getElementById("radioBtnSerie").value;
    }

    if (document.getElementById("radioBtnCapitulo").checked == true) //Si elegio buscar episodio
    {
        type = document.getElementById("radioBtnCapitulo").value;
    }

    console.log(type + ' el type es')

     let resquestDeApi= 'http://www.omdbapi.com/?apikey=bd30a04b&s='+ titulo + '&page=' +numPagina + '&y=' + añoPeli + '&type='+ type;

    console.log(resquestDeApi); 
    console.log('titulo a buscar'+titulo);
    fetch(resquestDeApi)
    .then(res => res.json())
    .then(res=>{
        console.log(res);
        if (res.Response != false) {
           
            tbody.innerHTML='';

            res.Search.forEach(element => {
                tbody.innerHTML += `
                
                <tr>
                                
                    <td><h1>${element.Title}</h1></td>
                    <td>
                    <img src="${element.Poster}" alt="Poster" >
                    
                    
                    </td>
                    <td>${element.Type}</td>
                    <td>${element.Year}</td>
                </tr>
        
                
                `
            });
            
            
        }
        
        
    })

    }
    else
    {
        alert("Llene el campo de titulo!");
    }
}