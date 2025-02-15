export async function ligasPais(nomPais, season){
    const url = "https://www.thesportsdb.com/api/v1/json/3/search_all_leagues.php?c="+nomPais+"&s=Soccer";
    const response = await fetch(url);
    const data = await response.json();
    console.log(data)
    const filaLigas = document.getElementById('filaLigas');
    

    data.countries.forEach(competition => {
        if(competition.strCurrentSeason.includes("2025") && !competition.strLeague.includes('Non') && !competition.strLeague.includes('Isthmian ')){
            const divCompetition = document.createElement('div');
            divCompetition.classList.add('col')
            divCompetition.classList.add('iconoLiga')

            const aCompetition = document.createElement('a');
            aCompetition.href = "http://localhost:8080/liga?id="+competition.idLeague+"&s="+season;

            const imgCompetition = document.createElement('img');
            imgCompetition.src = competition.strBadge;
            imgCompetition.style.width = "50px";
            aCompetition.appendChild(imgCompetition);

            const nameCompetition = document.createElement('small');
            nameCompetition.innerText = competition.strLeague;

            divCompetition.appendChild(aCompetition);
            divCompetition.appendChild(nameCompetition);
            

            (competition.idCup === "1") ? '' : filaLigas.appendChild(divCompetition);

        }
    });
}