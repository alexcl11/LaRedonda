export function deleteButton() {
  const deleteButtons = document.querySelectorAll('#delete-button');
  let emailToDelete = null;

  deleteButtons.forEach(boton => {
    boton.addEventListener('click', () => {
      emailToDelete = boton.getAttribute('data-user-email');
      document.getElementById('modal-user-email').textContent = emailToDelete;
      // Mostrar el modal (Bootstrap 5)
      const modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
      modal.show();

      // Manejar confirmación
      const confirmBtn = document.getElementById('confirmDeleteBtn');
      // Elimina listeners previos para evitar duplicados
      confirmBtn.replaceWith(confirmBtn.cloneNode(true));
      const newConfirmBtn = document.getElementById('confirmDeleteBtn');
      newConfirmBtn.addEventListener('click', () => {
        fetch('controllers/Core/eliminar_usuario.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: `email=${encodeURIComponent(emailToDelete)}`
        })
        .then(response => response.text())
        .then(data => {
          location.reload();
        })
        .catch(error => {
          console.error('Error al eliminar el usuario:', error);
        });
      });
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