
/* ==========================================
   MUNDO DE LOS PECES
   PROYECTO 2 - JAVASCRIPT
   ========================================== */

document.addEventListener("DOMContentLoaded", function () {

    /* ======================================
       1. MENÚ HAMBURGUESA
       ====================================== */

    const botonMenu = document.querySelector("#boton-menu");
    const menu = document.querySelector("#menu");

    if (botonMenu && menu) {

        botonMenu.addEventListener("click", function () {

            menu.classList.toggle("activo");
            botonMenu.classList.toggle("activo");

            const abierto = menu.classList.contains("activo");

            botonMenu.setAttribute("aria-expanded", String(abierto));

            botonMenu.setAttribute(
                "aria-label",
                abierto ? "Cerrar menú" : "Abrir menú"
            );

        });


        /* CERRAR MENÚ AL SELECCIONAR UN ENLACE */

        const enlaces = menu.querySelectorAll("a");

        enlaces.forEach(function (enlace) {

            enlace.addEventListener("click", function () {

                menu.classList.remove("activo");
                botonMenu.classList.remove("activo");

                botonMenu.setAttribute("aria-expanded", "false");
                botonMenu.setAttribute("aria-label", "Abrir menú");

            });

        });

    }


    /* ======================================
       2. ACCORDION - PREGUNTAS FRECUENTES
       ====================================== */

    const preguntas = document.querySelectorAll(
        ".accordion .item"
    );

    preguntas.forEach(function (pregunta) {

        const boton = pregunta.querySelector(".titulo");

        boton.addEventListener("click", function () {

            const estabaAbierta =
                pregunta.classList.contains("activo");

            /* CERRAR TODAS LAS PREGUNTAS */

            preguntas.forEach(function (otraPregunta) {

                otraPregunta.classList.remove("activo");

                const otroBoton =
                    otraPregunta.querySelector(".titulo");

                otroBoton.setAttribute(
                    "aria-expanded",
                    "false"
                );

            });


            /* ABRIR LA PREGUNTA SELECCIONADA */

            if (!estabaAbierta) {

                pregunta.classList.add("activo");

                boton.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        });

    });

});
