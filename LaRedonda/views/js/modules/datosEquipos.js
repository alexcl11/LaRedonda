export async function datosEquipos(idEquipo){
    const url = "https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t="+idEquipo
    const response = await fetch(url);
    const data = await response.json();
    console.log(data)
     
    const logoEquipo = document.getElementById("logoEquipo");
    const nomEquipoDiv = document.getElementById("nomEquipo");
    const infoEquipo = document.getElementById("infoEquipo");

    const imgLogo = document.createElement('img');
    imgLogo.src = data.teams[0].strBadge;
    imgLogo.classList.add('img-fluid')

    const nomEquipo = document.createElement('h5');
    nomEquipo.classList.add('img-fluid')
    nomEquipo.innerText = data.teams[0].strTeam;

    const formedYear = document.createElement('p');
    formedYear.innerHTML = "<p><b>Año de formación:</b> "+data.teams[0].intFormedYear+"</p>" 

    const estadioEquipo = document.createElement('p');
    estadioEquipo.innerHTML = "<p><b>Estadio: </b> "+data.teams[0].strStadium+" ("+data.teams[0].intStadiumCapacity+")</p>";

    const localizacion = document.createElement('p');
    localizacion.innerHTML = "<p><b>Localización: </b> "+data.teams[0].strLocation+" ("+data.teams[0].strCountry+")</p>";
    

    const listCompeticionesP = document.createElement('p');
    listCompeticionesP.innerHTML = "<p><b>Competiciones</b><p/>";
    const listCompeticiones = document.createElement('ul');
    Object.keys(data.teams[0]).forEach(key => {
        if (key.startsWith("strLeague") && String(data.teams[0][key]).trim() !== "") {
            const competicion = document.createElement('li');
            competicion.innerText = data.teams[0][key];
            listCompeticiones.appendChild(competicion);
        }
    });
    listCompeticionesP.appendChild(listCompeticiones)

    logoEquipo.appendChild(imgLogo)
    nomEquipoDiv.appendChild(nomEquipo)

    infoEquipo.appendChild(formedYear)
    infoEquipo.appendChild(estadioEquipo)
    infoEquipo.appendChild(localizacion)
    infoEquipo.appendChild(listCompeticionesP)


    const seccionDescripcion = document.getElementById('seccionDescripcion');

    const descripcion = document.createElement('p');
    if(data.teams[0].strDescriptionES!=="" && data.teams[0].strDescriptionES!=null){
        descripcion.innerText = data.teams[0].strDescriptionES
    }else{ 
        descripcion.innerText = data.teams[0].strDescriptionEN
    }

    seccionDescripcion.appendChild(descripcion)
}