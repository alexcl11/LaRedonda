document.addEventListener('DOMContentLoaded', () => {
    getPLResults();
    getLLResults();
    getSAResults();
    getBLResults();
});

async function getPLResults(){
    const resultadosPL = document.getElementById('resultadosPL');
    try{
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4328&r=22&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');
            resultDiv.innerText = event.strHomeTeam + " "+event.intHomeScore+" : "+event.intAwayScore+"  "+event.strAwayTeam;
            console.log(resultDiv);
            resultadosPL.appendChild(resultDiv);
        });
    }catch(err){
        console.error('Error:', err);
    }
}
async function getLLResults(){
    const resultadosPL = document.getElementById('resultadosLL');
    try{
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4335&r=20&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');
            resultDiv.innerText = event.strHomeTeam + " "+event.intHomeScore+" : "+event.intAwayScore+"  "+event.strAwayTeam;
            console.log(resultDiv);
            resultadosPL.appendChild(resultDiv);
        });
    }catch(err){
        console.error('Error:', err);
    }
}
async function getSAResults(){
    const resultadosPL = document.getElementById('resultadosSA');
    try{
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4332&r=21&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');
            resultDiv.innerText = event.strHomeTeam + " "+event.intHomeScore+" : "+event.intAwayScore+"  "+event.strAwayTeam;
            console.log(resultDiv);
            resultadosPL.appendChild(resultDiv);
        });
    }catch(err){
        console.error('Error:', err);
    }
}
async function getBLResults(){
    const resultadosPL = document.getElementById('resultadosBL');
    try{
        const response = await fetch('https://www.thesportsdb.com/api/v1/json/3/eventsround.php?id=4331&r=18&s=2024-2025');
        const data = await response.json();
        console.log(data);
        data.events.forEach(event => {
            let resultDiv = document.createElement('div');
            resultDiv.classList.add('tarjetaResultado');
            resultDiv.innerText = event.strHomeTeam + " "+event.intHomeScore+" : "+event.intAwayScore+"  "+event.strAwayTeam;
            console.log(resultDiv);
            resultadosPL.appendChild(resultDiv);
        });
    }catch(err){
        console.error('Error:', err);
    }
}