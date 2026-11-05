
/* ==========================================
   MUNDO DE LOS PECES
   ARCHIVO PRINCIPAL DE JAVASCRIPT
   ========================================== */

document.addEventListener("DOMContentLoaded", function () {


    /* ==========================================
       1. MENÚ HAMBURGUESA RESPONSIVE
       ========================================== */

    const botonMenu = document.querySelector("#boton-menu");
    const menu = document.querySelector("#menu");

    if (botonMenu && menu) {

        // Abrir y cerrar el menú

        botonMenu.addEventListener("click", function () {

            menu.classList.toggle("activo");
            botonMenu.classList.toggle("activo");

            const abierto = menu.classList.contains("activo");

            botonMenu.setAttribute(
                "aria-expanded",
                String(abierto)
            );

            botonMenu.setAttribute(
                "aria-label",
                abierto ? "Cerrar menú" : "Abrir menú"
            );

        });


        // Cerrar el menú al seleccionar una opción

        const enlaces = menu.querySelectorAll("a");

        enlaces.forEach(function (enlace) {

            enlace.addEventListener("click", function () {

                menu.classList.remove("activo");
                botonMenu.classList.remove("activo");

                botonMenu.setAttribute(
                    "aria-expanded",
                    "false"
                );

                botonMenu.setAttribute(
                    "aria-label",
                    "Abrir menú"
                );

            });

        });

    }


    /* ==========================================
       2. ACCORDION - PREGUNTAS FRECUENTES
       ========================================== */

    const itemsAccordion = document.querySelectorAll(
        ".accordion .item"
    );

    itemsAccordion.forEach(function (item) {

        const titulo = item.querySelector(".titulo");

        if (!titulo) {
            return;
        }

        titulo.addEventListener("click", function () {

            const estabaAbierto = item.classList.contains("activo");

            // Cerrar todas las preguntas

            itemsAccordion.forEach(function (otroItem) {

                otroItem.classList.remove("activo");

                const otroTitulo = otroItem.querySelector(".titulo");

                if (otroTitulo) {

                    otroTitulo.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }

            });


            // Abrir la pregunta seleccionada

            if (!estabaAbierto) {

                item.classList.add("activo");

                titulo.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        });

    });


    /* ==========================================
       3. ARREGLO DE OBJETOS - PECES
       PROYECTO 2
       ========================================== */

    const peces = [

        {
            nombre: "Goldfish",
            imagen: "img/historia1.jpg",
            descripcion: "Pez ornamental de agua dulce, conocido por sus colores, variedades y belleza.",
            enlace: "orientales.html"
        },

        {
            nombre: "Arowana",
            imagen: "img/historia2.jpg",
            descripcion: "Pez de agua dulce conocido por su cuerpo alargado y elegante.",
            enlace: "orientales.html"
        },

        {
            nombre: "Pez Disco",
            imagen: "img/historia3.jpg",
            descripcion: "Pez tropical de agua dulce reconocido por sus colores y su forma redondeada.",
            enlace: "tropicales.html"
        },

        {
            nombre: "Pez Gato",
            imagen: "img/historia4.jpg",
            descripcion: "Pez de agua dulce conocido por sus barbillas y sus diferentes variedades.",
            enlace: "tropicales.html"
        },

        {
            nombre: "Pez Betta",
            imagen: "img/historia5.jpg",
            descripcion: "Pez tropical reconocido por sus colores llamativos y sus aletas.",
            enlace: "tropicales.html"
        },

        {
            nombre: "Pez Koi",
            imagen: "img/historia6.jpg",
            descripcion: "Pez ornamental muy popular en estanques por sus colores y su belleza.",
            enlace: "orientales.html"
        }

    ];


    /* ==========================================
       4. GENERACIÓN DINÁMICA DE LAS TARJETAS
       UTILIZANDO EL ARREGLO DE OBJETOS
       ========================================== */

    const contenedorCards = document.querySelector(
        "#contenedor-cards"
    );

    if (contenedorCards) {

        peces.forEach(function (pez) {

            // Crear un artículo para cada pez

            const article = document.createElement("article");

            // Agregar la clase que utiliza nuestro CSS

            article.classList.add("card");

            // Insertar la información del objeto

            article.innerHTML = `
                <img src="${pez.imagen}" alt="${pez.nombre}">

                <h3>${pez.nombre}</h3>

                <p>${pez.descripcion}</p>

                <a href="${pez.enlace}" class="boton-card">
                    Ver más
                </a>
            `;

            // Agregar la tarjeta al contenedor

            contenedorCards.appendChild(article);

        });

    }


    /* ==========================================
       5. CARRUSEL DE IMÁGENES
       ESTILO UTILIZADO POR LA PROFESORA
       ========================================== */

    // Obtener todas las imágenes del carrusel

    const slides = document.querySelectorAll(
        ".carrusel .slide"
    );

    // Obtener los botones

    const anterior = document.querySelector("#anterior");
    const siguiente = document.querySelector("#siguiente");

    // Posición de la imagen actual

    let indice = 0;


    /* ==========================================
       6. FUNCIÓN PARA MOSTRAR LAS IMÁGENES
       ========================================== */

    function mostrarSlide(numero) {

        if (slides.length === 0) {
            return;
        }

        // Ocultar todas las imágenes

        slides.forEach(function (slide) {

            slide.classList.remove("activa");

        });

        // Calcular la posición de la imagen

        indice = (numero + slides.length) % slides.length;

        // Mostrar la imagen seleccionada

        slides[indice].classList.add("activa");

    }


    /* ==========================================
       7. BOTONES DEL CARRUSEL
       ========================================== */

    if (slides.length > 0 && anterior && siguiente) {

        // Mostrar la primera imagen

        mostrarSlide(0);


        // BOTÓN ANTERIOR

        anterior.addEventListener("click", function () {

            mostrarSlide(indice - 1);

        });


        // BOTÓN SIGUIENTE

        siguiente.addEventListener("click", function () {

            mostrarSlide(indice + 1);

        });

    }


    /* ==========================================
       8. VALIDACIÓN DEL FORMULARIO DE CONTACTO
       UTILIZANDO UN ARREGLO DE ERRORES
       ========================================== */

    // Obtener el formulario de contacto

    const form = document.querySelector(
        "#formulario-contacto"
    );

    if (form) {

        form.addEventListener("submit", function (e) {

            // Evitar que el formulario se envíe
            // porque aún no tenemos el archivo PHP

            e.preventDefault();


            // Obtener los valores del formulario

            const nombre = form.elements["nombre"].value.trim();

            const correo = form.elements["correo"].value.trim();

            const mensaje = form.elements["mensaje"].value.trim();


            // Crear el arreglo de errores

            let errores = [];


            /* ======================================
               9. VALIDAR EL NOMBRE
               ====================================== */

            if (nombre === "") {

                errores.push(
                    "El nombre es obligatorio."
                );

            }


            /* ======================================
               10. VALIDAR EL CORREO
               ====================================== */

            const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!formatoCorreo.test(correo)) {

                errores.push(
                    "El correo debe ser válido."
                );

            }


            /* ======================================
               11. VALIDAR EL MENSAJE
               ====================================== */

            if (mensaje === "") {

                errores.push(
                    "El mensaje es obligatorio."
                );

            }


            /* ======================================
               12. MOSTRAR LOS RESULTADOS
               ====================================== */

            const mensajes = document.querySelector(
                "#mensajes"
            );

            if (mensajes) {

                // Limpiar estilos anteriores

                mensajes.classList.remove(
                    "error",
                    "exito"
                );


                // Mostrar los errores encontrados

                if (errores.length > 0) {

                    mensajes.textContent = errores.join(" ");

                    mensajes.classList.add("error");

                } else {

                    // Mostrar mensaje de validación correcta

                    mensajes.textContent =
                        "Formulario validado correctamente. Los datos están listos para enviarse.";

                    mensajes.classList.add("exito");

                }

            }

        });

    }

});
