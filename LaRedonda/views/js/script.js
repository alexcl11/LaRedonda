
import { desplegarResults } from "./modules/desplegarResultadosNoticias.js";
import { obtenerLigaPorId } from "./modules/obtenerLiga.js";
import { initSignUp } from "./modules/validacionRegistro.js";
import { cambiarEmail, cambiarNombre } from "./modules/cambiarDatosPerfil.js";
import { validarEmail } from "./modules/validacionCambioDatos.js";
import { ligasPais } from "./modules/buscarLigasPais.js";
import { datosEquipos } from "./modules/datosEquipos.js"; 
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



