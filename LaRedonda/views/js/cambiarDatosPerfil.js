export function cambiarEmail() {
    const cambiarEmail = document.getElementById('cambiarEmail');
    const formEmail = document.getElementById('formEmail');


    cambiarEmail.addEventListener('click', () => {
        if (formEmail.classList.contains('d-none')) {
            formEmail.classList.remove('d-none');
            formEmail.classList.add('d-flex');
        } else {
            formEmail.classList.add('d-none');
            formEmail.classList.remove('d-flex');
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