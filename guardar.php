<?php
if(isset($_POST['registrar'])) {
    $email = $_POST['email'];

    // Generar un ID único para cada registro
    $id = uniqid();

    // Abrir el archivo para escritura (agregando al final del archivo)
    $archivo = fopen('contenido.txt', 'a');

    // Escribir el contenido en una nueva línea del archivo
    fwrite($archivo, "$id\t$email\n");

    // Cerrar el archivo
    fclose($archivo);

    // Redireccionar de vuelta al formulario después de guardar
    header("Location: index.php");
    exit();
}
?>
