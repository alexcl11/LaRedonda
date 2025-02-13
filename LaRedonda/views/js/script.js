
import { desplegarResults } from "./desplegarResultadosNoticias.js";
import { obtenerLigaPorId } from "./obtenerLiga.js";
import { initSignUp } from "./validacionRegistro.js";
import { cambiarEmail, cambiarNombre } from "./cambiarDatosPerfil.js";
import { validarEmail } from "./validacionCambioDatos.js";
import { ligasPais } from "./buscarLigasPais.js";
import { datosEquipos } from "./datosEquipos.js"; 
document.addEventListener("DOMContentLoaded", () => {

  const page = window.location.pathname
    switch (page){
      case "/":
        desplegarResults()
        break;
      case "/liga":
        obtenerLigaPorId()
        break;
      case "/crear_cuenta":
        initSignUp();
        break;
      case "/perfil":
        cambiarEmail();
        cambiarNombre();
        validarEmail();
        break;
      case "/ligas_pais":
        const urlParamsLiga = new URLSearchParams(window.location.search); 
        const nomPais = urlParamsLiga.get('p');
        ligasPais(nomPais);
        break;
      case "/equipo":
        const urlParamsEquipo = new URLSearchParams(window.location.search); 
        const idEquipo = urlParamsEquipo.get('t');
        datosEquipos(idEquipo);
        break;
      default:
        console.log("Pagina no encontrada");
        break;
  }

});



