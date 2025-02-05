export function initSignUp() {
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const passwordConfirmInput = document.getElementById("password-confirm");
    const signInButton = document.getElementById("signin");

    const nameCheck = document.getElementById("name-check");
    const emailCheck = document.getElementById("email-check");
    const passwordCheck = document.getElementById("password-check");
    const passwordConfirmCheck = document.getElementById("password-confirm-check");

    let validName = false;
    let validEmail = false;
    let validPassword = false;
    let validPasswordConfirm = false;

    nameInput.addEventListener("input", () => {
        if (nameInput.value.length > 1) {
            validName = true;
            nameCheck.classList.remove("d-none");
        } else {
            validName = false;
            nameCheck.classList.add("d-none");
        }
        validateSignUpForm();
    });


    emailInput.addEventListener("input", () => {
        const emailHelp = document.getElementById("emailHelp");
        if (isValidEmail(emailInput.value)) {
            validEmail = true;
            emailCheck.classList.remove("d-none");
            emailHelp.classList.add("d-none");
        } else {
            validEmail = false;
            emailCheck.classList.add("d-none");
            emailHelp.classList.remove("d-none");
        }
        validateSignUpForm();
    });

    passwordInput.addEventListener("input", () => {
        const passwordHelp = document.getElementById("passwordHelp");        
        if (isValidPassword(passwordInput.value)) {
            validPassword = true;
            passwordCheck.classList.remove("d-none");
            passwordHelp.classList.add("d-none");
            validatePasswordConfirm();
        } else {
            validPassword = false;
            passwordCheck.classList.add("d-none");
            passwordHelp.classList.remove("d-none");
            validatePasswordConfirm();
        }
        validateSignUpForm();
    });

    passwordConfirmInput.addEventListener("input", () => {
        validatePasswordConfirm();
        validateSignUpForm();
    });

    function validateSignUpForm() {
        if (validName && validEmail && validPassword && validPasswordConfirm) {
            signInButton.disabled = false;
        } else {
            signInButton.disabled = true;
        }
    }

    function validatePasswordConfirm() {
        if (validPassword && passwordInput.value === passwordConfirmInput.value) {
            validPasswordConfirm = true;
            passwordConfirmCheck.classList.remove("d-none");
        } else {
            validPasswordConfirm = false;
            passwordConfirmCheck.classList.add("d-none");
        }
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