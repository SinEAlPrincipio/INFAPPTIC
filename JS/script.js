document.addEventListener('DOMContentLoaded', function () {
    const encuestaForm = document.getElementById('encuestaForm');

    encuestaForm.addEventListener('submit', function (event) {
        event.preventDefault();
        // Puedes agregar lógica adicional aquí antes de enviar el formulario
        this.submit();
    });
});