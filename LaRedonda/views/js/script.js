import { newsApi } from "./noticias.js";
import { getCLResults, getPLResults, getLLResults, getSAResults, getBLResults } from "./results.js";
import { getLeague } from "./pagLiga.js";
import { initSignUp } from "./validacionRegistro.js";
import { cambiarEmail, cambiarNombre } from "./cambiarDatosPerfil.js";
import { validarEmail } from "./validacionCambioDatos.js";
import { ligasPais } from "./buscarLigasPais.js";
document.addEventListener("DOMContentLoaded", () => {
  if (window.location.pathname === "/") {
    ejecutarFuncionesInicio();
  }
  if (window.location.pathname === "/liga") {
    ejecutarFuncionesLiga();
  }
  if (window.location.pathname === "/crear_cuenta") {
    initSignUp();
  }
  if (window.location.pathname === "/perfil") {
    cambiarEmail();
    cambiarNombre();
    validarEmail();
  }
  if (window.location.pathname === "/ligas_pais") {
    const urlParams = new URLSearchParams(window.location.search); 
    const nomPais = urlParams.get('p');
    ligasPais(nomPais);
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
    getLLResults(jornadaLL.value);
  });
  const jornadaSA = document.getElementById("jornadaSA");
  jornadaSA.addEventListener("change", () => {
    getSAResults(jornadaSA.value);
  });
  const jornadaBL = document.getElementById("jornadaBL");
  jornadaBL.addEventListener("change", () => {
    getBLResults(jornadaBL.value);
  });

  const desplegarCL = document.getElementById("desplegarCL");
  const resultadosCL = document.getElementById("resultadosCL");
  const results = document.querySelectorAll(".results");
  desplegarCL.addEventListener("click", () => {
    results.forEach((result) => {
      result.classList.remove("d-flex");
      result.classList.add("d-none");
    });
    resultadosCL.classList.remove("d-none");
    resultadosCL.classList.add("d-flex");
  });
  const desplegarPL = document.getElementById("desplegarPL");
  const resultadosPL = document.getElementById("resultadosPL");
  desplegarPL.addEventListener("click", () => {
    results.forEach((result) => {
      result.classList.remove("d-flex");
      result.classList.add("d-none");
    });
    resultadosPL.classList.remove("d-none");
    resultadosPL.classList.add("d-flex");
  });
  const desplegarSA = document.getElementById("desplegarSA");
  const resultadosSA = document.getElementById("resultadosSA");
  desplegarSA.addEventListener("click", () => {
    results.forEach((result) => {
      result.classList.remove("d-flex");
      result.classList.add("d-none");
    });
    resultadosSA.classList.remove("d-none");
    resultadosSA.classList.add("d-flex");
  });
  const desplegarBL = document.getElementById("desplegarBL");
  const resultadosBL = document.getElementById("resultadosBL");
  desplegarBL.addEventListener("click", () => {
    results.forEach((result) => {
      result.classList.remove("d-flex");
      result.classList.add("d-none");
    });
    resultadosBL.classList.remove("d-none");
    resultadosBL.classList.add("d-flex");
  });
  const desplegarLL = document.getElementById("desplegarLL");
  const resultadosLL = document.getElementById("resultadosLL");
  desplegarLL.addEventListener("click", () => {
    results.forEach((result) => {
      result.classList.remove("d-flex");
      result.classList.add("d-none");
    });
    resultadosLL.classList.remove("d-none");
    resultadosLL.classList.add("d-flex");
  });

  newsApi();

  const logoChampions = document.getElementById("logoChampions");
  logoChampions.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4480";
  });
  const logoPrem = document.getElementById("logoPrem");
  logoPrem.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4328";
  });
  const logoLaLiga = document.getElementById("logoLaLiga");
  logoLaLiga.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4335";
  });
  const logoSerieA = document.getElementById("logoSerieA");
  logoSerieA.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4332";
  });
  const logoBundes = document.getElementById("logoBundes");
  logoBundes.addEventListener("click", () => {
    window.location = "http://localhost:8080/liga?id=4331";
  });
}

function ejecutarFuncionesLiga() {
  const urlParams = new URLSearchParams(window.location.search);
  const leagueId = urlParams.get("id");
  getLeague(leagueId);
}
