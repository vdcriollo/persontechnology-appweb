document.addEventListener("DOMContentLoaded", function () {
    const nuevoMensajeBtn = document.getElementById("nuevo-mensaje-btn");
    const formulario = document.getElementById("formulario-contacto");
    const mensajeExito = document.getElementById("mensaje-exito");
    const form = document.getElementById("form-contacto");

    function mostrarFormulario() {
        if (mensajeExito) mensajeExito.style.display = "none";
        if (formulario) {
            formulario.style.display = "block";
            formulario.scrollIntoView({ behavior: "smooth" });
        }
    }

    // Botón "Enviar otro mensaje"
    if (nuevoMensajeBtn) {
        nuevoMensajeBtn.addEventListener("click", function () {
            mostrarFormulario();
        });
    }

    // Evento de cierre del alert de éxito
    if (mensajeExito) {
        const bsAlert = bootstrap.Alert.getOrCreateInstance(mensajeExito);
        mensajeExito.addEventListener("closed.bs.alert", function () {
            mostrarFormulario();
        });
    }

    // Prevenir doble envío del formulario
    if (form) {
        form.addEventListener("submit", function () {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    Enviando...
                    <i class="ri-loader-4-line ri-spin ms-2"></i>
                `;
            }
        });
    }
});
