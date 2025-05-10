export function deleteButton(){
   
        const deleteButton = document.querySelectorAll('#delete-button');      
        deleteButton.forEach(boton => {
          boton.addEventListener('click', () => {
            const email = boton.getAttribute('data-user-email');
      
            if (confirm(`¿Estás seguro de que quieres eliminar al usuario con email: ${email}?`)) {
              fetch('controllers/Core/eliminar_usuario.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `email=${encodeURIComponent(email)}`
              })
              .then(response => response.text())
              .then(data => {
                location.reload();
              })
              .catch(error => {
                console.error('Error al eliminar el usuario:', error);
              });
            }
          });
        });
  
}

export function modifyButton(){
  const modifyButtons = document.querySelectorAll('#modify-button');
  modifyButtons.forEach(boton => {
    boton.addEventListener('click', () => {
      const userId = boton.getAttribute('data-id-user');
      const modifyRow = document.getElementById('modify-button-' + userId);
      
      modifyRow.classList.toggle('d-none'); 
    });
  });

  
}