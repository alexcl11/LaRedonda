async function getResults(idLiga, jornada, season) {
    const contenedorResultados = document.createElement('div');
    try {
        contenedorResultados.innerHTML = "";
        const response = await fetch(
            "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=" + idLiga + "&r=" +
            jornada +
            "&s=" + season
        );
        const data = await response.json();
        console.log(data);
        data.events.forEach((event) => {
            let resultDiv = document.createElement("div");
            resultDiv.classList.add("tarjetaResultadoEquipo");

            const fechaContainer = document.createElement("div");
            fechaContainer.classList.add("fecha-container");
            const fecha = document.createElement("p");
            if (event.strTimeLocal != null) {
                fecha.innerText = event.dateEvent + " || " + event.strTimeLocal;
            } else {
                fecha.innerText = event.dateEvent;
            }

            fechaContainer.appendChild(fecha);

            const estadoPartido = document.createElement("div");
            estadoPartido.classList.add("estado-partido");
            if (event.strStatus === "Match Finished") {
                estadoPartido.innerText = "Finalizado";
            } else {
                estadoPartido.innerText = "Por disputar";
            }

            const homeContainer = document.createElement("div");
            homeContainer.classList.add("team-container");
            homeContainer.style.display = "flex";
            homeContainer.style.flexDirection = "column";
            homeContainer.style.alignItems = "center";



            const aHomeLogo = document.createElement("a");
            aHomeLogo.href = `http://localhost:8080/equipo?t=${event.strHomeTeam}`;
            const homeLogo = document.createElement("img");
            homeLogo.classList.add("team-logo");
            homeLogo.src = event.strHomeTeamBadge;
            homeLogo.alt = event.strHomeTeam + " Logo";
            aHomeLogo.appendChild(homeLogo);

            const homeName = document.createElement("p");
            homeName.classList.add("team-name");
            homeName.innerText = event.strHomeTeam;

            homeContainer.appendChild(aHomeLogo);
            homeContainer.appendChild(homeName);

            

            const awayContainer = document.createElement("div");
            awayContainer.classList.add("team-container");
            awayContainer.style.display = "flex";
            awayContainer.style.flexDirection = "column";
            awayContainer.style.alignItems = "center";

            const aAwayLogo = document.createElement("a");
            aAwayLogo.href = `http://localhost:8080/equipo?t=${event.strAwayTeam}`;
            const awayLogo = document.createElement("img");
            awayLogo.classList.add("team-logo");
            awayLogo.src = event.strAwayTeamBadge;
            awayLogo.alt = event.strAwayTeam + " Logo";
            aAwayLogo.appendChild(awayLogo);

            const awayName = document.createElement("p");
            awayName.classList.add("team-name");
            awayName.innerText = event.strAwayTeam;

            awayContainer.appendChild(aAwayLogo);
            awayContainer.appendChild(awayName);

            const marcador = document.createElement("span");
            marcador.classList.add("marcador");
            if (event.intHomeScore != null && event.intAwayScore != null) {
                marcador.innerHTML = event.intHomeScore + " : " + event.intAwayScore;
            } else {
                marcador.innerHTML = "- : -";
            }

            const logoContainer = document.createElement("div");
            logoContainer.classList.add("logo-container");
            logoContainer.appendChild(homeContainer);
            logoContainer.appendChild(marcador);
            logoContainer.appendChild(awayContainer);

            const venue = document.createElement("p");
            venue.classList.add("venue");
            venue.innerText = event.strVenue;

            resultDiv.appendChild(fechaContainer);
            resultDiv.appendChild(estadoPartido);
            resultDiv.appendChild(logoContainer);
            resultDiv.appendChild(venue);
            contenedorResultados.appendChild(resultDiv);
        });
        console.log('Contenedor results: '+contenedorResultados)
        return contenedorResultados.innerHTML;
    } catch (err) {
        console.error("Error:", err);
        
    }
}


// async function aplicarResultadosADiv() {
//     let divResult = document.createElement('div')
//     const urlParamsLiga = new URLSearchParams(window.location.search);
//     const idLiga = urlParamsLiga.get('id');
//     const seasonLiga = urlParamsLiga.get('s');
//     const jornada = document.getElementById("jornada");
//     jornada.addEventListener("change", async () => {
//         divResult = await getResults(idLiga, jornada.value, seasonLiga);
//     });     
//     return divResult
// }

export async function desplegarClasificacionResultados() {
    const clasificacionLink = document.getElementById('clasificacionLink');
    const resultadosLink = document.getElementById('resultadosLink');
    const seccionClasificacion = document.getElementById('seccionClasificacion');
    const seccionResultados = document.getElementById('seccionResultados');

    let divResults = document.createElement('div');
    const urlParamsLiga = new URLSearchParams(window.location.search);
    const idLiga = urlParamsLiga.get('id');
    const seasonLiga = urlParamsLiga.get('s');
    
    const jornada = document.getElementById("jornada");
    jornada.addEventListener("change", async () => {
        const h4Error = document.createElement('h4')
        h4Error.innerText = 'No se ha podido cargar esta jornada.'
        divResults.innerHTML = (await getResults(idLiga, jornada.value, seasonLiga))?? "<div class='mt-4'><h4>"+h4Error.innerText+"</h4></div>";
        
    });

    console.log(divResults)
    clasificacionLink.addEventListener('click', () => {
        seccionClasificacion.classList.remove('d-none');
        seccionResultados.classList.add('d-none');
        clasificacionLink.classList.add('active');
        resultadosLink.classList.remove('active');
    })
    resultadosLink.addEventListener('click', () => {
        seccionClasificacion.classList.add('d-none');
        seccionResultados.classList.remove('d-none');
        clasificacionLink.classList.remove('active');
        resultadosLink.classList.add('active');
        seccionResultados.appendChild(divResults);
    })
}