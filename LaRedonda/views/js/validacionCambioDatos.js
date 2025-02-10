export function validarEmail(){
    const email = document.getElementById("newEmail");
    const submitCambiarEmail = document.getElementById("submitCambiarEmail");
    const incorrectEmail = document.getElementById("incorrectEmail");
    
    let isvalidEmail = false;

    email.addEventListener("input", ()=>{
        if(!isValidEmail(email.value)){
            isvalidEmail = false;
        }else{
            isvalidEmail = true;
        }
        validateChangeEmail();
    });
    function validateChangeEmail() {
        if (isvalidEmail) {
            submitCambiarEmail.disabled = false;
            incorrectEmail.classList.add('d-none');
        } else {
            submitCambiarEmail.disabled = true;
            incorrectEmail.classList.remove('d-none');
        }
    }
    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
}
