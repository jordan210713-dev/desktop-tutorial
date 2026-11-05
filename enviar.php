
<?php

/* ==========================================
   MUNDO DE LOS PECES
   PROCESAMIENTO DEL FORMULARIO DE CONTACTO
   ========================================== */


/* ==========================================
   1. ARREGLO PARA GUARDAR ERRORES
   ========================================== */

$errores = [];


/* ==========================================
   2. VERIFICAR EL ENVÍO DEL FORMULARIO
   ========================================== */

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Obtener los datos del formulario

    $nombre = trim($_POST["nombre"] ?? "");

    $correo = trim($_POST["correo"] ?? "");

    $mensaje = trim($_POST["mensaje"] ?? "");


    /* ======================================
       3. VALIDAR EL NOMBRE
       ====================================== */

    if ($nombre === "") {

        $errores[] = "El nombre es obligatorio.";

    }


    /* ======================================
       4. VALIDAR EL CORREO ELECTRÓNICO
       ====================================== */

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        $errores[] = "El correo no es válido.";

    }


    /* ======================================
       5. VALIDAR EL MENSAJE
       ====================================== */

    if ($mensaje === "") {

        $errores[] = "El mensaje es obligatorio.";

    }


    /* ======================================
       6. ENVIAR CORREO SI NO HAY ERRORES
       ====================================== */

    if (count($errores) === 0) {

        // Correo destinatario del proyecto
        // Cambiar por una dirección real

        $destinatario = "contacto@ejemplo.com";

        // Asunto del mensaje

        $asunto = "Nuevo mensaje de contacto - Mundo de los Peces";

        // Contenido del mensaje

        $contenido = "Nombre: $nombre\n";
        $contenido .= "Correo: $correo\n";
        $contenido .= "Mensaje: $mensaje\n";

        // Encabezados del correo

        $cabeceras = "From: no-reply@ejemplo.com\r\n";
        $cabeceras .= "Reply-To: $correo\r\n";

        // Enviar correo electrónico

        if (mail(
            $destinatario,
            $asunto,
            $contenido,
            $cabeceras
        )) {

            // Redirigir a la página de agradecimiento

            header("Location: gracias.php");

            exit;

        } else {

            $errores[] = "No se pudo enviar el mensaje. Inténtalo nuevamente.";

        }

    }

} else {

    $errores[] = "Debes enviar el formulario de contacto.";

}

?>


<!-- ==========================================
     7. INCLUIR EL ENCABEZADO
     ========================================== -->

<?php include "header.php"; ?>


<!-- ==========================================
     8. MOSTRAR ERRORES DEL FORMULARIO
     ========================================== -->

<main class="contenedor">

    <h1>Revise el formulario</h1>

    <ul>

        <?php

        foreach ($errores as $error) {

            echo "<li>" . htmlspecialchars($error) . "</li>";

        }

        ?>

    </ul>


    <!-- ======================================
         9. VOLVER AL FORMULARIO
         ====================================== -->

    <a href="contacto.php" class="boton">

        Volver al formulario

    </a>

</main>


<!-- ==========================================
     10. INCLUIR EL PIE DE PÁGINA
     ========================================== -->

<?php include "footer.php"; ?>
