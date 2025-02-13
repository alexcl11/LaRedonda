
export function cambiarEmail() {
    const cambiarEmail = document.getElementById('cambiarEmail');
    const formEmail = document.getElementById('formEmail');
    const existEmail = document.getElementById('existEmail');
    const incorrectEmail = document.getElementById('incorrectEmail');

    cambiarEmail.addEventListener('click', () => {
        if (formEmail.classList.contains('d-none')) {
            formEmail.classList.remove('d-none');
            formEmail.classList.add('d-flex');
            existEmail.classList.remove('d-none');
            existEmail.classList.add('d-flex');
            incorrectEmail.classList.remove('d-none');
            incorrectEmail.classList.add('d-flex');
        } else {
            formEmail.classList.add('d-none');
            formEmail.classList.remove('d-flex');
            existEmail.classList.add('d-none');
            existEmail.classList.remove('d-flex');
            incorrectEmail.classList.add('d-none');
            incorrectEmail.classList.remove('d-flex');
        }

    });
}

export function cambiarNombre (){
    const cambiarNombre = document.getElementById('cambiarNombre');
    const formNombre = document.getElementById('formNombre');

    cambiarNombre.addEventListener('click', ()=>{
        if(formNombre.classList.contains('d-none')){
            formNombre.classList.remove('d-none');
            formNombre.classList.add('d-flex');
        } else {
            formNombre.classList.add('d-none');
            formNombre.classList.remove('d-flex');
        }
    })
}