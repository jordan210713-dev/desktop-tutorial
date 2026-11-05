
<?php

/* ==========================================
   MUNDO DE LOS PECES
   EJERCICIO BÁSICO DE PHP
   ========================================== */

// 1. VARIABLES

$nombre = "Mundo de los Peces";
$precio = 8000;


// 2. CONDICIONAL IF

if ($precio > 5000) {
    echo "El producto de Mundo de los Peces es caro.";
}


// 3. ARREGLO DE SERVICIOS

$servicios = [
    "Mantenimiento de acuarios",
    "Limpieza de peceras",
    "Asesoría sobre peces ornamentales"
];


// 4. RECORRER EL ARREGLO CON FOREACH

echo "<h2>Servicios de Mundo de los Peces</h2>";

echo "<ul>";

foreach ($servicios as $s) {
    echo "<li>$s</li>";
}

echo "</ul>";

?>
