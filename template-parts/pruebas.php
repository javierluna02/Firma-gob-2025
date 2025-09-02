<!-- Modal principal con formulario -->
<div id="modal-form" class="modal">
  <div class="modal-content">
    <h2>Formulario</h2>
    <form id="formulario">
      <input type="text" name="nombre" placeholder="Tu nombre" required>
      <input type="email" name="correo" placeholder="Tu correo" required>
      <button type="submit">Enviar</button>
    </form>
  </div>
</div>

<!-- Modal de confirmación -->
<div id="modal-confirmacion" class="modal">
  <div class="modal-content">
    <h2>✅ Enviado con éxito</h2>
    <p>Tu información fue registrada correctamente.</p>
    <button id="cerrar-confirmacion">Cerrar</button>
  </div>
</div>

<style>
.modal {
  display: none; /* oculto por defecto */
  position: fixed;
  z-index: 999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
}
.modal-content {
  background: white;
  padding: 2rem;
  border-radius: 1rem;
  max-width: 400px;
  text-align: center;
}
</style>

<script>
const form = document.getElementById("formulario");
const modalConfirm = document.getElementById("modal-confirmacion");
const btnCerrar = document.getElementById("cerrar-confirmacion");

form.addEventListener("submit", (e) => {
  e.preventDefault(); // evita recargar página
  // aquí podrías mandar los datos por fetch() si quieres
  modalConfirm.style.display = "flex"; // abre modal confirmación
});

// cerrar modal confirmación
btnCerrar.addEventListener("click", () => {
  modalConfirm.style.display = "none";
});
</script>
