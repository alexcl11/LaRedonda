export async function getCLResults(jornadaCL) {
  const contenedorResultadosCL = document.getElementById(
    "contenedorResultadosCL"
  );
  try {
    contenedorResultadosCL.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4480&r=" +
      jornadaCL +
      "&s=2024-2025"
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

      // Modificar cómo se crean los contenedores para los equipos y los nombres
      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container"); // Añadido para uso de estilo
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

      // Lo mismo para el equipo visitante
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

      // El marcador
      const marcador = document.createElement("span");
      marcador.classList.add("marcador"); // Aplicando la clase de estilo
      if (event.intHomeScore != null && event.intAwayScore != null) {
        marcador.innerHTML = event.intHomeScore + " : " + event.intAwayScore;
      } else {
        marcador.innerHTML = "- : -";
      }

      // Creando el contenedor de los equipos y marcador
      const logoContainer = document.createElement("div");
      logoContainer.classList.add("logo-container"); // Aplicando la clase de estilo
      logoContainer.appendChild(homeContainer);
      logoContainer.appendChild(marcador);
      logoContainer.appendChild(awayContainer);

      // Agregar la ubicación del evento
      const venue = document.createElement("p");
      venue.classList.add("venue");
      venue.innerText = event.strVenue;

      resultDiv.appendChild(fechaContainer);
      resultDiv.appendChild(estadoPartido);
      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosCL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}

export async function getPLResults(jornadaPL) {
  const contenedorResultadosPL = document.getElementById(
    "contenedorResultadosPL"
  );
  try {
    contenedorResultadosPL.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4328&r=" +
      jornadaPL +
      "&s=2024-2025"
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
      contenedorResultadosPL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}

export async function getLLResults(jornadaLL) {
  const contenedorResultadosLL = document.getElementById(
    "contenedorResultadosLL"
  );
  try {
    contenedorResultadosLL.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4335&r=" +
      jornadaLL +
      "&s=2024-2025"
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
      contenedorResultadosLL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}

export async function getSAResults(jornadaSA) {
  const contenedorResultadosSA = document.getElementById(
    "contenedorResultadosSA"
  );
  try {
    contenedorResultadosSA.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4332&r=" +
      jornadaSA +
      "&s=2024-2025"
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
      contenedorResultadosSA.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}

export async function getBLResults(jornadaBL) {
  const contenedorResultadosBL = document.getElementById(
    "contenedorResultadosBL"
  );
  try {
    contenedorResultadosBL.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4331&r=" +
      jornadaBL +
      "&s=2024-2025"
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
      marcador.innerHTML = event.intHomeScore + " : " + event.intAwayScore;

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
      contenedorResultadosBL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}
