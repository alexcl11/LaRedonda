export async function datosEquipos(idEquipo) {
    const url = "https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t=" + idEquipo
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
    formedYear.innerHTML = "<p><b>Año de formación:</b> " + data.teams[0].intFormedYear + "</p>"

    const estadioEquipo = document.createElement('p');
    estadioEquipo.innerHTML = "<p><b>Estadio (capacidad): </b> " + data.teams[0].strStadium + " (" + data.teams[0].intStadiumCapacity + ")</p>";

    const localizacion = document.createElement('p');
    localizacion.innerHTML = "<p><b>Localización: </b> " + data.teams[0].strLocation + " (" + data.teams[0].strCountry + ")</p>";


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

    const seccionUltimosResultados = document.getElementById('seccionUltimosResultados');
    const resultados = await obtenerResultados(data.teams);
    seccionUltimosResultados.appendChild(resultados)
    //obtenerResultados(data.teams)
    const seccionDescripcion = document.getElementById('seccionDescripcion');
    seccionDescripcion.appendChild(obtenerDescripcion(data.teams))
    console.log(obtenerDescripcion(data.teams));

    const seccionPlantilla = document.getElementById('seccionPlantilla');

    const ultimosResultadosLink = document.getElementById('ultimosResultadosLink');
    ultimosResultadosLink.addEventListener('click', () => {
        seccionUltimosResultados.classList.remove('d-none');
        ultimosResultadosLink.classList.add('active');

        seccionPlantilla.classList.add('d-none');
        plantillaLink.classList.remove('active');

        seccionDescripcion.classList.add('d-none');
        descripcionLink.classList.remove('active');
    });

    const descripcionLink = document.getElementById('descripcionLink');
    descripcionLink.addEventListener('click', () => {
        seccionDescripcion.classList.remove('d-none');
        descripcionLink.classList.add('active');

        seccionUltimosResultados.classList.add('d-none');
        ultimosResultadosLink.classList.remove('active');

        seccionPlantilla.classList.add('d-none');
        plantillaLink.classList.remove('active');
    })

    const plantillaLink = document.getElementById('plantillaLink');
    plantillaLink.addEventListener('click', () => {
        seccionDescripcion.classList.remove('d-none');
        plantillaLink.classList.add('active');

        seccionUltimosResultados.classList.add('d-none');
        ultimosResultadosLink.classList.remove('active');

        seccionDescripcion.classList.add('d-none');
        descripcionLink.classList.remove('active');
    })

    const favoritosButton = document.getElementById('favoritos');
    favoritosButton.addEventListener('click', () => {
        let heartIcon = document.getElementById("heartIcon"); // Obtiene el ícono dentro del botón
        let idUser = favoritosButton.dataset.userId; // ID del usuario (extraído del atributo data)
        let idFavourite = favoritosButton.dataset.favId; // ID del equipo o favorito
        let nombreFavorito = favoritosButton.dataset.favName; // Nombre del favorito
        let tipoFavorito = favoritosButton.dataset.favType; // Tipo de favorito (por si lo necesitas)

        if (heartIcon.classList.contains("bi-heart-fill")) {
            // Si está relleno, lo vaciamos y eliminamos el favorito
            heartIcon.classList.remove("bi-heart-fill");
            heartIcon.classList.add("bi-heart");

            fetch("controllers/Core/borrar_favorito.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id_user=${idUser}&id_favourite=${data.teams[0].idTeam}`
            })
                .then(response => response.json())
                .then(data => console.log(data.message))
                .catch(error => console.error("Error:", error));

        } else {
            // Si está vacío, lo rellenamos y agregamos el favorito
            heartIcon.classList.remove("bi-heart");
            heartIcon.classList.add("bi-heart-fill");

            fetch("controllers/Core/insertar_favorito.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id_user=${idUser}&id_favourite=${data.teams[0].idTeam}&nombre_favorito=${data.teams[0].strTeam}&tipo_favorito=equipo`
            })
                .then(response => response.json())
                .then(data => console.log(data.message))
                .catch(error => console.error("Error:", error));
        }
    })

}

