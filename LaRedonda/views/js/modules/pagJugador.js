export function pagJugador(){
    const favoritosButton = document.getElementById('favoritos');
    favoritosButton.addEventListener('click', () => {
        let heartIcon = document.getElementById("heartIcon"); // Obtiene el ícono dentro del botón
        let idUser = favoritosButton.dataset.userId; // ID del usuario (extraído del atributo data)
        let idPlayer = favoritosButton.dataset.playerId
        let namePlayer = favoritosButton.dataset.playerName
        let imgPlayer = favoritosButton.dataset.playerImg
        if (heartIcon.classList.contains("bi-heart-fill")) {
            // Si está relleno, lo vaciamos y eliminamos el favorito
            heartIcon.classList.remove("bi-heart-fill");
            heartIcon.classList.add("bi-heart");

            fetch("controllers/Core/borrar_favorito.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id_user=${idUser}&id_favourite=${idPlayer}`
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
                body: `id_user=${idUser}&id_favourite=${idPlayer}&nombre_favorito=${namePlayer}&tipo_favorito=jugador&img_favorito=${imgPlayer}`
            })
                .then(response => response.json())
                .then(data => console.log(data.message))
                .catch(error => console.error("Error:", error));
        }
    })
}

