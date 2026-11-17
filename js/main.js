
/* ==========================================
   MUNDO DE LOS PECES
   ARCHIVO PRINCIPAL DE JAVASCRIPT
   ========================================== */

document.addEventListener("DOMContentLoaded", function () {

    /* ==========================================
       1. MENÚ HAMBURGUESA RESPONSIVE
       ========================================== */

    // Obtener el botón y el menú de navegación.
    const botonMenu = document.querySelector("#boton-menu");
    const menu = document.querySelector("#menu");

    if (botonMenu && menu) {

        // Abrir o cerrar el menú.
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

        // Cerrar el menú al seleccionar un enlace.
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

    /* ==========================================
       2. ACCORDION - PREGUNTAS FRECUENTES
       ========================================== */

    // Obtener las preguntas del acordeón.
    const itemsAccordion = document.querySelectorAll(".accordion .item");

    itemsAccordion.forEach(function (item) {
        const titulo = item.querySelector(".titulo");

        if (!titulo) return;

        // Abrir la pregunta seleccionada.
        titulo.addEventListener("click", function () {
            const estabaAbierto = item.classList.contains("activo");

            // Cerrar las demás preguntas.
            itemsAccordion.forEach(function (otroItem) {
                otroItem.classList.remove("activo");

                const otroTitulo = otroItem.querySelector(".titulo");

                if (otroTitulo) {
                    otroTitulo.setAttribute("aria-expanded", "false");
                }
            });

            if (!estabaAbierto) {
                item.classList.add("activo");
                titulo.setAttribute("aria-expanded", "true");
            }
        });
    });

    /* ==========================================
       3. ARREGLO DE OBJETOS - PECES
       ========================================== */

    // Información de las seis especies.
    const peces = [
        {
            nombre: "Goldfish",
            imagen: "img/historia1.jpg",
            descripcion: "Pez ornamental de agua dulce, conocido por sus colores, variedades y belleza.",
            enlace: "orientales.php"
        },
        {
            nombre: "Arowana",
            imagen: "img/historia2.jpg",
            descripcion: "Pez de agua dulce conocido por su cuerpo alargado y elegante.",
            enlace: "orientales.php"
        },
        {
            nombre: "Pez Disco",
            imagen: "img/historia3.jpg",
            descripcion: "Pez tropical de agua dulce reconocido por sus colores y su forma redondeada.",
            enlace: "tropicales.php"
        },
        {
            nombre: "Pez Gato",
            imagen: "img/historia4.jpg",
            descripcion: "Pez de agua dulce conocido por sus barbillas y sus diferentes variedades.",
            enlace: "tropicales.php"
        },
        {
            nombre: "Pez Betta",
            imagen: "img/historia5.jpg",
            descripcion: "Pez tropical reconocido por sus colores llamativos y sus aletas.",
            enlace: "tropicales.php"
        },
        {
            nombre: "Pez Koi",
            imagen: "img/historia6.jpg",
            descripcion: "Pez ornamental muy popular en estanques por sus colores y su belleza.",
            enlace: "orientales.php"
        }
    ];

    /* ==========================================
       4. GENERACIÓN DINÁMICA DE LAS TARJETAS
       ========================================== */

    // Obtener el contenedor de tarjetas.
    const contenedorCards = document.querySelector("#contenedor-cards");

    function pintarCards(listaPeces) {

        if (!contenedorCards) return;

        // Eliminar las tarjetas anteriores.
        contenedorCards.innerHTML = "";

        // Mostrar mensaje cuando no hay resultados.
        if (listaPeces.length === 0) {
            const mensaje = document.createElement("p");
            mensaje.textContent = "No se encontraron peces con ese nombre.";
            mensaje.classList.add("sin-resultados");
            contenedorCards.appendChild(mensaje);
            return;
        }

        // Crear una tarjeta por cada pez.
        listaPeces.forEach(function (pez) {
            const article = document.createElement("article");
            article.classList.add("card");

            article.innerHTML = `
                <img src="${pez.imagen}" alt="${pez.nombre}">
                <h3>${pez.nombre}</h3>
                <p>${pez.descripcion}</p>
                <a href="${pez.enlace}" class="boton-card">Ver más</a>
            `;

            contenedorCards.appendChild(article);
        });
    }

    // Mostrar las tarjetas al cargar la página.
    if (contenedorCards) {
        pintarCards(peces);
    }

    /* ==========================================
       5. BUSCADOR DE PECES EN TIEMPO REAL
       PRIMERA FUNCIONALIDAD NUEVA
       ========================================== */

    const buscadorPeces = document.querySelector("#buscador-peces");

    if (buscadorPeces && contenedorCards) {

        // Filtrar las tarjetas mientras el usuario escribe.
        buscadorPeces.addEventListener("input", function () {
            const busqueda = buscadorPeces.value.trim().toLowerCase();

            const resultados = peces.filter(function (pez) {
                return pez.nombre.toLowerCase().includes(busqueda);
            });

            pintarCards(resultados);
        });
    }

    /* ==========================================
       6. CARRUSEL DE IMÁGENES
       ========================================== */

    const slides = document.querySelectorAll(".carrusel .slide");
    const anterior = document.querySelector("#anterior");
    const siguiente = document.querySelector("#siguiente");

    let indice = 0;

    /* ==========================================
       7. FUNCIÓN PARA MOSTRAR LAS IMÁGENES
       ========================================== */

    function mostrarSlide(numero) {

        if (slides.length === 0) return;

        // Ocultar las imágenes.
        slides.forEach(function (slide) {
            slide.classList.remove("activa");
        });

        // Calcular la posición de la imagen.
        indice = (numero + slides.length) % slides.length;

        // Mostrar la imagen correspondiente.
        slides[indice].classList.add("activa");
    }

    /* ==========================================
       8. BOTONES DEL CARRUSEL
       ========================================== */

    if (slides.length > 0 && anterior && siguiente) {

        mostrarSlide(0);

        anterior.addEventListener("click", function () {
            mostrarSlide(indice - 1);
        });

        siguiente.addEventListener("click", function () {
            mostrarSlide(indice + 1);
        });
    }

    /* ==========================================
       9. CALCULADORA DE ACUARIOS
       SEGUNDA FUNCIONALIDAD NUEVA
       ========================================== */

    const formularioCalculadora = document.querySelector("#formulario-calculadora");
    const resultadoCalculadora = document.querySelector("#resultado-calculadora");

    if (formularioCalculadora && resultadoCalculadora) {

        const largoAcuario = document.querySelector("#largo-acuario");
        const anchoAcuario = document.querySelector("#ancho-acuario");
        const altoAcuario = document.querySelector("#alto-acuario");

        /* ======================================
           10. OBTENER Y VALIDAR LAS MEDIDAS
           ====================================== */

        formularioCalculadora.addEventListener("submit", function (e) {
            e.preventDefault();

            // Convertir los valores a números.
            const largo = Number(largoAcuario.value);
            const ancho = Number(anchoAcuario.value);
            const alto = Number(altoAcuario.value);

            let erroresCalculadora = [];

            // Comprobar que los campos no estén vacíos.
            if (
                largoAcuario.value.trim() === "" ||
                anchoAcuario.value.trim() === "" ||
                altoAcuario.value.trim() === ""
            ) {
                erroresCalculadora.push("Debes ingresar las tres medidas.");
            } else if (
                !Number.isFinite(largo) ||
                !Number.isFinite(ancho) ||
                !Number.isFinite(alto) ||
                largo <= 0 ||
                ancho <= 0 ||
                alto <= 0
            ) {
                erroresCalculadora.push("Las medidas deben ser mayores que cero.");
            }

            // Mostrar los errores.
            if (erroresCalculadora.length > 0) {
                resultadoCalculadora.textContent = erroresCalculadora.join(" ");
                resultadoCalculadora.classList.remove("exito");
                resultadoCalculadora.classList.add("error");
                return;
            }

            /* ======================================
               11. CALCULAR LITROS Y GALONES
               ====================================== */

            const litros = (largo * ancho * alto) / 1000;
            const galones = litros / 3.785411784;

            const formatoNumero = new Intl.NumberFormat("es-CR", {
                maximumFractionDigits: 2
            });

            /* ======================================
               12. MOSTRAR EL RESULTADO
               ====================================== */

            resultadoCalculadora.innerHTML = "";
            resultadoCalculadora.classList.remove("error");
            resultadoCalculadora.classList.add("exito");

            const tituloResultado = document.createElement("h3");
            tituloResultado.textContent = "Capacidad aproximada del acuario";

            const textoLitros = document.createElement("p");
            textoLitros.textContent = "Litros: " + formatoNumero.format(litros) + " L";

            const textoGalones = document.createElement("p");
            textoGalones.textContent =
                "Galones estadounidenses: " +
                formatoNumero.format(galones) + " gal";

            resultadoCalculadora.appendChild(tituloResultado);
            resultadoCalculadora.appendChild(textoLitros);
            resultadoCalculadora.appendChild(textoGalones);
        });

        // Limpiar los resultados.
        formularioCalculadora.addEventListener("reset", function () {
            resultadoCalculadora.innerHTML = "";
            resultadoCalculadora.classList.remove("error", "exito");
        });
    }

    /* ==========================================
       13. VALIDACIÓN DEL FORMULARIO DE CONTACTO
       ========================================== */

    const form = document.querySelector("#formulario-contacto");

    if (form) {

        form.addEventListener("submit", function (e) {

            const nombre = form.elements["nombre"].value.trim();
            const correo = form.elements["correo"].value.trim();
            const mensaje = form.elements["mensaje"].value.trim();

            let errores = [];

            /* ======================================
               14. VALIDAR EL NOMBRE
               ====================================== */

            if (nombre === "") {
                errores.push("El nombre es obligatorio.");
            }

            /* ======================================
               15. VALIDAR EL CORREO ELECTRÓNICO
               ====================================== */

            const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!formatoCorreo.test(correo)) {
                errores.push("El correo debe ser válido.");
            }

            /* ======================================
               16. VALIDAR EL MENSAJE
               ====================================== */

            if (mensaje === "") {
                errores.push("El mensaje es obligatorio.");
            }

            /* ======================================
               17. MOSTRAR LOS RESULTADOS
               ====================================== */

            const mensajes = document.querySelector("#mensajes");

            if (mensajes) {
                mensajes.classList.remove("error", "exito");
            }

            if (errores.length > 0) {
                e.preventDefault();

                if (mensajes) {
                    mensajes.textContent = errores.join(" ");
                    mensajes.classList.add("error");
                }

            } else {

                // Permitir el envío hacia enviar.php.
                if (mensajes) {
                    mensajes.textContent =
                        "Formulario validado correctamente. Enviando...";
                    mensajes.classList.add("exito");
                }
            }
        });
    }

    /* ==========================================
       18. MODO OSCURO CON LOCALSTORAGE
       TERCERA FUNCIONALIDAD NUEVA
       ========================================== */

    const botonTema = document.querySelector("#boton-tema");
    const pagina = document.documentElement;

    // Actualizar el ícono del botón.
    function actualizarBotonTema() {

        if (!botonTema) return;

        const oscuro = pagina.classList.contains("modo-oscuro");
        const icono = botonTema.querySelector("i");

        botonTema.setAttribute("aria-pressed", String(oscuro));
        botonTema.setAttribute(
            "aria-label",
            oscuro ? "Activar modo claro" : "Activar modo oscuro"
        );

        botonTema.title = oscuro
            ? "Activar modo claro"
            : "Activar modo oscuro";

        if (icono) {
            icono.className = oscuro
                ? "fa-solid fa-sun"
                : "fa-solid fa-moon";
        }
    }

    if (botonTema) {

        actualizarBotonTema();

        botonTema.addEventListener("click", function () {

            // Cambiar el tema.
            pagina.classList.toggle("modo-oscuro");

            // Guardar la preferencia.
            try {
                const tema = pagina.classList.contains("modo-oscuro")
                    ? "oscuro"
                    : "claro";

                localStorage.setItem("tema-mundo-peces", tema);

            } catch (error) {
                // El tema funciona aunque no pueda guardarse.
            }

            actualizarBotonTema();
        });
    }

    /* ==========================================
       19. VENTANA MODAL INFORMATIVA
       CUARTA FUNCIONALIDAD NUEVA
       ========================================== */

    // Obtener los elementos reales de index.php.
    const botonAbrirModal = document.querySelector("#abrir-modal");
    const fondoModal = document.querySelector("#fondo-modal");
    const ventanaModal = document.querySelector("#modal-consejos");
    const botonCerrarModal = document.querySelector("#cerrar-modal");
    const botonEntendido = document.querySelector("#entendido-modal");

    if (botonAbrirModal && fondoModal && ventanaModal) {

        // Guardar el elemento seleccionado antes de abrir.
        let elementoAnterior = null;

        // Guardar el desplazamiento anterior.
        let overflowAnterior = "";

        /* ======================================
           19.1. ABRIR LA VENTANA MODAL
           ====================================== */

        function abrirModal() {

            // Recordar el elemento que tenía el enfoque.
            elementoAnterior = document.activeElement;

            // Mostrar el fondo de la ventana modal.
            fondoModal.hidden = false;
            fondoModal.classList.add("activo");

            // Evitar que se desplace la página.
            overflowAnterior = document.body.style.overflow;
            document.body.style.overflow = "hidden";

            // Enfocar el botón de cierre.
            if (botonCerrarModal) {
                botonCerrarModal.focus();
            } else {
                ventanaModal.focus();
            }
        }

        /* ======================================
           19.2. CERRAR LA VENTANA MODAL
           ====================================== */

        function cerrarModal() {

            // Ocultar la ventana modal.
            fondoModal.classList.remove("activo");
            fondoModal.hidden = true;

            // Restaurar el desplazamiento.
            document.body.style.overflow = overflowAnterior;

            // Devolver el enfoque al botón anterior.
            if (elementoAnterior) {
                elementoAnterior.focus();
            }
        }

        /* ======================================
           19.3. BOTONES PARA ABRIR Y CERRAR
           ====================================== */

        // Abrir al presionar Ver consejos.
        botonAbrirModal.addEventListener("click", abrirModal);

        // Cerrar al presionar la X.
        if (botonCerrarModal) {
            botonCerrarModal.addEventListener("click", cerrarModal);
        }

        // Cerrar al presionar Entendido.
        if (botonEntendido) {
            botonEntendido.addEventListener("click", cerrarModal);
        }

        /* ======================================
           19.4. CERRAR AL PRESIONAR FUERA
           ====================================== */

        fondoModal.addEventListener("click", function (e) {

            // Cerrar solamente al presionar el fondo.
            if (e.target === fondoModal) {
                cerrarModal();
            }
        });

        /* ======================================
           19.5. TECLA ESC Y NAVEGACIÓN
           ====================================== */

        document.addEventListener("keydown", function (e) {

            // No ejecutar si la ventana está cerrada.
            if (fondoModal.hidden) return;

            // Cerrar al presionar Escape.
            if (e.key === "Escape") {
                e.preventDefault();
                cerrarModal();
                return;
            }

            // Mantener la navegación dentro de la ventana.
            if (e.key === "Tab") {

                const elementos = Array.from(
                    ventanaModal.querySelectorAll(
                        'button:not([disabled]), a[href], input:not([disabled]), [tabindex]:not([tabindex="-1"])'
                    )
                ).filter(function (elemento) {
                    return elemento.getClientRects().length > 0;
                });

                if (elementos.length === 0) {
                    e.preventDefault();
                    ventanaModal.focus();
                    return;
                }

                const primero = elementos[0];
                const ultimo = elementos[elementos.length - 1];

                if (e.shiftKey && document.activeElement === primero) {
                    e.preventDefault();
                    ultimo.focus();
                } else if (!e.shiftKey && document.activeElement === ultimo) {
                    e.preventDefault();
                    primero.focus();
                }
            }
        });
    }

});

/* ==========================================
   FIN DEL ARCHIVO PRINCIPAL DE JAVASCRIPT
   ========================================== */
