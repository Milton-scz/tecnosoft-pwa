<?php
// Captura la respuesta del reCAPTCHA
$recaptcha_response = $_POST['g-recaptcha-response'];

// Haces una solicitud POST a Google para verificar
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Ld_8f8pAAAAAABvpWXnYbj6SDQ8P0cZn8xGbDYu',
    'response' => $recaptcha_response
);

$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);

if ($captcha_success->success) {
    // Si el reCAPTCHA se completó correctamente, procesa el formulario
    // Aquí puedes enviar el correo, guardar en la base de datos, etc.
    echo 'Formulario enviado correctamente.';
} else {
    // Si el reCAPTCHA no se completó correctamente, muestra un mensaje de error
    echo 'Por favor, completa el reCAPTCHA.';
}
?>
