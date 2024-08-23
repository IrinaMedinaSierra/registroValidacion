function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Validar que los campos no estén vacíos
    if (username.trim() === "" || password.trim() === "") {
        alert("Por favor, rellene todos los campos.");
        return false;
    }

    // Ejemplo de validación adicional: longitud mínima de la contraseña
    if (password.length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        return false;
    }

    // Si todas las validaciones pasan, se puede enviar el formulario
    return true;
}
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()