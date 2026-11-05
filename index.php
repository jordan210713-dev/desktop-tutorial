
<!DOCTYPE html>
<html lang="es">

<head>

    <!-- ==========================================
         1. CONFIGURACIÓN GENERAL
         ========================================== -->

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Mundo de los Peces</title>


    <!-- ==========================================
         2. CONEXIÓN CON CSS
         ========================================== -->

    <link rel="stylesheet" href="css/style.css">


    <!-- ==========================================
         3. ÍCONOS FONT AWESOME
         ========================================== -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
  <!-- header php -->
       <?php include 'header.php';?>

    <main>


        <!-- ======================================
             9. PRIMERA SECCIÓN: HISTORIA
             ====================================== -->

        <section class="historia">

            <h1>Bienvenidos a Mundo de los Peces</h1>

            <p>
                Mundo de los Peces nace con la idea de
                compartir información sobre el fascinante
                mundo de los acuarios y las diferentes
                especies de peces.

                Nuestro objetivo es ayudar a las personas
                a conocer sus cuidados, alimentación,
                compatibilidad y las condiciones necesarias
                para mantener un acuario saludable.
            </p>

        </section>


        <!-- ======================================
             10. SEGUNDA SECCIÓN: ESPECIES
             ====================================== -->

        <section class="equipo">

            <h2>Conoce nuestras especies</h2>

            <p>
                En Mundo de los Peces encontrarás
                información sobre peces orientales
                como los Goldfish y Koi, además de
                diferentes especies tropicales.

                También aprenderás sobre sus
                características, necesidades y
                compatibilidad con otros peces.
            </p>

        </section>


        <!-- ======================================
             11. TERCERA SECCIÓN: SERVICIOS
             ====================================== -->

        <section class="servicios">

            <h2>Nuestros servicios</h2>

            <p>
                En Mundo de los Peces ofrecemos información
                y orientación para el cuidado adecuado
                de los peces y acuarios.
            </p>

            <ul>
                <li>Cuidados y alimentación de peces</li>
                <li>Compatibilidad entre especies</li>
                <li>Mantenimiento de acuarios</li>
            </ul>

        </section>


        <!-- ======================================
             12. CUARTA SECCIÓN: CARDS DE PECES
             GENERADAS DESDE JAVASCRIPT
             ====================================== -->

        <section class="seccion-cards contenedor">

            <h2>Conoce nuestros peces</h2>

            <p>
                Descubre algunas de las especies más
                populares del mundo de los acuarios.
            </p>

            <!-- CONTENEDOR FLEXBOX -->

            <div class="contenedor-cards"
                 id="contenedor-cards">

                <!--
                    Las seis tarjetas se generan
                    automáticamente desde js/main.js
                    utilizando un arreglo de objetos.
                -->

            </div>

        </section>


        <!-- ======================================
             13. QUINTA SECCIÓN: GALERÍA
             ====================================== -->

        
<!-- ==========================================
     13. QUINTA SECCIÓN: GALERÍA
     ========================================== -->

<section class="galeria">

    <h2>Galería de Mundo de los Peces</h2>

    <p>
        Conoce algunas de las especies de peces
        ornamentales y descubre la belleza del
        mundo de los acuarios.
    </p>

</section>



        <!-- ==========================================
             14. SEXTA SECCIÓN: CARRUSEL DE IMÁGENES
             ESTILO UTILIZADO POR LA PROFESORA
             ========================================== -->

        <section class="seccion-carrusel"
                 aria-label="Carrusel de peces">

            <div class="carrusel">

                <!-- IMAGEN 1 -->

                <img class="slide activa"
                     src="img/historia2.jpg"
                     alt="Pez Arowana">


                <!-- IMAGEN 2 -->

                <img class="slide"
                     src="img/historia3.jpg"
                     alt="Peces Disco">


                <!-- IMAGEN 3 -->

                <img class="slide"
                     src="img/historia1.jpg"
                     alt="Goldfish ornamental">


                <!-- BOTÓN ANTERIOR -->

                <button id="anterior"
                        type="button">

                    Anterior

                </button>


                <!-- BOTÓN SIGUIENTE -->

                <button id="siguiente"
                        type="button">

                    Siguiente

                </button>

            </div>

        </section>


        <!-- ======================================
             15. SÉPTIMA SECCIÓN: PREGUNTAS FRECUENTES
             ACCORDION - PROYECTO 2
             ====================================== -->

        <section class="seccion-accordion contenedor">

            <h2>Preguntas frecuentes</h2>

            <p>
                Encuentra respuestas a algunas de las
                preguntas más comunes sobre el cuidado
                de los peces y acuarios.
            </p>

            <!-- CONTENEDOR PRINCIPAL DEL ACCORDION -->

            <div class="accordion" id="accordion">


                <!-- PREGUNTA 1 -->

                <div class="item">

                    <button class="titulo"
                            type="button"
                            aria-expanded="false">

                        ¿Cada cuánto debo alimentar a mis peces?

                        <span aria-hidden="true">+</span>

                    </button>

                    <div class="contenido">

                        <p>
                            La frecuencia depende de la especie
                            y su edad. Muchos peces adultos
                            pueden alimentarse una o dos veces
                            al día, utilizando porciones adecuadas.
                        </p>

                    </div>

                </div>


                <!-- PREGUNTA 2 -->

                <div class="item">

                    <button class="titulo"
                            type="button"
                            aria-expanded="false">

                        ¿Cada cuánto debo cambiar el agua del acuario?

                        <span aria-hidden="true">+</span>

                    </button>

                    <div class="contenido">

                        <p>
                            En muchos acuarios se realizan cambios
                            parciales de agua semanalmente.
                            La cantidad depende de la población,
                            la filtración y la calidad del agua.
                        </p>

                    </div>

                </div>


                <!-- PREGUNTA 3 -->

                <div class="item">

                    <button class="titulo"
                            type="button"
                            aria-expanded="false">

                        ¿Puedo mezclar diferentes especies de peces?

                        <span aria-hidden="true">+</span>

                    </button>

                    <div class="contenido">

                        <p>
                            Sí, siempre que las especies sean
                            compatibles en comportamiento,
                            temperatura, tamaño y necesidades
                            de agua.
                        </p>

                    </div>

                </div>


                <!-- PREGUNTA 4 -->

                <div class="item">

                    <button class="titulo"
                            type="button"
                            aria-expanded="false">

                        ¿Por qué es importante tener un filtro?

                        <span aria-hidden="true">+</span>

                    </button>

                    <div class="contenido">

                        <p>
                            El filtro ayuda a retirar partículas
                            del agua y permite alojar bacterias
                            beneficiosas que procesan sustancias
                            tóxicas producidas en el acuario.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>



        </section>

        <!-- ======================================
             16. OCTAVA SECCIÓN: CONTACTO
             ====================================== -->

        <section class="contacto contenedor">

            <h2>
                <i class="fa-solid fa-envelope"></i>
                ¿Tienes alguna consulta?
            </h2>

            <p>
                Si deseas compartir alguna pregunta
                sobre acuarios, especies o alimentación,
                puedes visitar nuestra sección de contacto.
            </p>

           <a href="contacto.php">Ir a Contacto</a>
            
        </section>

    </main>

    <!-- FOOTER PHP -->
    <?php include 'footer.php'; ?>
    <script src="js/main.js" defer></script>

</body>
</html>
