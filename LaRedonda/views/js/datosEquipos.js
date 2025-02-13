export async function datosEquipos(idEquipo){
    const url = "https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t="+idEquipo
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
}