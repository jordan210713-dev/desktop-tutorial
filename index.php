
<?php
/* ==========================================
   MUNDO DE LOS PECES
   PÁGINA PRINCIPAL
   ========================================== */

/* ==========================================
   1. TÍTULO Y ENCABEZADO GENERAL
   ========================================== */
$titulo = "Inicio | Mundo de los Peces";
include 'header.php';
?>

<main>
    <!-- ==========================================
         2. PRIMERA SECCIÓN: BIENVENIDA
         ========================================== -->
    <section class="historia">
        <h1>Bienvenidos a Mundo de los Peces</h1>
        <p>
            Mundo de los Peces nace con la idea de compartir información
            sobre el fascinante mundo de los acuarios y las diferentes
            especies de peces. Nuestro objetivo es ayudar a las personas
            a conocer sus cuidados, alimentación, compatibilidad y las
            condiciones necesarias para mantener un acuario saludable.
        </p>
    </section>

    <!-- ==========================================
         3. SEGUNDA SECCIÓN: ESPECIES
         ========================================== -->
    <section class="equipo">
        <h2>Conoce nuestras especies</h2>
        <p>
            En Mundo de los Peces encontrarás información sobre peces
            orientales como los Goldfish y Koi, además de diferentes
            especies tropicales. También aprenderás sobre sus
            características, necesidades y compatibilidad con otros peces.
        </p>
    </section>

    <!-- ==========================================
         4. TERCERA SECCIÓN: SERVICIOS
         ========================================== -->
    <section class="servicios">
        <h2>Nuestros servicios</h2>
        <p>
            En Mundo de los Peces ofrecemos información y orientación
            para el cuidado adecuado de los peces y acuarios.
        </p>
        <ul>
            <li>Cuidados y alimentación de peces</li>
            <li>Compatibilidad entre especies</li>
            <li>Mantenimiento de acuarios</li>
        </ul>
    </section>

    <!-- ==========================================
         5. CUARTA SECCIÓN: TARJETAS DE PECES
         GENERADAS DESDE JAVASCRIPT
         ========================================== -->
    <section class="seccion-cards contenedor">
        <h2>Conoce nuestros peces</h2>
        <p>
            Descubre algunas de las especies más populares
            del mundo de los acuarios.
        </p>

        <!-- ======================================
             5.1. BUSCADOR DE PECES EN TIEMPO REAL
             PRIMERA FUNCIONALIDAD NUEVA
             ====================================== -->
        <div class="contenedor-buscador">
            <label for="buscador-peces">Buscar una especie de pez:</label>
            <input
                type="search"
                id="buscador-peces"
                name="buscador-peces"
                placeholder="Ejemplo: Goldfish, Koi, Betta..."
                autocomplete="off"
                aria-controls="contenedor-cards">
        </div>

        <!-- ======================================
             5.2. CONTENEDOR DE TARJETAS
             ====================================== -->
        <div class="contenedor-cards" id="contenedor-cards">
            <!--
                Las seis tarjetas se generan automáticamente
                desde js/main.js utilizando un arreglo de objetos.
                El buscador permite filtrarlas en tiempo real.
            -->
        </div>
    </section>

    <!-- ==========================================
         6. QUINTA SECCIÓN: CALCULADORA DE ACUARIOS
         SEGUNDA FUNCIONALIDAD NUEVA
         ========================================== -->
    <section class="seccion-calculadora contenedor">
        <h2>
            <i class="fa-solid fa-calculator" aria-hidden="true"></i>
            Calculadora de acuarios
        </h2>
        <p>
            Calcula la capacidad aproximada de tu acuario rectangular.
            Ingresa las medidas en centímetros para conocer
            cuántos litros y galones puede contener.
        </p>

        <!-- ======================================
             6.1. FORMULARIO DE MEDIDAS
             ====================================== -->
        <form id="formulario-calculadora" novalidate>

            <!-- MEDIDA 1: LARGO -->
            <div class="campo-calculadora">
                <label for="largo-acuario">Largo (cm)</label>
                <input
                    type="number"
                    id="largo-acuario"
                    name="largo-acuario"
                    placeholder="Ejemplo: 100"
                    min="0.1"
                    step="any"
                    required>
            </div>

            <!-- MEDIDA 2: ANCHO -->
            <div class="campo-calculadora">
                <label for="ancho-acuario">Ancho (cm)</label>
                <input
                    type="number"
                    id="ancho-acuario"
                    name="ancho-acuario"
                    placeholder="Ejemplo: 40"
                    min="0.1"
                    step="any"
                    required>
            </div>

            <!-- MEDIDA 3: ALTO -->
            <div class="campo-calculadora">
                <label for="alto-acuario">Alto (cm)</label>
                <input
                    type="number"
                    id="alto-acuario"
                    name="alto-acuario"
                    placeholder="Ejemplo: 50"
                    min="0.1"
                    step="any"
                    required>
            </div>

            <!-- ======================================
                 6.2. BOTONES DE LA CALCULADORA
                 ====================================== -->
            <div class="botones-calculadora">
                <button type="submit" id="calcular-acuario">
                    <i class="fa-solid fa-calculator" aria-hidden="true"></i>
                    Calcular capacidad
                </button>

                <button type="reset" id="limpiar-calculadora">
                    <i class="fa-solid fa-rotate-left" aria-hidden="true"></i>
                    Limpiar
                </button>
            </div>
        </form>

        <!-- ======================================
             6.3. RESULTADOS DE LA CALCULADORA
             ====================================== -->
        <div
            class="resultado-calculadora"
            id="resultado-calculadora"
            role="status"
            aria-live="polite"
            aria-atomic="true">
            <!--
                JavaScript mostrará aquí la capacidad
                calculada en litros y galones.
            -->
        </div>

        <!-- ======================================
             6.4. INFORMACIÓN SOBRE EL CÁLCULO
             ====================================== -->
        <p class="nota-calculadora">
            Nota: el resultado representa el volumen geométrico
            aproximado de un acuario rectangular. La cantidad
            real de agua puede ser menor por el grosor del vidrio,
            la decoración, el sustrato y el espacio sin llenar.
        </p>
    </section>

    <!-- ==========================================
         7. SEXTA SECCIÓN: CONSEJOS PARA TU ACUARIO
         CUARTA FUNCIONALIDAD NUEVA - VENTANA MODAL
         ========================================== -->
    <section class="seccion-consejos contenedor">
        <h2><i class="fa-solid fa-lightbulb" aria-hidden="true"></i> Consejos para tu acuario</h2>
        <p>Conoce recomendaciones básicas para mantener a tus peces saludables y su acuario en buenas condiciones.</p>
        <button type="button" id="abrir-modal" class="boton-consejos" aria-haspopup="dialog" aria-controls="modal-consejos">
            <i class="fa-solid fa-circle-info" aria-hidden="true"></i> Ver consejos
        </button>
    </section>

    <!-- ==========================================
         8. VENTANA MODAL INFORMATIVA
         ========================================== -->
    <div class="fondo-modal" id="fondo-modal" hidden>
        <div class="modal-consejos" id="modal-consejos" role="dialog" aria-modal="true" aria-labelledby="titulo-modal" aria-describedby="descripcion-modal" tabindex="-1">
            <button type="button" id="cerrar-modal" class="cerrar-modal" aria-label="Cerrar ventana de consejos">
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
            <h2 id="titulo-modal"><i class="fa-solid fa-fish" aria-hidden="true"></i> Consejos para tu acuario</h2>
            <p id="descripcion-modal">Estas recomendaciones generales te ayudarán a cuidar mejor tu acuario:</p>
            <ul>
                <li><strong>Alimentación:</strong> ofrece porciones adecuadas según la especie y evita dejar comida sobrante.</li>
                <li><strong>Filtración:</strong> utiliza un filtro apropiado para el volumen del acuario y su población.</li>
                <li><strong>Calidad del agua:</strong> revisa parámetros como amoníaco, nitritos, nitratos y temperatura.</li>
                <li><strong>Mantenimiento:</strong> realiza cambios parciales de agua según las necesidades del acuario y usa acondicionador cuando corresponda.</li>
                <li><strong>Compatibilidad:</strong> investiga las necesidades y el tamaño adulto de cada especie antes de mezclarlas.</li>
            </ul>
            <button type="button" id="entendido-modal" class="boton-entendido">Entendido</button>
        </div>
    </div>

    <!-- ==========================================
         9. SÉPTIMA SECCIÓN: GALERÍA
         ========================================== -->
    <section class="galeria">
        <h2>Galería de Mundo de los Peces</h2>
        <p>
            Conoce algunas de las especies de peces ornamentales
            y descubre la belleza del mundo de los acuarios.
        </p>
    </section>

    <!-- ==========================================
         10. OCTAVA SECCIÓN: CARRUSEL DE IMÁGENES
         ========================================== -->
    <section class="seccion-carrusel" aria-label="Carrusel de peces">
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
            <button id="anterior" type="button">Anterior</button>

            <!-- BOTÓN SIGUIENTE -->
            <button id="siguiente" type="button">Siguiente</button>

        </div>
    </section>

    <!-- ==========================================
         11. NOVENA SECCIÓN: PREGUNTAS FRECUENTES
         ========================================== -->
    <section class="seccion-accordion contenedor">
        <h2>Preguntas frecuentes</h2>
        <p>
            Encuentra respuestas a algunas de las preguntas
            más comunes sobre el cuidado de los peces y acuarios.
        </p>

        <div class="accordion" id="accordion">

            <!-- PREGUNTA 1 -->
            <div class="item">
                <button class="titulo" type="button" aria-expanded="false">
                    ¿Cada cuánto debo alimentar a mis peces?
                    <span aria-hidden="true">+</span>
                </button>
                <div class="contenido">
                    <p>
                        La frecuencia depende de la especie y su edad.
                        Muchos peces adultos pueden alimentarse una
                        o dos veces al día, utilizando porciones adecuadas.
                    </p>
                </div>
            </div>

            <!-- PREGUNTA 2 -->
            <div class="item">
                <button class="titulo" type="button" aria-expanded="false">
                    ¿Cada cuánto debo cambiar el agua del acuario?
                    <span aria-hidden="true">+</span>
                </button>
                <div class="contenido">
                    <p>
                        En muchos acuarios se realizan cambios parciales
                        de agua semanalmente. La cantidad depende de
                        la población, la filtración y la calidad del agua.
                    </p>
                </div>
            </div>

            <!-- PREGUNTA 3 -->
            <div class="item">
                <button class="titulo" type="button" aria-expanded="false">
                    ¿Puedo mezclar diferentes especies de peces?
                    <span aria-hidden="true">+</span>
                </button>
                <div class="contenido">
                    <p>
                        Sí, siempre que las especies sean compatibles
                        en comportamiento, temperatura, tamaño
                        y necesidades de agua.
                    </p>
                </div>
            </div>

            <!-- PREGUNTA 4 -->
            <div class="item">
                <button class="titulo" type="button" aria-expanded="false">
                    ¿Por qué es importante tener un filtro?
                    <span aria-hidden="true">+</span>
                </button>
                <div class="contenido">
                    <p>
                        El filtro ayuda a retirar partículas del agua
                        y permite alojar bacterias beneficiosas que
                        procesan sustancias tóxicas producidas en el acuario.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================
         12. DÉCIMA SECCIÓN: CONTACTO
         ========================================== -->
    <section class="contacto contenedor">
        <h2>
            <i class="fa-solid fa-envelope"></i>
            ¿Tienes alguna consulta?
        </h2>
        <p>
            Si deseas compartir alguna pregunta sobre acuarios,
            especies o alimentación, puedes visitar nuestra
            sección de contacto.
        </p>
        <a href="contacto.php">Ir a Contacto</a>
    </section>
</main>

<!-- ==========================================
     13. FOOTER GENERAL DEL SITIO
     ========================================== -->
<?php include 'footer.php'; ?>
