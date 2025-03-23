export async function getLeague(ligaId, season) {
  console.log(season)
  const tablaClasiH4 = document.getElementById("tablaClasiH4");
  const leagueTable = document.getElementById("leagueTable");
  const leagueTableBody = document.getElementById("tbodyLeague");
  const logoLiga = document.getElementById("logoLiga");
  try {
    const response = await fetch(
      "https://www.thesportsdb.com/api/v1/json/3/lookuptable.php?l=" +
        ligaId +
        "&s="+season
    );
    const data = await response.json();
    console.log(data);
    if (!data.table) {
      console.error("No se encontraron datos de la liga.");
      return;
    }
  
    tablaClasiH4.innerText +=
      " última actualización: " + data.table[0].dateUpdated;
    logoLiga.src = '/views/img/logos_ligas/'+data.table[0].idLeague+'.png';
    data.table.forEach((team) => {
      const trLeague = document.createElement("tr");
  
      const description = team.strDescription
        ? team.strDescription.toLowerCase()
        : "";
  
      switch (true) {
        case description.includes("champions") ||
          (description.includes("promotion") && (!description.includes("play-off") && !description.includes("conference")&&(!description.includes("europa")))):
          trLeague.classList.add("cha");
          break;
        case description.includes("europa league") || description.includes("play-off"):
          trLeague.classList.add("uefa");
          break;
        case description.includes("conference"):
          trLeague.classList.add("elimconf");
          break;
        case description.includes("relegation"):
          trLeague.classList.add("desc");
          break;
        default:
          trLeague.classList.add("normal");
          break;
      }
      trLeague.insertAdjacentHTML(
        "beforeend",
        `<td>${team.intRank}</td>
         <td><a style="text-decoration: none; color: black;" href="http://localhost:8080/equipo?t=${team.strTeam}" ><img class="img-fluid" src=${team.strBadge} width="30"> ${team.strTeam}</a></td>   
         <td>${team.intPlayed}</td>   
         <td>${team.intPoints}</td>   
         <td>${team.intWin}</td>    
         <td>${team.intDraw}</td>    
         <td>${team.intLoss}</td>    
         <td class="d-none d-md-table-cell">${team.intGoalsFor}</td>    
         <td class="d-none d-md-table-cell">${team.intGoalsAgainst}</td>    
         <td>${team.intGoalDifference}</td>    
         <td class="d-none d-md-table-cell">${team.strForm || "-"}</td>`
      );
      leagueTableBody.appendChild(trLeague);

      

    });
    const favoritosButton = document.getElementById('favoritos');
      favoritosButton.addEventListener('click', () => {
          let heartIcon = document.getElementById("heartIcon"); // Obtiene el ícono dentro del botón
          let idUser = favoritosButton.dataset.userId; // ID del usuario (extraído del atributo data)
          
          if (heartIcon.classList.contains("bi-heart-fill")) {
              // Si está relleno, lo vaciamos y eliminamos el favorito
              heartIcon.classList.remove("bi-heart-fill");
              heartIcon.classList.add("bi-heart");
  
              fetch("controllers/Core/borrar_favorito.php", {
                  method: "POST",
                  headers: { "Content-Type": "application/x-www-form-urlencoded" },
                  body: `id_user=${idUser}&id_favourite=${data.table[0].idLeague}`
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
                  body: `id_user=${idUser}&id_favourite=${data.table[0].idLeague}&nombre_favorito=${data.table[0].strLeague}&tipo_favorito=competicion&img_favorito="/views/img/logos_ligas/${data.table[0].idLeague}.png"`
              })
                  .then(response => response.json())
                  .then(data => console.log(data.message))
                  .catch(error => console.error("Error:", error));
          }
      })
  } catch (error) {
    leagueTable.classList.add('d-none');
    tablaClasiH4.innerText = 'No se han encontrado datos para esta Liga para la temporada seleccionada.'
  }

  

}
