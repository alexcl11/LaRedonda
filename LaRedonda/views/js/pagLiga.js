export async function getLeague(ligaId) {
  const tablaClasiH4 = document.getElementById('tablaClasiH4');
  const leagueTable = document.getElementById("tbodyLeague");
  const nombreLiga = document.getElementById("nombreLiga");
  const response = await fetch(
    "https://www.thesportsdb.com/api/v1/json/3/lookuptable.php?l=" +
      ligaId +
      "&s=2024-2025"
  );
  const data = await response.json();
  console.log(data);
  if (!data.table) {
    console.error("No se encontraron datos de la liga.");
    return;
  }
  tablaClasiH4.innerText += ' última actualización: ' + data.table[0].dateUpdated; 
  nombreLiga.innerText = data.table[0].strLeague;
  data.table.forEach((team) => {
    const trLeague = document.createElement("tr");
    
    const description = team.strDescription ? team.strDescription.toLowerCase() : ""; 

    switch (true) {
      case description.includes("champions"):
        trLeague.classList.add("cha");
        break;
      case description.includes("europa"):
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
                <td><img class="img-fluid" src=${team.strBadge} width="30"> ${
        team.strTeam
      }</td>   
                <td>${team.intPlayed}</td>   
                <td>${team.intPoints}</td>   
                <td>${team.intWin}</td>    
                <td>${team.intDraw}</td>    
                <td>${team.intLoss}</td>    
                <td class="d-none d-md-table-cell">${team.intGoalsFor}</td>    
                <td class="d-none d-md-table-cell">${team.intGoalsAgainst}</td>    
                <td>${team.intGoalDifference}</td>    
                <td class="d-none d-md-table-cell">${team.strForm || "-"}</td> 
        `
    );
    leagueTable.appendChild(trLeague);
  });
}