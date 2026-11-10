
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
       6. VERIFICAR LAS VALIDACIONES
       ====================================== */

    if (count($errores) === 0) {

        // Todos los datos son correctos
        // Redirigir a la página de agradecimiento

        header("Location: gracias.php");

        exit;

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
