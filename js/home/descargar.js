    function generarYDescargarPdf() {
      // 1. Obtener el elemento HTML que deseas convertir
      const elementoHtml = document.getElementById(''); // Reemplaza con el ID de tu elemento
      
      html2canvas(elementoHtml).then(canvas => {
        const imgData = canvas.toDataURL('image/png');
        const pdf = new jsPDF();
        
        // lo decarga en formato correcto
        pdf.addImage(imgData, 'PNG', 0, 0);
        pdf.save('MiDocumentoGenerado.pdf');
      });
    }