async function obtenerPlantilla() {

}

function obtenerDescripcion(array) {
    const descripcion = document.createElement('p');
    if (array[0].strDescriptionES !== "" && array[0].strDescriptionES != null) {
        descripcion.innerText = array[0].strDescriptionES
    } else {
        descripcion.innerText = array[0].strDescriptionEN
    }
    return descripcion;
}
async function obtenerResultados(array) {
    const url = "https://www.thesportsdb.com/api/v1/json/3/eventslast.php?id=" + array[0].idTeam;
    const response = await fetch(url);
    const data = await response.json();

    const resultDiv = document.createElement("div");

    data.results.forEach((results) => {
        let gameDiv = document.createElement("div");
        gameDiv.classList.add("tarjetaResultadoEquipo");
        gameDiv.style.width = "100%";

        const leagueContainer = document.createElement("div");
        leagueContainer.classList.add("league-container");
        const leagueName = document.createElement("p");
        leagueName.classList.add("league-name");
        leagueName.innerText = results.strLeague || "Competición desconocida";
        leagueContainer.appendChild(leagueName);

        const fechaContainer = document.createElement("div");
        fechaContainer.classList.add("fecha-container");
        const fecha = document.createElement("p");
        fecha.innerText = results.strTimeLocal ? `${results.dateEvent} || ${results.strTimeLocal}` : results.dateEvent;
        fechaContainer.appendChild(fecha);

        const estadoPartido = document.createElement("div");
        estadoPartido.classList.add("estado-partido");
        estadoPartido.innerText = results.strStatus === "Match Finished" ? "Finalizado" : "Por disputar";

        const homeContainer = document.createElement("div");
        homeContainer.classList.add("team-container");
        homeContainer.style.display = "flex";
        homeContainer.style.flexDirection = "column";
        homeContainer.style.alignItems = "center";

        const homeLogo = document.createElement("img");
        homeLogo.classList.add("team-logo");
        homeLogo.src = results.strHomeTeamBadge;
        homeLogo.alt = results.strHomeTeam + " Logo";

        const homeName = document.createElement("p");
        homeName.classList.add("team-name");
        homeName.innerText = results.strHomeTeam;

        homeContainer.appendChild(homeLogo);
        homeContainer.appendChild(homeName);

        const awayContainer = document.createElement("div");
        awayContainer.classList.add("team-container");
        awayContainer.style.display = "flex";
        awayContainer.style.flexDirection = "column";
        awayContainer.style.alignItems = "center";

        const aAwayLogo = document.createElement("a");
        aAwayLogo.href = `http://localhost:8080/equipo?t=${results.strAwayTeam}`;
        const awayLogo = document.createElement("img");
        awayLogo.classList.add("team-logo");
        awayLogo.src = results.strAwayTeamBadge;
        awayLogo.alt = results.strAwayTeam + " Logo";
        aAwayLogo.appendChild(awayLogo);

        const awayName = document.createElement("p");
        awayName.classList.add("team-name");
        awayName.innerText = results.strAwayTeam;

        awayContainer.appendChild(aAwayLogo);
        awayContainer.appendChild(awayName);

        const marcador = document.createElement("span");
        marcador.classList.add("marcador");
        marcador.innerHTML = results.intHomeScore != null && results.intAwayScore != null
            ? `${results.intHomeScore} : ${results.intAwayScore}`
            : "- : -";

        const logoContainer = document.createElement("div");
        logoContainer.classList.add("logo-container");
        logoContainer.appendChild(homeContainer);
        logoContainer.appendChild(marcador);
        logoContainer.appendChild(awayContainer);

        const venue = document.createElement("p");
        venue.classList.add("venue");
        venue.innerText = results.strVenue;

        gameDiv.appendChild(leagueContainer);
        gameDiv.appendChild(fechaContainer);
        gameDiv.appendChild(estadoPartido);
        gameDiv.appendChild(logoContainer);
        gameDiv.appendChild(venue);

        resultDiv.appendChild(gameDiv);
    });

    return resultDiv;
}
