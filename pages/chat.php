<?php
// Template Name: chat
?>

<div style="width:320px; margin:20px auto; padding:20px; border-radius:12px; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); font-family:'Poppins', sans-serif; ">
  
  <p style="font-size:12px; text-align:center; color:#0080ff; margin-bottom:10px;">
    SIEMPRE ESTAMOS AL PENDIENTE DE TI, CUÉNTANOS TUS DUDAS
  </p>
  
  <h3 style="font-size:18px; font-weight:600; gap:5px; justify-content: center; display:flex; align-items: center; text-align: center; color: #0066CC; margin-bottom:20px;">
            <img class="chico" src="<?= get_template_directory_uri(); ?>/img/icons8-chat-50 1.svg" alt="">
 Chatea con nosotros
  </h3>

  <form action="procesar_chat.php" method="POST">
    <input type="email" name="email" placeholder="Dirección de correo electrónico" required
      style="width:100%;   border:1px solid  #0066CC; border-radius:8px; padding:10px; font-size:14px; margin-bottom:15px; outline:none;">
    <style>
      input::placeholder{
        color: #6C9FE3 ;
      }
    </style>
    <label style="margin:10px; margin-bottom:40px; font-weight:600; color: #0066CC ; " for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required
      style="width:100%; margin-top:20px; border:1px solid  #0066CC; border-radius:8px; padding:10px; font-size:14px; margin-bottom:15px; outline:none; height:100px; resize:none;"></textarea>
     <style>
      textarea::placeholder{
        color: #6C9FE3 ;
      }
     </style>
     <div style="display: flex; justify-content: center; align-items: center;">
       <button type="submit"
      style="background:#0056d2; color:#fff; font-size:14px; font-weight:bold; padding:12px; border:none; border-radius:8px; cursor:pointer; transition:background .3s ease;">
      ENVIAR CHAT
    </button>
     </div>
   
  </form>
</div>


<?php
// procesar_chat.php

// --- CONFIGURACIÓN: revisa/edita estos valores ---
/** @var array $recipients Lista de correos que recibirán el formulario */
$recipients = [
    'nelsonjavierhernandez016@gmail.com',    // <-- reemplaza por el correo principal
    //'otro@midominio.com'       // <-- (opcional) otro destinatario en copia
];

$log_file = __DIR__ . '/chat_form_log.txt'; // archivo de log (opcional)
// ------------------------------------------------

// Comprueba que venga una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "";
    exit;
}

// Obtiene y sanea los campos
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

// Validaciones básicas
$errors = [];

if (empty($email)) {
    $errors[] = "El campo email es obligatorio.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "El email no tiene un formato válido.";
}

if (empty($mensaje)) {
    $errors[] = "El mensaje no puede estar vacío.";
}

// Si hay errores devuelve JSON (útil para frontend) y sale
if (!empty($errors)) {
    // Si quieres devolver JSON (AJAX), descomenta:
    // header('Content-Type: application/json; charset=utf-8');
    // echo json_encode(['success' => false, 'errors' => $errors]);
    // exit;

    // Respuesta simple:
    echo "<h3>Errores:</h3><ul>";
    foreach ($errors as $e) echo "<li>" . htmlspecialchars($e) . "</li>";
    echo "</ul>";
    exit;
}

// Construye el asunto y cuerpo
$subject = "Nuevo chat desde web - " . date('Y-m-d H:i:s');
$body = "Has recibido un nuevo mensaje desde el formulario de chat.\n\n";
$body .= "Email del remitente: " . $email . "\n\n";
$body .= "Mensaje:\n" . $mensaje . "\n\n";
$body .= "IP (cliente): " . ($_SERVER['REMOTE_ADDR'] ?? 'N/D') . "\n";
$body .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'N/D') . "\n";

// Cabeceras
$from_name = "Formulario Chat";
$from_email = "no-reply@midominio.com"; // Cambia si tienes un dominio válido
$headers  = "From: " . $from_name . " <" . $from_email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n"; // Responder al email del usuario
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envía a cada destinatario y recoge resultados
$results = [];
foreach ($recipients as $rcpt) {
    // usa mail() nativo de PHP (nota: en servidores compartidos puede requerir configuración)
    $sent = mail($rcpt, $subject, $body, $headers);
    $results[$rcpt] = $sent ? 'sent' : 'failed';
}

// Guarda un log simple con resultado
$log_entry = date('Y-m-d H:i:s') . " | from: {$email} | recipients: " . implode(',', $recipients) . " | results: " . json_encode($results) . " | message-length: " . strlen($mensaje) . " | ip: " . ($_SERVER['REMOTE_ADDR'] ?? '') . PHP_EOL;
file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// RESPUESTA: mostramos a quién se ha enviado (según tu pedido)
echo "<h3>Formulario enviado</h3>";
echo "<p>El formulario fue enviado a los siguientes destinatarios:</p>";
echo "<ul>";
foreach ($recipients as $rcpt) {
    $status = isset($results[$rcpt]) && $results[$rcpt] === 'sent' ? '✔ enviado' : '✖ fallo';
    echo "<li>" . htmlspecialchars($rcpt) . " — <strong>$status</strong></li>";
}
echo "</ul>";

// Si quieres redirigir al usuario a una página de gracias en vez de mostrar esto:
// header('Location: gracias.html'); exit;
?>
