document.addEventListener("DOMContentLoaded", () => {
  if (window.location.hash === "#inicio" || window.location.pathname === "/") {
    ejecutarFuncionesInicio();
  }
});

function ejecutarFuncionesInicio() {
  const jornadaCL = document.getElementById("jornadaCL");
  jornadaCL.addEventListener("change", () => {
    getCLResults(jornadaCL.value);
  });
  const jornadaPL = document.getElementById("jornadaPL");
  jornadaPL.addEventListener("change", () => {
    getPLResults(jornadaPL.value);
  });
  const jornadaLL = document.getElementById("jornadaLL");
  jornadaLL.addEventListener("change", () => {
    getPLResults(jornadaLL.value);
  });
  const jornadaSA = document.getElementById("jornadaSA");
  jornadaSA.addEventListener("change", () => {
    getSAResults(jornadaSA.value);
  });
  const jornadaBL = document.getElementById("jornadaBL");
  jornadaBL.addEventListener("change", () => {
    getBLResults(jornadaBL.value);
  });

  //getCLResults();
  //getPLResults();
  //getLLResults();
  //getSAResults();
  //getBLResults();
  newsApi();

  const logoChampions = document.getElementById("logoChampions");
  logoChampions.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=1";
  });
  const logoPrem = document.getElementById("logoPrem");
  logoPrem.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=2";
  });
  const logoLaLiga = document.getElementById("logoLaLiga");
  logoLaLiga.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=3";
  });
  const logoSerieA = document.getElementById("logoSerieA");
  logoSerieA.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4";
  });
  const logoBundes = document.getElementById("logoBundes");
  logoBundes.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=5";
  });
}
async function getCLResults(jornadaCL) {
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
      resultDiv.classList.add("tarjetaResultado");
      // Modificar cómo se crean los contenedores para los equipos y los nombres
      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container"); // Añadido para uso de estilo
      homeContainer.style.display = "flex";
      homeContainer.style.flexDirection = "column";
      homeContainer.style.alignItems = "center";

      const homeLogo = document.createElement("img");
      homeLogo.classList.add("team-logo"); // Aplicando la clase de estilo
      homeLogo.src = event.strHomeTeamBadge;
      homeLogo.alt = event.strHomeTeam + " Logo";

      const homeName = document.createElement("p");
      homeName.classList.add("team-name"); // Aplicando la clase de estilo
      homeName.innerText = event.strHomeTeam;

      homeContainer.appendChild(homeLogo);
      homeContainer.appendChild(homeName);

      // Lo mismo para el equipo visitante
      const awayContainer = document.createElement("div");
      awayContainer.classList.add("team-container");
      awayContainer.style.display = "flex";
      awayContainer.style.flexDirection = "column";
      awayContainer.style.alignItems = "center";

      const awayLogo = document.createElement("img");
      awayLogo.classList.add("team-logo"); // Aplicando la clase de estilo
      awayLogo.src = event.strAwayTeamBadge;
      awayLogo.alt = event.strAwayTeam + " Logo";

      const awayName = document.createElement("p");
      awayName.classList.add("team-name"); // Aplicando la clase de estilo
      awayName.innerText = event.strAwayTeam;

      awayContainer.appendChild(awayLogo);
      awayContainer.appendChild(awayName);

      // El marcador
      const marcador = document.createElement("span");
      marcador.classList.add("marcador"); // Aplicando la clase de estilo
      marcador.innerHTML = event.intHomeScore + " : " + event.intAwayScore;

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

      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosCL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}
async function getPLResults(jornadaPL) {
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
      resultDiv.classList.add("tarjetaResultado");

      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container");
      homeContainer.style.display = "flex";
      homeContainer.style.flexDirection = "column";
      homeContainer.style.alignItems = "center";

      const homeLogo = document.createElement("img");
      homeLogo.classList.add("team-logo");
      homeLogo.src = event.strHomeTeamBadge;
      homeLogo.alt = event.strHomeTeam + " Logo";

      const homeName = document.createElement("p");
      homeName.classList.add("team-name");
      homeName.innerText = event.strHomeTeam;

      homeContainer.appendChild(homeLogo);
      homeContainer.appendChild(homeName);

      const awayContainer = document.createElement("div");
      awayContainer.classList.add("team-container");
      awayContainer.style.display = "flex";
      awayContainer.style.flexDirection = "column";
      awayContainer.style.alignItems = "center";

      const awayLogo = document.createElement("img");
      awayLogo.classList.add("team-logo");
      awayLogo.src = event.strAwayTeamBadge;
      awayLogo.alt = event.strAwayTeam + " Logo";

      const awayName = document.createElement("p");
      awayName.classList.add("team-name");
      awayName.innerText = event.strAwayTeam;

      awayContainer.appendChild(awayLogo);
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

      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosPL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}
