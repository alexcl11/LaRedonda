document.addEventListener('DOMContentLoaded', () => {
    if (window.location.hash === '#inicio' || window.location.pathname === '/') {
        ejecutarFuncionesInicio();
    }
});

function ejecutarFuncionesInicio() {
    getPLResults();
    getLLResults();
    getSAResults();
    getBLResults();
    newsApi();
}

async function getPLResults() {
    const resultadosPL = document.getElementById('resultadosPL');
    try {
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4328&r=22&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');

            // Crear un contenedor para los logos y el marcador
            const logoContainer = document.createElement('div');
            logoContainer.style.display = 'flex';
            logoContainer.style.alignItems = 'center'; // Centrar los elementos
            logoContainer.style.justifyContent = 'center';

            const homeLogo = document.createElement('img');
            homeLogo.src = event.strHomeTeamBadge;
            homeLogo.alt = event.strHomeTeam + ' Logo';
            homeLogo.style.width = '30px';
            homeLogo.style.height = '30px';

            const marcador = document.createElement('span');
            marcador.innerHTML = event.intHomeScore + ' : ' + event.intAwayScore;
            marcador.style.margin = '5px 0'; // Espaciado vertical

            const awayLogo = document.createElement('img');
            awayLogo.src = event.strAwayTeamBadge;
            awayLogo.alt = event.strAwayTeam + ' Logo';
            awayLogo.style.width = '30px';
            awayLogo.style.height = '30px';

            // Agregar los logos y el marcador al contenedor
            logoContainer.appendChild(homeLogo);
            logoContainer.appendChild(marcador);
            logoContainer.appendChild(awayLogo);

            // Crear un elemento para el nombre del estadio
            const venue = document.createElement('p');
            venue.innerText = event.strVenue;
            venue.style.textAlign = 'center'; // Centrar el texto

            // Agregar el contenedor y el nombre del estadio al div de resultados
            resultDiv.appendChild(logoContainer);
            resultDiv.appendChild(venue);
            resultadosPL.appendChild(resultDiv);
        });
    } catch (err) {
        console.error('Error:', err);
    }
}
async function getLLResults() {
    const resultadosLL = document.getElementById('resultadosLL');
    try {
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4335&r=20&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');

            const homeLogo = document.createElement('img');
            homeLogo.src = event.strHomeTeamBadge;
            homeLogo.alt = event.strHomeTeam + ' Logo';
            homeLogo.style.width = '30px';
            homeLogo.style.height = '30px';

            const awayLogo = document.createElement('img');
            awayLogo.src = event.strAwayTeamBadge;
            awayLogo.alt = event.strAwayTeam + ' Logo';
            awayLogo.style.width = '30px';
            awayLogo.style.height = '30px';

            const marcador = document.createElement('span');
            marcador.innerHTML = event.intHomeScore + ' : ' + event.intAwayScore;
            marcador.style.margin = '5px';


            resultDiv.appendChild(homeLogo);
            resultDiv.appendChild(marcador);
            resultDiv.appendChild(awayLogo);

            console.log(resultDiv);
            resultadosLL.appendChild(resultDiv);
        });
    } catch (err) {
        console.error('Error:', err);
    }
}
async function getSAResults() {
    const resultadosSA = document.getElementById('resultadosSA');
    try {
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4332&r=21&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');

            const homeLogo = document.createElement('img');
            homeLogo.src = event.strHomeTeamBadge;
            homeLogo.alt = event.strHomeTeam + ' Logo';
            homeLogo.style.width = '30px';
            homeLogo.style.height = '30px';

            const awayLogo = document.createElement('img');
            awayLogo.src = event.strAwayTeamBadge;
            awayLogo.alt = event.strAwayTeam + ' Logo';
            awayLogo.style.width = '30px';
            awayLogo.style.height = '30px';

            const marcador = document.createElement('span');
            marcador.innerHTML = event.intHomeScore + ' : ' + event.intAwayScore;
            marcador.style.margin = '5px';


            resultDiv.appendChild(homeLogo);
            resultDiv.appendChild(marcador);
            resultDiv.appendChild(awayLogo);
            resultadosSA.appendChild(resultDiv);
        });
    } catch (err) {
        console.error('Error:', err);
    }
}
async function getBLResults() {
    const resultadosBL = document.getElementById('resultadosBL');
    try {
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4331&r=18&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');

            const homeLogo = document.createElement('img');
            homeLogo.src = event.strHomeTeamBadge;
            homeLogo.alt = event.strHomeTeam + ' Logo';
            homeLogo.style.width = '30px';
            homeLogo.style.height = '30px';

            const awayLogo = document.createElement('img');
            awayLogo.src = event.strAwayTeamBadge;
            awayLogo.alt = event.strAwayTeam + ' Logo';
            awayLogo.style.width = '30px';
            awayLogo.style.height = '30px';

            const marcador = document.createElement('span');
            marcador.innerHTML = event.intHomeScore + ' : ' + event.intAwayScore;
            marcador.style.margin = '5px';


            resultDiv.appendChild(homeLogo);
            resultDiv.appendChild(marcador);
            resultDiv.appendChild(awayLogo);
            resultadosBL.appendChild(resultDiv);
        });
    } catch (err) {
        console.error('Error:', err);
    }
}

const NEWS_API_KEY = "a65fa84a05d84917a83bcc883b3f6060";
const urlNews = "https://newsapi.org/v2/everything?q=futbol&pageSize=5&sortBy=popularity&language=es&apiKey="+NEWS_API_KEY;

async function newsApi(){
    const noticiasDiv = document.getElementById('noticias');
    try{
        const response = await fetch(urlNews);
        const data = await response.json();
        console.log(data)
        data.articles.forEach(article=>{
            const tarjetaNoticia = document.createElement('div');
            tarjetaNoticia.classList.add('tarjetaNoticia');

            const newImg = document.createElement('img');
            newImg.src = article.urlToImage;
            newImg.alt = article.urlToImage + ' Logo';
            newImg.style.width = '500px';
            newImg.style.height = '250px';

            const title = document.createElement('h4');
            title.innerText = article.title;

            const description = document.createElement('p');
            description.innerText = article.description

            const urlToNew = document.createElement('a')
            urlToNew.href = article.url;
            urlToNew.textContent = 'Leer noticia'

            tarjetaNoticia.appendChild(newImg)
            tarjetaNoticia.appendChild(title)
            tarjetaNoticia.appendChild(description)
            tarjetaNoticia.appendChild(urlToNew)


            noticiasDiv.appendChild(tarjetaNoticia);

        })
    }catch(err){
        console.log('Error: '+err)
    }
}