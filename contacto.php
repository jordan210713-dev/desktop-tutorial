
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contacto - Mundo de los Peces</title>

    <!-- Conexión con CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Íconos Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <!-- Encabezado principal -->
    // HEADER PHP
       <?php include 'header.php';?>

    <!-- Contenido principal -->
    <main>

        <!-- Formulario de contacto -->
        <form action="enviar.php"
              method="post"
              class="formulario">

            <h1>
                <i class="fa-solid fa-envelope"></i>
                Contáctanos
            </h1>

            <p>
                ¿Tienes dudas sobre el cuidado de tus peces
                o la compatibilidad entre especies?
                Envíanos tu consulta.
            </p>

            <!-- Nombre -->
            <label for="nombre">Nombre:</label>

            <input type="text"
                   id="nombre"
                   name="nombre"
                   required>

            <!-- Correo -->
            <label for="correo">Email:</label>

            <input type="email"
                   id="correo"
                   name="correo"
                   required>

            <!-- Mensaje -->
            <label for="mensaje">Mensaje:</label>

            <textarea id="mensaje"
                      name="mensaje"
                      rows="5"
                      required></textarea>

            <!-- Botón enviar -->
            <button type="submit">
                <i class="fa-solid fa-paper-plane"></i>
                Enviar
            </button>

        </form>

    </main>

    <!-- fooster php -->
<?php include 'footer.php';?>

    <!-- Conexión con JavaScript -->
    <script src="js/main.js" defer></script>

</body>
</html>
