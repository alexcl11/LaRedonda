
const NEWS_API_KEY = "98b54ba168b9460ea2303185fedc320d";
// 98b54ba168b9460ea2303185fedc320d  a65fa84a05d84917a83bcc883b3f6060
//https://newsapi.org/v2/everything?q=fútbol&pageSize=12&sortBy=publishedAt&language=es&apiKey=
const urlNews ="https://api.worldnewsapi.com/search-news?text=fútbol&language=es";

export async function newsApi() {
  const noticiasDiv = document.getElementById("contenedorNoticias"); // Selecciona el contenedor dinámico
  try {
    const response = await fetch(urlNews, {
      method: 'GET',
      headers: {
          'x-api-key': NEWS_API_KEY
      }
    });
    const data = await response.json();
    console.log(data);

    // Limpiar el contenedor antes de agregar nuevas noticias
    noticiasDiv.innerHTML = "";

    data.news.forEach((article) => {
      const tarjetaNoticia = document.createElement("div");
      tarjetaNoticia.classList.add("tarjetaNoticia");

      const newImg = document.createElement("img");
      newImg.src = article.image || "img/placeholder.png"; // Fallback si no hay imagen
      newImg.alt = "Imagen de la noticia";

      const title = document.createElement("h4");
      title.innerText = article.title;

      const date = new Date(article.publish_date);
      const fechaPublicacion = document.createElement("p");
      fechaPublicacion.innerText = 'Publicado: '+date.toLocaleDateString();

      const description = document.createElement("p");
      description.innerText = article.summary;

      const urlToNew = document.createElement("a");
      urlToNew.href = article.url;
      urlToNew.textContent = "Leer noticia";
      urlToNew.target = "_blank"; // Abre la noticia en una nueva pestaña

      // Agregar los elementos a la tarjeta
      tarjetaNoticia.appendChild(newImg);
      tarjetaNoticia.appendChild(title);
      tarjetaNoticia.appendChild(fechaPublicacion);
      tarjetaNoticia.appendChild(description);
      tarjetaNoticia.appendChild(urlToNew);

      // Agregar la tarjeta al contenedor de noticias
      noticiasDiv.appendChild(tarjetaNoticia);
    });
  } catch (err) {
    console.error("Error al cargar las noticias:", err);

    // Mensaje de error en caso de que falle la API
    noticiasDiv.innerHTML = `<p>No se pudieron cargar las noticias. Inténtalo de nuevo más tarde.</p>`;
  }
}
