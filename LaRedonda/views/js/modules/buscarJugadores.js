export async function searchPlayer(name, lastname){
    url = `https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=${name}_${lastname}`;
    const response = await fetch(url);
    const data = await response.json();

    console.log(data);
}