async function getLLResults(jornadaLL) {
  const contenedorResultadosLL = document.getElementById(
    "contenedorResultadosLL"
  );
  try {
    contenedorResultadosPL.innerHTML = "";
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4335&r=" +
        jornadaLL +
        "&s=2024-2025"
    );
    const data = await response.json();
    console.log(data);
    data.events.forEach((event) => {
      let resultDiv = document.createElement("div");
      resultDiv.classList.add("tarjetaResultado");

      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container");
      homeContainer.style.display = "flex";
      homeContainer.style.flexDirection = "column";
      homeContainer.style.alignItems = "center";

      const homeLogo = document.createElement("img");
      homeLogo.classList.add("team-logo");
      homeLogo.src = event.strHomeTeamBadge;
      homeLogo.alt = event.strHomeTeam + " Logo";

      const homeName = document.createElement("p");
      homeName.classList.add("team-name");
      homeName.innerText = event.strHomeTeam;

      homeContainer.appendChild(homeLogo);
      homeContainer.appendChild(homeName);

      const awayContainer = document.createElement("div");
      awayContainer.classList.add("team-container");
      awayContainer.style.display = "flex";
      awayContainer.style.flexDirection = "column";
      awayContainer.style.alignItems = "center";

      const awayLogo = document.createElement("img");
      awayLogo.classList.add("team-logo");
      awayLogo.src = event.strAwayTeamBadge;
      awayLogo.alt = event.strAwayTeam + " Logo";

      const awayName = document.createElement("p");
      awayName.classList.add("team-name");
      awayName.innerText = event.strAwayTeam;

      awayContainer.appendChild(awayLogo);
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

      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosLL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}
async function getSAResults(jornadaSA) {
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
      resultDiv.classList.add("tarjetaResultado");

      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container");
      homeContainer.style.display = "flex";
      homeContainer.style.flexDirection = "column";
      homeContainer.style.alignItems = "center";

      const homeLogo = document.createElement("img");
      homeLogo.classList.add("team-logo");
      homeLogo.src = event.strHomeTeamBadge;
      homeLogo.alt = event.strHomeTeam + " Logo";

      const homeName = document.createElement("p");
      homeName.classList.add("team-name");
      homeName.innerText = event.strHomeTeam;

      homeContainer.appendChild(homeLogo);
      homeContainer.appendChild(homeName);

      const awayContainer = document.createElement("div");
      awayContainer.classList.add("team-container");
      awayContainer.style.display = "flex";
      awayContainer.style.flexDirection = "column";
      awayContainer.style.alignItems = "center";

      const awayLogo = document.createElement("img");
      awayLogo.classList.add("team-logo");
      awayLogo.src = event.strAwayTeamBadge;
      awayLogo.alt = event.strAwayTeam + " Logo";

      const awayName = document.createElement("p");
      awayName.classList.add("team-name");
      awayName.innerText = event.strAwayTeam;

      awayContainer.appendChild(awayLogo);
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

      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosSA.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}
async function getBLResults(jornadaBL) {
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
      resultDiv.classList.add("tarjetaResultado");

      const homeContainer = document.createElement("div");
      homeContainer.classList.add("team-container");
      homeContainer.style.display = "flex";
      homeContainer.style.flexDirection = "column";
      homeContainer.style.alignItems = "center";

      const homeLogo = document.createElement("img");
      homeLogo.classList.add("team-logo");
      homeLogo.src = event.strHomeTeamBadge;
      homeLogo.alt = event.strHomeTeam + " Logo";

      const homeName = document.createElement("p");
      homeName.classList.add("team-name");
      homeName.innerText = event.strHomeTeam;

      homeContainer.appendChild(homeLogo);
      homeContainer.appendChild(homeName);

      const awayContainer = document.createElement("div");
      awayContainer.classList.add("team-container");
      awayContainer.style.display = "flex";
      awayContainer.style.flexDirection = "column";
      awayContainer.style.alignItems = "center";

      const awayLogo = document.createElement("img");
      awayLogo.classList.add("team-logo");
      awayLogo.src = event.strAwayTeamBadge;
      awayLogo.alt = event.strAwayTeam + " Logo";

      const awayName = document.createElement("p");
      awayName.classList.add("team-name");
      awayName.innerText = event.strAwayTeam;

      awayContainer.appendChild(awayLogo);
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

      resultDiv.appendChild(logoContainer);
      resultDiv.appendChild(venue);
      contenedorResultadosBL.appendChild(resultDiv);
    });
  } catch (err) {
    console.error("Error:", err);
  }
}


const NEWS_API_KEY = "a65fa84a05d84917a83bcc883b3f6060";
const urlNews =
  "https://newsapi.org/v2/everything?q=futbol&pageSize=12&language=es&apiKey=" +
  NEWS_API_KEY;

async function newsApi() {
  const noticiasDiv = document.getElementById("noticias");
  try {
    const response = await fetch(urlNews);
    const data = await response.json();
    console.log(data);
    data.articles.forEach((article) => {
      const tarjetaNoticia = document.createElement("div");
      tarjetaNoticia.classList.add("tarjetaNoticia");

      const newImg = document.createElement("img");
      newImg.src = article.urlToImage;
      newImg.alt = article.urlToImage + " Logo";
      newImg.style.width = "500px";
      newImg.style.height = "250px";

      const title = document.createElement("h4");
      title.innerText = article.title;

      const description = document.createElement("p");
      description.innerText = article.description;

      const urlToNew = document.createElement("a");
      urlToNew.href = article.url;
      urlToNew.textContent = "Leer noticia";

      tarjetaNoticia.appendChild(newImg);
      tarjetaNoticia.appendChild(title);
      tarjetaNoticia.appendChild(description);
      tarjetaNoticia.appendChild(urlToNew);

      noticiasDiv.appendChild(tarjetaNoticia);
    });
  } catch (err) {
    console.log("Error: " + err);
  }
}
