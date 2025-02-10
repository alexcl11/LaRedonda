export async function ligasPais(nomPais){
    const url = "https://www.thesportsdb.com/api/v1/json/3/search_all_leagues.php?c="+nomPais+"&s=Soccer";
    console.log(url)
    const response = await fetch(url);
    const data = await response.json();
    console.log(data)
}