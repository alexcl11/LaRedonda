export function initAdminUserValidation() {
    const nameInput = document.getElementById("nombreUsuario");
    const emailInput = document.getElementById("emailUsuario");
    const passwordInput = document.getElementById("contraseñaUsuario");
    const submitBtn = document.querySelector('button[type="submit"].btn-danger');

    const nameCheck = document.getElementById("admin-name-check");
    const emailCheck = document.getElementById("admin-email-check");
    const passwordCheck = document.getElementById("admin-password-check");
    const emailHelp = document.getElementById("admin-emailHelp");
    const passwordHelp = document.getElementById("admin-passwordHelp");

    let validName = false;
    let validEmail = false;
    let validPassword = false;

    nameInput.addEventListener("input", () => {
        validName = nameInput.value.length > 1;
        nameCheck.classList.toggle("d-none", !validName);
        validateForm();
    });

    emailInput.addEventListener("input", () => {
        validEmail = isValidEmail(emailInput.value);
        emailCheck.classList.toggle("d-none", !validEmail);
        emailHelp.classList.toggle("d-none", validEmail);
        validateForm();
    });

    passwordInput.addEventListener("input", () => {
        validPassword = isValidPassword(passwordInput.value);
        passwordCheck.classList.toggle("d-none", !validPassword);
        passwordHelp.classList.toggle("d-none", validPassword);
        validateForm();
    });

    function validateForm() {
        submitBtn.disabled = !(validName && validEmail && validPassword);
    }

    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    function isValidPassword(password) {
        const regex = /^(?=.{9,})(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).*$/;
        return regex.test(password);
    }
}