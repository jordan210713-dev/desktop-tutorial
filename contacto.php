
<?php
/* ==========================================
   MUNDO DE LOS PECES
   PÁGINA DE CONTACTO
   ========================================== */

/* ==========================================
   1. TÍTULO Y ENCABEZADO GENERAL
   ========================================== */
$titulo = "Contacto | Mundo de los Peces";
include 'header.php';
?>

<!-- ==========================================
     2. CONTENIDO PRINCIPAL
     ========================================== -->
<main>

    <!-- ======================================
         3. FORMULARIO DE CONTACTO
         ====================================== -->
    <form action="enviar.php" method="post"
          class="formulario" id="formulario-contacto" novalidate>

        <!-- 3.1 TÍTULO Y DESCRIPCIÓN -->
        <h1><i class="fa-solid fa-envelope"></i> Contáctanos</h1>
        <p>
            ¿Tienes dudas sobre el cuidado de tus peces
            o la compatibilidad entre especies?
            Envíanos tu consulta.
        </p>

        <!-- ======================================
             4. CAMPO NOMBRE
             ====================================== -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <!-- ======================================
             5. CAMPO CORREO ELECTRÓNICO
             ====================================== -->
        <label for="correo">Email:</label>
        <input type="email" id="correo" name="correo" required>

        <!-- ======================================
             6. CAMPO MENSAJE
             ====================================== -->
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <!-- ======================================
             7. MENSAJES DE VALIDACIÓN
             ====================================== -->
        <div id="mensajes" role="alert" aria-live="polite"></div>

        <!-- ======================================
             8. BOTÓN ENVIAR
             ====================================== -->
        <button type="submit">
            <i class="fa-solid fa-paper-plane"></i> Enviar
        </button>

    </form>
</main>

<!-- ==========================================
     9. FOOTER GENERAL DEL SITIO
     ========================================== -->
<?php include 'footer.php'; ?>
