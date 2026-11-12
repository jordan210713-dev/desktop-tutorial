
<?php
/* ==========================================
   MUNDO DE LOS PECES
   ENCABEZADO GENERAL DEL SITIO
   ========================================== */

/* ==========================================
   1. TÍTULO DINÁMICO DE CADA PÁGINA
   ========================================== */
$titulo = $titulo ?? "Mundo de los Peces";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ==========================================
         2. CONFIGURACIÓN GENERAL
         ========================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"); ?></title>

    <!-- ==========================================
         3. CONEXIÓN CON ARCHIVOS CSS
         ========================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/acordeon-peces.css">
    <link rel="stylesheet" href="css/mejoras-visuales.css">

    <!-- ==========================================
         4. ÍCONOS FONT AWESOME
         ========================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!-- ==========================================
         5. ENCABEZADO PRINCIPAL
         ========================================== -->
    <header class="header">

        <!-- LOGO -->
        <a href="index.php" class="logo">
            <i class="fa-solid fa-fish"></i>
            Mundo de los Peces
        </a>

        <!-- ======================================
             6. BOTÓN HAMBURGUESA
             ====================================== -->
        <button class="hamburguesa" id="boton-menu" type="button"
                aria-label="Abrir menú" aria-expanded="false"
                aria-controls="menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- ======================================
             7. MENÚ DE NAVEGACIÓN
             ====================================== -->
        <nav class="menu" id="menu">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-house"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="orientales.php">
                        <i class="fa-solid fa-fish"></i> Peces Orientales
                    </a>
                </li>
                <li>
                    <a href="tropicales.php">
                        <i class="fa-solid fa-water"></i> Peces Tropicales
                    </a>
                </li>
                <li>
                    <a href="agua-salada.php">
                        <i class="fa-solid fa-anchor"></i> Agua Salada
                    </a>
                </li>
                <li>
                    <a href="nosotros.php">
                        <i class="fa-solid fa-users"></i> Nosotros
                    </a>
                </li>
                <li>
                    <a href="servicios.php">
                        <i class="fa-solid fa-screwdriver-wrench"></i> Servicios
                    </a>
                </li>
                <li>
                    <a href="contacto.php">
                        <i class="fa-solid fa-envelope"></i> Contacto
                    </a>
                </li>
            </ul>
        </nav>

        <!-- ======================================
             8. BOTÓN DE LA TIENDA
             ====================================== -->
        <a href="tienda.php" class="boton-tienda" aria-label="Visitar tienda">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </header>
