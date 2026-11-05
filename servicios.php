
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Servicios - Mundo de los Peces</title>

    <!-- Conexión con CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Íconos Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    // HEADER PHP
       <?php include 'header.php';?>

    <!-- Contenido principal -->
    <main>

        <!-- Presentación -->
        <section class="historia">

            <h1>Nuestros Servicios</h1>

            <p>
                En Mundo de los Peces compartimos información
                y recomendaciones para ayudar a mantener
                acuarios saludables.

                Aquí encontrarás orientación sobre los cuidados
                básicos y las necesidades de diferentes especies.
            </p>

            <img src="img/servicio1.jpg"
                 alt="Acuario ornamental"
                 class="imagen-seccion">

        </section>

        <!-- Alimentación -->
        <section class="servicios">

            <h2>
                <i class="fa-solid fa-bowl-food"></i>
                Alimentación de peces
            </h2>

            <p>
                Explicamos la importancia de proporcionar
                una alimentación adecuada según la especie.

                Los Goldfish, Koi y peces tropicales pueden
                necesitar alimentos diferentes para mantener
                una buena salud.
            </p>

            <ul>
                <li>Tipos de alimentos para peces ornamentales.</li>
                <li>Frecuencia y cantidad de alimentación.</li>
                <li>Recomendaciones para evitar la sobrealimentación.</li>
            </ul>

            <img src="img/servicio2.jpg"
                 alt="Alimentación de peces"
                 class="imagen-seccion">

        </section>

        <!-- Mantenimiento -->
        <section class="equipo">

            <h2>
                <i class="fa-solid fa-droplet"></i>
                Mantenimiento de acuarios
            </h2>

            <p>
                Un acuario necesita mantenimiento periódico
                para conservar una buena calidad del agua.

                Compartimos consejos sobre cambios parciales
                de agua, limpieza y revisión de los equipos.
            </p>

            <ul>
                <li>Cambios parciales de agua.</li>
                <li>Control de amoníaco, nitritos y nitratos.</li>
                <li>Limpieza y mantenimiento de filtros.</li>
                <li>Revisión de temperatura y oxigenación.</li>
            </ul>

            <img src="img/servicio3.jpg"
                 alt="Mantenimiento de acuarios"
                 class="imagen-seccion">

        </section>

        <!-- Compatibilidad -->
        <section class="servicios">

            <h2>
                <i class="fa-solid fa-fish"></i>
                Compatibilidad entre especies
            </h2>

            <p>
                No todos los peces pueden vivir juntos.
                Algunas especies requieren temperaturas,
                tamaños de acuario y condiciones diferentes.

                Por eso es importante investigar antes
                de incorporar nuevos peces.
            </p>

            <ul>
                <li>Comportamiento de las especies.</li>
                <li>Requerimientos de espacio.</li>
                <li>Compatibilidad de temperatura y parámetros del agua.</li>
                <li>Prevención de conflictos entre peces.</li>
            </ul>

            <img src="img/servicio4.jpg"
                 alt="Peces tropicales comunitarios"
                 class="imagen-seccion">

        </section>

        <!-- Filtración -->
        <section class="equipo">

            <h2>
                <i class="fa-solid fa-filter"></i>
                Filtración y oxigenación
            </h2>

            <p>
                Los sistemas de filtración ayudan a mantener
                el agua en buenas condiciones.

                Explicamos cómo funcionan los filtros mecánicos,
                biológicos y químicos, así como la importancia
                de una buena circulación del agua.
            </p>

            <ul>
                <li>Filtros internos y externos tipo canister.</li>
                <li>Material filtrante biológico y mecánico.</li>
                <li>Oxigenación y movimiento de la superficie.</li>
                <li>Conservación de las bacterias beneficiosas.</li>
            </ul>

            <img src="img/servicio5.jpg"
                 alt="Filtro externo de acuario"
                 class="imagen-seccion">

        </section>

        <!-- Prevención -->
        <section class="servicios">

            <h2>
                <i class="fa-solid fa-shield-heart"></i>
                Prevención de enfermedades
            </h2>

            <p>
                Compartimos información sobre señales que
                pueden indicar problemas de salud en los
                peces, como cambios de comportamiento,
                falta de apetito o alteraciones en las aletas.
            </p>

            <ul>
                <li>Observación diaria de los peces.</li>
                <li>Importancia de la cuarentena.</li>
                <li>Identificación de señales de alerta.</li>
                <li>Prevención mediante buena calidad del agua.</li>
            </ul>

            <img src="img/servicio6.jpg"
                 alt="Goldfish saludable"
                 class="imagen-seccion">

        </section>

        <!-- Contacto -->
        <section class="equipo">

            <h2>
                <i class="fa-solid fa-envelope"></i>
                ¿Tienes alguna consulta?
            </h2>

            <p>
                Si deseas compartir alguna pregunta sobre
                acuarios, especies o alimentación, puedes
                visitar nuestra sección de contacto.
            </p>

            <p>
                <a href="contacto.html">Ir a Contacto</a>
            </p>

            <img src="img/servicio7.jpg"
                 alt="Acuario con peces"
                 class="imagen-seccion">

        </section>

    </main>

    // FOOTER PHP
<?php include 'footer.php';?>
    <!-- JavaScript -->
  <script src="js/main.js" defer></script>
</body>
</html>
