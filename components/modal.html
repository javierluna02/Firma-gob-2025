<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS/modal.css">
    <link rel="stylesheet" href="/CSS/responsive-base.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   </head>
   

<body class="tbody">
        

    <article id="" class="contenedor-modal">
           
       
                <section  class="section-1">
  
 
            <div>
                <h1>Solicitud de servicio</h1>
                <span>> Ambiente de prueba</span>
            </div>
            <div class="header-buttons">
                <button class="btn-regresar"><img src="/img/icons8-flecha-responder-100 1.svg" alt="">REGRESAR</button>
                <button class="btn-cerrar" id="closeModal">×</button>
            </div>
        </section>
        
        <div class="campos">
            <span>*Todos los campos marcados son obligatorios</span>
        </div>
        <section class="section2">
            <article class="cont1-input">
                <div class="div-input1">
                    <h3>Nombre:</h3>
                    <input placeholder="Nombre Completo" type="text">
                </div>
                <div class="div-input2">
                    <h3>Institución</h3>
                    <input placeholder="Institución" type="text">
                </div>
            </article>

            <article class="cont2-input">
                <div  class="div-input1">
                    <h3>Dirección de correo electrónico:</h3>
                    <input placeholder="Correo Electrónico" type="text">
                </div>
                <div class="div-input2">
                    <h3>Número de teléfono:</h3>
                    <input placeholder="Número de teléfono" type="text">
                </div>

            </article>

        </section>
        <section class="cont3-input">
            <h3>Mensaje:</h3>
            <input placeholder="Asunto" type="text">
        </section>
        <section class="cont3-input">
            <h3>Carta de solicitud:</h3>
            <div class="subir-archivo" id="fileUpload">
                <img src="/img/icons8-descargar-52 1.svg" alt="">
                <p>Arrastra o busca en tu ordenador</p>
                <input type="file" id="fileInput" accept=".pdf,.docx" style="display: none;">
                <div id="fileInfo" style="display: none;">
                    <p id="fileName"></p>
                    <button type="button" id="removeFile" style="background: #ff4444; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Eliminar</button>
                </div>
            </div>
        </section>
        <div class="div-text">
            <span>Formatos permitidos: PDF, DOCX</span>
        </div>
        <div class="div-text2">
            <span>Tus datos personales se utilizarán para procesar la solicitud y apoyar tu experiencia en este sitio
                web como indica nuestra Política de Privacidad </span>
        </div>
        <div class="div-text3">
          <span class="deseas-recibir">¿Deseas recibir información sobre las promociones de Firma GOB?</span>
          <div class="check">
            <input class="checkbox" type="checkbox">
            <span>Marca esta casilla para dar tu consentimiento al tratamiento de datos personales con fines de marketing/ventas directas como indica nuestra Política de Privacidad</span>
          </div>
        </div>

        <div class="footer-modal">
            <button type="submit" id="submitBtn">Enviar</button>
        </div>
    </article>

    <script>
        // Funcionalidad de cerrar modal
        const closeModal = document.getElementById('closeModal');
        const modalContainer = document.querySelector('.tbody');
        const modalContent = document.querySelector('.contenedor-modal');

        // Cerrar modal con el botón X
        closeModal.addEventListener('click', () => {
            cerrarModal();
        });

        // Cerrar modal al hacer clic fuera del contenido
        modalContainer.addEventListener('click', (e) => {
            if (e.target === modalContainer) {
                cerrarModal();
            }
        });

        // Cerrar modal con la tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                cerrarModal();
            }
        });

        function cerrarModal() {
            // Agregar animación de salida
            modalContent.style.transform = 'scale(0.8)';
            modalContent.style.opacity = '0';
            modalContainer.style.backgroundColor = 'rgba(0, 0, 0, 0)';
            
            setTimeout(() => {
                // Ocultar el modal
                modalContainer.style.display = 'none';
                // Resetear estilos
                modalContent.style.transform = 'scale(0.9)';
                modalContent.style.opacity = '1';
                modalContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            }, 300);
        }

        // Funcionalidad de arrastrar y soltar archivos
        const fileUpload = document.getElementById('fileUpload');
        const fileInput = document.getElementById('fileInput');
        const fileInfo = document.getElementById('fileInfo');
        const fileName = document.getElementById('fileName');
        const removeFile = document.getElementById('removeFile');
        const submitBtn = document.getElementById('submitBtn');

        // Hacer clic en el área de subida
        fileUpload.addEventListener('click', () => {
            fileInput.click();
        });

        // Seleccionar archivo
        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                handleFile(file);
            }
        });

        // Arrastrar y soltar
        fileUpload.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUpload.classList.add('dragover');
        });

        fileUpload.addEventListener('dragleave', (e) => {
            e.preventDefault();
            fileUpload.classList.remove('dragover');
        });

        fileUpload.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUpload.classList.remove('dragover');
            const file = e.dataTransfer.files[0];
            if (file) {
                handleFile(file);
            }
        });

        // Manejar archivo seleccionado
        function handleFile(file) {
            // Verificar tipo de archivo
            const allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            if (!allowedTypes.includes(file.type)) {
                alert('Solo se permiten archivos PDF y DOCX');
                return;
            }

            // Verificar tamaño (máximo 10MB)
            if (file.size > 10 * 1024 * 1024) {
                alert('El archivo es demasiado grande. Máximo 10MB');
                return;
            }

            fileName.textContent = file.name;
            fileInfo.style.display = 'block';
            fileUpload.querySelector('p').style.display = 'none';
            fileUpload.querySelector('img').style.display = 'none';
        }

        // Eliminar archivo
        removeFile.addEventListener('click', () => {
            fileInput.value = '';
            fileInfo.style.display = 'none';
            fileUpload.querySelector('p').style.display = 'block';
            fileUpload.querySelector('img').style.display = 'block';
        });

        // Validación del formulario
        submitBtn.addEventListener('click', (e) => {
            e.preventDefault();
            
            const inputs = document.querySelectorAll('input[type="text"], input[type="email"]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = '#ff4444';
                    isValid = false;
                } else {
                    input.style.borderColor = '#EBEBEB';
                }
            });

            if (!isValid) {
                alert('Por favor, completa todos los campos obligatorios');
                return;
            }

            // Simular envío
            submitBtn.textContent = 'Enviando...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Solicitud enviada exitosamente');
                submitBtn.textContent = 'Enviar';
                submitBtn.disabled = false;
            }, 2000);
        });

        // Mejorar experiencia de usuario con validación en tiempo real
        document.querySelectorAll('input[type="text"], input[type="email"]').forEach(input => {
            input.addEventListener('blur', () => {
                if (!input.value.trim()) {
                    input.style.borderColor = '#ff4444';
                } else {
                    input.style.borderColor = '#EBEBEB';
                }
            });

            input.addEventListener('input', () => {
                if (input.value.trim()) {
                    input.style.borderColor = '#EBEBEB';
                }
            });
        });
    </script>

</body>

</html>