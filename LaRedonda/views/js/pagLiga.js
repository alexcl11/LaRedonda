
export async function getLeague(){
    const response = await fetch('https://www.thesportsdb.com/api/v1/json/3//lookuptable.php?l=4328&s=2024-2025');
    const data = await response.json();
    console.log(data);
}