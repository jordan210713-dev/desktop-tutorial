
<?php
/* ==========================================
   MUNDO DE LOS PECES
   PÁGINA DE PECES TROPICALES
   ========================================== */
$titulo = "Peces Tropicales | Mundo de los Peces";
include 'header.php';
?>

<main>
    <!-- ==========================================
         1. INTRODUCCIÓN
         ========================================== -->
    <section class="historia">
        <h1>Conoce los Peces Tropicales</h1>
        <p>
            Los peces tropicales de agua dulce son conocidos por sus colores,
            formas y comportamientos. Muchas especies provienen de ríos y
            lagunas de regiones cálidas, como la cuenca del Amazonas.
            En esta sección conoceremos dos especies muy populares
            en la acuariofilia: los peces ángel y los peces disco.
        </p>
    </section>

    <!-- ==========================================
         2. PEZ ÁNGEL O ESCALAR
         ========================================== -->
    <section class="equipo">
        <h2><i class="fa-solid fa-fish"></i> Pez Ángel o Escalar</h2>
        <p><strong>Nombre científico:</strong> Pterophyllum scalare.</p>
        <p>
            El pez ángel, también conocido como escalar, es una especie
            de agua dulce originaria de Sudamérica. Se caracteriza por
            su cuerpo comprimido lateralmente, sus aletas largas y su
            forma triangular. Existen diferentes variedades de colores,
            como plateados, negros, blancos, marmoleados y koi.
        </p>

        <img src="img/angel.jpg" alt="Pez ángel o escalar" class="imagen-seccion">

        <!-- ======================================
             2.1 ACORDEÓN DEL PEZ ÁNGEL
             ====================================== -->
        <div class="acordeon-peces">

            <details>
                <summary>Características principales</summary>
                <div class="contenido-pez">
                    <ul>
                        <li>Temperatura recomendada: 25 a 28 °C.</li>
                        <li>pH aproximado: 6.0 a 7.5.</li>
                        <li>Comportamiento generalmente tranquilo.</li>
                        <li>Puede volverse territorial al reproducirse.</li>
                        <li>Necesita un acuario con buena altura.</li>
                        <li>Puede vivir varios años con buenos cuidados.</li>
                    </ul>
                </div>
            </details>

            <details>
                <summary>Alimentación</summary>
                <div class="contenido-pez">
                    <p>
                        Los peces ángel son omnívoros. Pueden consumir alimentos
                        comerciales de buena calidad, artemia, larvas y otros
                        alimentos adecuados para peces tropicales.
                    </p>
                </div>
            </details>

            <details>
                <summary>Reproducción</summary>
                <div class="contenido-pez">
                    <p>
                        Los escalares forman parejas reproductoras y suelen depositar
                        sus huevos sobre superficies verticales, como hojas anchas,
                        troncos o tubos. Ambos padres pueden participar en el
                        cuidado de los huevos y las crías.
                    </p>
                </div>
            </details>

        </div>
    </section>

    <!-- ==========================================
         3. PEZ DISCO
         ========================================== -->
    <section class="servicios">
        <h2><i class="fa-solid fa-fish-fins"></i> Pez Disco</h2>
        <p><strong>Nombre científico:</strong> Symphysodon spp.</p>
        <p>
            Los peces disco son originarios de la cuenca amazónica y destacan
            por su cuerpo redondeado y sus colores llamativos. Son considerados
            peces muy atractivos, pero requieren mayor atención a la calidad
            del agua y a la estabilidad de las condiciones del acuario.
        </p>

        <img src="img/disco.jpg" alt="Pez disco de agua dulce" class="imagen-seccion">

        <!-- ======================================
             3.1 ACORDEÓN DEL PEZ DISCO
             ====================================== -->
        <div class="acordeon-peces">

            <details>
                <summary>Características principales</summary>
                <div class="contenido-pez">
                    <ul>
                        <li>Temperatura habitual: 28 a 30 °C.</li>
                        <li>pH orientativo: 6.0 a 7.0.</li>
                        <li>Son peces sociales que suelen mantenerse en grupos.</li>
                        <li>Necesitan acuarios amplios y estables.</li>
                        <li>Son sensibles a cambios bruscos del agua.</li>
                        <li>Existen variedades azules, rojas y turquesas.</li>
                    </ul>
                </div>
            </details>

            <details>
                <summary>Alimentación</summary>
                <div class="contenido-pez">
                    <p>
                        Los peces disco necesitan una dieta variada y de buena calidad.
                        Se pueden alimentar con pellets especiales para discos,
                        alimentos congelados adecuados y otras opciones nutritivas.
                    </p>
                </div>
            </details>

            <details>
                <summary>Reproducción</summary>
                <div class="contenido-pez">
                    <p>
                        Los discos depositan sus huevos sobre superficies verticales.
                        Una característica muy especial es que las crías recién nacidas,
                        cuando comienzan a nadar libremente, se alimentan de una secreción
                        nutritiva producida por la piel de sus padres.
                    </p>
                </div>
            </details>

        </div>
    </section>

    <!-- ==========================================
         4. COMPARACIÓN ENTRE ESPECIES
         ========================================== -->
    <section class="equipo">
        <h2><i class="fa-solid fa-scale-balanced"></i> ¿Cuál es más fácil de cuidar?</h2>
        <p>
            Los peces ángel suelen ser una opción más sencilla para personas
            que ya conocen los cuidados básicos de los acuarios tropicales.
            Los peces disco requieren mayor experiencia, especialmente en
            el control de la temperatura, la alimentación y la calidad del agua.
        </p>
        <p>
            Antes de adquirir cualquiera de estas especies, es importante
            investigar el tamaño del acuario y las necesidades de los ejemplares.
        </p>
    </section>
</main>

<!-- ==========================================
     5. FOOTER GENERAL DEL SITIO
     ========================================== -->
<?php include 'footer.php'; ?>
