import { getLeague } from "./pagLiga.js";
export function obtenerLigaPorId() {
    const urlParams = new URLSearchParams(window.location.search);
    const leagueId = urlParams.get("id");
    getLeague(leagueId);
  }