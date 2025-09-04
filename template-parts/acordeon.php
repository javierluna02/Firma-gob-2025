<div class="accordion">
  <div class="accordion-item">
    <button class="accordion-header">
      <span>¿Si tengo varias peticiones en la bandeja de entrada puedo firmarlas todas a la vez?</span>
      <span class="arrow">▼</span>
    </button>
    <div class="accordion-content">
      <p>
        Sí, puedes seleccionarlas todas desde tu bandeja de entrada y firmarlas al mismo tiempo
        sin necesidad de hacerlo una por una.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-header">
      <span>¿Puedo firmar con Firma GOB desde el móvil?</span>
      <span class="arrow">▼</span>
    </button>
    <div class="accordion-content">
      <p>
        FIRMA GOB dispone de una interfaz adaptada 100% a dispositivos móviles, permitiendo la ejecución 
        de las tareas íntegramente en el móvil. Además, dispone de aplicaciones nativas gratuitas 
        publicadas en la Apple Store y Play Store.
      </p>
    </div>
  </div>
</div>
<style>
    .accordion {
  border: 1px solid #ddd;
  border-radius: 6px;
  overflow: hidden;
}

.accordion-item {
  border-bottom: 1px solid #ddd;
}

.accordion-header {
  width: 100%;
  padding: 15px;
  background: #0055a4; /* azul */
  color: #fff;
  font-weight: bold;
  text-align: left;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

.accordion-header .arrow {
  transition: transform 0.3s ease;
}

.accordion-header.active .arrow {
  transform: rotate(180deg); /* flecha hacia arriba */
}

.accordion-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease, padding 0.3s ease;
  background: #f9f9f9;
  padding: 0 15px;
}

.accordion-content.open {
  padding: 15px;
  max-height: 300px; /* ajusta según el contenido */
}

</style>

<script>
    document.querySelectorAll(".accordion-header").forEach(button => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;
    const isActive = button.classList.contains("active");

    // Cerrar todos
    document.querySelectorAll(".accordion-header").forEach(btn => {
      btn.classList.remove("active");
      btn.nextElementSibling.classList.remove("open");
    });

    // Si no estaba activo, abrir este
    if (!isActive) {
      button.classList.add("active");
      content.classList.add("open");
    }
  });
});

</script>