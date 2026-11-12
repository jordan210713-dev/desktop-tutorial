
<?php
/* ==========================================
   MUNDO DE LOS PECES
   PÁGINA DE PECES DE AGUA SALADA
   ========================================== */
$titulo = "Agua Salada | Mundo de los Peces";
include 'header.php';
?>

<main>
    <!-- ==========================================
         1. INTRODUCCIÓN
         ========================================== -->
    <section class="historia">
        <h1><i class="fa-solid fa-water"></i> Peces de Agua Salada</h1>
        <p>
            Los peces de agua salada son conocidos por sus colores llamativos,
            formas y comportamientos. Habitan principalmente en mares y océanos,
            incluyendo los arrecifes de coral, donde conviven numerosas especies marinas.
        </p>
    </section>

    <!-- ==========================================
         2. INFORMACIÓN PRÓXIMAMENTE
         ========================================== -->
    <section class="equipo">
        <h2><i class="fa-solid fa-fish"></i> Próximamente</h2>
        <p>
            Estamos preparando información sobre diferentes especies de peces marinos,
            sus características, alimentación, reproducción y cuidados en acuarios.
        </p>
        <p>
            También compartiremos información sobre la salinidad, temperatura,
            filtración y mantenimiento de acuarios marinos.
        </p>

        <!-- ======================================
             2.1 ACORDEÓN DE TEMAS MARINOS
             ====================================== -->
        <h3>Temas que encontrarás</h3>

        <div class="acordeon-peces">

            <details>
                <summary>Peces payaso y otras especies marinas</summary>
                <div class="contenido-pez">
                    <p>
                        Próximamente compartiremos información sobre los peces payaso
                        y otras especies marinas, incluyendo sus características,
                        alimentación y cuidados.
                    </p>
                </div>
            </details>

            <details>
                <summary>Alimentación de peces de agua salada</summary>
                <div class="contenido-pez">
                    <p>
                        Estamos preparando información sobre la alimentación
                        de los peces marinos y sus diferentes necesidades nutricionales.
                    </p>
                </div>
            </details>

            <details>
                <summary>Parámetros del agua y salinidad</summary>
                <div class="contenido-pez">
                    <p>
                        Próximamente encontrarás información sobre la salinidad,
                        temperatura y otros parámetros importantes del agua
                        en los acuarios marinos.
                    </p>
                </div>
            </details>

            <details>
                <summary>Mantenimiento de acuarios marinos</summary>
                <div class="contenido-pez">
                    <p>
                        Compartiremos recomendaciones sobre filtración,
                        limpieza y mantenimiento de acuarios de agua salada.
                    </p>
                </div>
            </details>

            <details>
                <summary>Compatibilidad entre especies</summary>
                <div class="contenido-pez">
                    <p>
                        Estamos preparando información sobre la convivencia
                        entre diferentes especies de peces marinos.
                    </p>
                </div>
            </details>

            <details>
                <summary>Reproducción de peces marinos</summary>
                <div class="contenido-pez">
                    <p>
                        Próximamente conocerás información sobre los procesos
                        reproductivos de diferentes especies de peces de agua salada.
                    </p>
                </div>
            </details>

        </div>
    </section>

    <!-- ==========================================
         3. MENSAJE DE SECCIÓN EN DESARROLLO
         ========================================== -->
    <section class="servicios">
        <h2>
            <i class="fa-solid fa-screwdriver-wrench"></i>
            Sección en desarrollo
        </h2>
        <p>
            Seguimos trabajando para ampliar el contenido de Mundo de los Peces.
            Mientras tanto, puedes visitar nuestras secciones de Peces Orientales
            y Peces Tropicales.
        </p>
        <p>
            <a href="orientales.php">Conocer Peces Orientales</a>
        </p>
        <p>
            <a href="tropicales.php">Conocer Peces Tropicales</a>
        </p>
    </section>
</main>

<!-- ==========================================
     4. FOOTER GENERAL DEL SITIO
     ========================================== -->
<?php include 'footer.php'; ?>
