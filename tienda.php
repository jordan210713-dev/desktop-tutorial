
<?php
/* ==========================================
   MUNDO DE LOS PECES
   PÁGINA DE TIENDA
   ========================================== */

/* ==========================================
   1. TÍTULO Y ENCABEZADO GENERAL
   ========================================== */
$titulo = "Tienda | Mundo de los Peces";
include 'header.php';
?>

<!-- ==========================================
     2. CONTENIDO PRINCIPAL
     ========================================== -->
<main class="pagina-tienda">

    <!-- ==========================================
         3. PRESENTACIÓN DE LA TIENDA
         ========================================== -->
    <section class="tienda-construccion">

        <i class="fa-solid fa-store icono-tienda"></i>

        <h1>¡Nuestra tienda está en camino!</h1>

        <p>
            Estamos trabajando para ofrecerte una tienda especializada
            en peces ornamentales, acuarios, accesorios y productos
            para su cuidado.
        </p>

        <!-- ======================================
             4. CATEGORÍAS DE LA TIENDA
             ====================================== -->
        <h2>Próximamente encontrarás</h2>

        <div class="categorias-tienda">

            <!-- 4.1 PECES ORNAMENTALES -->
            <div>
                <i class="fa-solid fa-fish"></i>
                <h3>Peces ornamentales</h3>
                <p>Goldfish, Koi, escalares, discos y más.</p>
            </div>

            <!-- 4.2 ACUARIOS Y EQUIPOS -->
            <div>
                <i class="fa-solid fa-water"></i>
                <h3>Acuarios y equipos</h3>
                <p>Peceras, filtros, bombas y accesorios.</p>
            </div>

            <!-- 4.3 PLANTAS Y DECORACIÓN -->
            <div>
                <i class="fa-solid fa-leaf"></i>
                <h3>Plantas y decoración</h3>
                <p>Plantas acuáticas, sustratos y adornos.</p>
            </div>

            <!-- 4.4 NUESTRO CRIADERO -->
            <div>
                <i class="fa-solid fa-seedling"></i>
                <h3>Nuestro criadero</h3>
                <p>
                    Un espacio dedicado a la reproducción
                    y crianza responsable de peces ornamentales.
                </p>
            </div>

        </div>

        <!-- ======================================
             5. MENSAJE DE DESARROLLO
             ====================================== -->
        <p class="mensaje-proceso">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            Tienda en proceso de desarrollo
        </p>

        <!-- ======================================
             6. BOTÓN REGRESAR AL INICIO
             ====================================== -->
        <a href="index.php" class="regresar-tienda">
            <i class="fa-solid fa-arrow-left"></i>
            Regresar al inicio
        </a>

    </section>
</main>

<!-- ==========================================
     7. FOOTER GENERAL DEL SITIO
     ========================================== -->
<?php include 'footer.php'; ?>
