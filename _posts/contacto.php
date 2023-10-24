<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    // Realiza alguna acción, como enviar un correo electrónico o guardar los datos en una base de datos.
    // Aquí puedes agregar tu lógica personalizada.
    
    // Redirige a una página de confirmación o gracias.
    header("Location: /gracias.html");
    exit;
}
?>
