

document.addEventListener('DOMContentLoaded', () => { //Esta secccion lo que realiza es cargar toda la estructura antes de poder trabajarla (DOOM)
    const btnMenu = document.querySelector("#btnMenu"); //Se define las constantes en el sistema con id unico
    const menu = document.querySelector(".menu");//Se declara la variable buscando la clase .menu en el css

    if (btnMenu && menu) {//se declara la condicional que se ejecuta siempre y cuando ambas se cumplan
        btnMenu.addEventListener("click", () => { //el boton esta escuchando y esperando la accion click
            menu.classList.toggle("abierto");//Si la clase no tiene clase abierto la agrega
            btnMenu.classList.toggle("activo");//Si la clase no tiene abierto la agrega
            const isOpen = menu.classList.contains("abierto"); //Se utiliza para deterinar una constante y comprueba si tiene una clase determinada
            btnMenu.setAttribute("aria-expanded", isOpen);//setAtribute busca dentro del etiquete de esta forma con el area expanded determina que 
            //desplega informacion ocualta y guardando si es true o false
        });

        // Cerrar menú al seleccionar un enlace
        const enlaces = menu.querySelectorAll("a");//Se esuna constan que selecciona todos los enlaces que coincidan y los guarda en la constante enlaces
        enlaces.forEach(enlace => {//Se utiliza para recorrer todos los enlaces del arreglo formulado
            enlace.addEventListener("click", () => { //el boton esta escuchando y esperando la accion click
                menu.classList.remove("abierto"); //Se utiliza forzar y retirar la clase abierto del menu
                btnMenu.classList.remove("activo"); //Se utiliza forzar y retirar la clase activo del boton
                btnMenu.setAttribute("aria-expanded", "false"); //Actualiza el atributo de accesibilidad para indicar que el menú está cerrado
            });
        });
    }

    // SCROLL REVEAL ANIMATIONS ANIMAICION DE APARICION DE LAS CARDS

    const revealElements = document.querySelectorAll('.reveal, .exp-card, .artist-card, .ticket-card, .location-card, .overlap-card, .section-header');
    //se define la constante y se seleccionan todos lo elementos que que coincidan con esa clases

    const revealObserver = new IntersectionObserver((entries) => {//esta funciona declara la constante que almacena el vigilante
        //IntersectionObserver es la herramienta nativa de java que permite vigiliar la visibilidad en pantalla con el entries se ejecuta cada que el articulo vigilado aparezca
        entries.forEach(entry => { //Se utiliza en esta seccion para recorrer todo el arreglo de los elementos observados
            if (entry.isIntersecting) { //como esto se compara si el elemento esta entrando o ya esta dentro del area observable
                entry.target.classList.add('visible'); //Con esta seccion se complementa la seccion del CSS en la cual la establece como visible
                revealObserver.unobserve(entry.target); //Con esta seccion deja de observar la animacion para que no se active nuevamente si ya aparecio
            }
        });
    }, {
        threshold: 0.1, //en este caso lo que se realiza es que el observador vea el objeto cuando este lleve un 10 porciento de colision con el area observable
        rootMargin: '0px 0px -50px 0px' //con respecto a esto lo que realiza modifica el area de observacion retrasando ligeramente el ingreso
    });

    revealElements.forEach(el => { //Se utiliza para recorrer todos los elementos del arreglo seleccionados
        el.classList.add('reveal'); //Con esto agrega al elemento la clase revelar en el css para que se muestre
        revealObserver.observe(el); //De esta forma se registra en el observador para que al ingresar active la clase
    });


    // . CONTADOR TEMPORIZADOR

    function initCountdown() { //Se declara la funcion a utilizar con el contador en el sistema
        // Festival date: December 12, 2026 16:00 (Costa Rica time UTC-6)
        const festivalDate = new Date('2026-12-12T16:00:00-06:00').getTime();//Se declara la constante de la fecha a utilizar con su respesectiva estructura
        const daysEl = document.getElementById('days'); //Se declara la variable que se tomara en cuenta los dias restantes
        const hoursEl = document.getElementById('hours'); //Se declara la variable que se tomara en cuenta las horas restantes
        const minutesEl = document.getElementById('minutes'); //Se declara la variable que se tomara en cuenta los minutos restantes
        const secondsEl = document.getElementById('seconds'); //Se declara la variable que se tomara en cuenta los segundos restantes

        if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return; //Se utiliza para comparar que no falte ningun dato si no, no se ejecuta

        function updateCountdown() {//En este caso sera la funcion que aplicara los calculos para el contador
            const now = new Date().getTime(); //Se utiliza para tomar la hora y fecha del dispositivo y convertirla a milisegundos
            const distance = festivalDate - now; //Realiza el calculo con la constante ditance para calcular la diferencia de la fecha actual y la fecha establecida

            if (distance < 0) {  //Comopara si la fecha del festival ya paso, si esto es asi asigna ceros en todos los contenedores anteriores
                // Festival started or passed
                daysEl.textContent = '00';
                hoursEl.textContent = '00';
                minutesEl.textContent = '00';
                secondsEl.textContent = '00';
                return; //finalizando el proceso
            }
            // Si ditance es mayor realiza los calculos matematicos  de esta forma el sistema va redondeando hacia abajo
            const days = Math.floor(distance / (1000 * 60 * 60 * 24)); //Se utiliza para calcular los dias
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); //Se utiliza para calcular las horas
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)); //Se utiliza para calcular los minutos
            const seconds = Math.floor((distance % (1000 * 60)) / 1000); //Se utiliza para calcular los segundos


            // Animate number changes 
            animateNumber(daysEl, days); //Se llama a la funcion de animacion de numero lo que muestra dos parametros el elemento que se debe modificar y el numero numero calculado
            animateNumber(hoursEl, hours); //Se llama a la funcion de animacion de numero lo que muestra dos parametros el elemento que se debe modificar y el numero numero calculado
            animateNumber(minutesEl, minutes); //Se llama a la funcion de animacion de numero lo que muestra dos parametros el elemento que se debe modificar y el numero numero calculado
            animateNumber(secondsEl, seconds); //Se llama a la funcion de animacion de numero lo que muestra dos parametros el elemento que se debe modificar y el numero numero calculado
        }

        function animateNumber(el, newValue) { // en este caso se define la funcion para la animacion y el seria el elemneto que contiene el numuero y el nuevo valor a usar
            const str = String(newValue).padStart(2, '0'); // de esta forma convierte el numero calculo a texto y lo fuerza a tener dos digitos agregando ceros a la izquierda
            if (el.textContent !== str) { //Se utiliza para comprar si los numeros son diferentes con los que se muestran
                el.style.transform = 'translateY(-10px)'; //si esto es correcto realiza la animacion de traslazar en el eje y 10 pixeles
                el.style.opacity = '0'; // realiza que el numero sea totlmente transparente durante 100 milisegundos el parpadeo que se visualiza al cambiar el numero
                setTimeout(() => { //se programa la funcion que se ejecuta despues de un tiempo determinado
                    el.textContent = str; //Esta seccion actualiza el numero que se muestra en pantalla
                    el.style.transform = 'translateY(0)'; //Regresa el numero a su posicion original en pantalla
                    el.style.opacity = '1'; //realiza la recupoeracion total de su opacidad
                }, 100); //establece el retraso de 100 milisegundo en el proceso 0.1 segundos
            }
        }

        // Initial update
        updateCountdown(); //se utiliza al cargar la pagina inicialmente ya que actualiza inmediatamente
        // Update every second
        setInterval(updateCountdown, 1000); //esto se ejecuta la funcion cada segundo para su actualizacion continua
    }
    initCountdown(); //llama a la funcion inicial para comenzar con todo el proceso del contador


    // TARJETAS DE ARTISTAS se generan desde el arreglo

    const artistsData = [
        {
            name: 'Feid',
            genre: 'Reggaetón · Pop Latino',
            image: './img/Feid.jpg',
            badge: 'HEADLINER',
            time: '21:30 · Escenario Principal',
            description: 'El "Ferxxo" llega con sus éxitos mundiales: Feliz Cumpleaños Ferxxo, Hey Mor, Luna, Classy 101. El artista colombiano más escuchado del momento.'
        },
        {
            name: 'Milo J',
            genre: 'Trap · R&B · Reggaetón',
            image: './img/Milo J.jpg',
            badge: 'ESTRELLA',
            time: '20:00 · Escenario Principal',
            description: 'La joven promesa argentina que conquista Latinoamérica. Hits como "Fruto", "Rara Vez", "Dispara" y su álbum "166".'
        },
        {
            name: 'Álvaro Díaz',
            genre: 'Urbano · Alternativo · Latino',
            image: './img/AlvaroDiaz.jpg',
            badge: 'ESTRELLA',
            time: '18:30 · Escenario Principal',
            description: 'El puertorriqueño revoluciona la escena con su estilo único. Éxitos: "Problema", "Feliz", "Quizás", y su aclamado álbum "FELICISÍMO".'
        },
        {
            name: 'Nicki Nicole',
            genre: 'R&B · Trap · Pop',
            image: './img/NICOLE.jpg',
            badge: 'INVITADA',
            time: '17:15 · Escenario Principal',
            description: 'La argentina que fusiona R&B, trap y pop como nadie. Colaboraciones con Bizarrap, Duki, Bad Bunny. Álbum "Parte De Mí".'
        },
        {
            name: 'Duki',
            genre: 'Trap · Reggaetón',
            image: './img/duki.jpg',
            badge: 'INVITADO',
            time: '19:45 · Escenario Principal',
            description: 'El referente del trap argentino. "Goteo", "She Don\'t Give a FO", "Hitboy". Llenó estadios en toda Latinoamérica y España.'
        },
        {
            name: 'Tiago PZK',
            genre: 'Reggaetón · Pop · Urbano',
            image: './img/THIAGO.png',
            badge: 'APERTURA',
            time: '16:15 · Escenario Principal',
            description: 'Revelación argentina del 2023. "Entre Nosotros", "Salimo de Noche", "Cerca de Ti". Millones de streams globales.'
        },
        {
            name: 'Bizarrap',
            genre: 'Producer · Sesiones · Global',
            image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400&h=300&fit=crop&crop=face',
            badge: 'SORPRESA',
            time: '22:30 · Aparición Especial',
            description: 'El productor argentino #1 mundial. Music Sessions con Shakira, Quevedo, Residente, Peso Pluma. Aparición sorpresa confirmada.'
        },
        {
            name: 'Escenario Electrónico',
            genre: 'House · Techno · EDM',
            image: 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=400&h=300&fit=crop',
            badge: 'CONTINUO',
            time: '16:00 - 02:00 · Escenario Secundario',
            description: 'DJ Sets continuos con los mejores DJs locales e internacionales. Warm up, peak time y after party en un solo escenario.'
        }
    ];
//CARRUSEL GENERACION 
    function renderArtistsCarousel() {//Crea la funcion para la generacion del carrusel del artista contendor HTML
        const track = document.getElementById('artistsTrack'); //busca el elemento HTML que tiene de id ArtistsTrack
        if (!track) return; //Si no existe esta funcion la finaliza automaticamente en el sistema

        //Track es el contenedor inicial se utiliza para recorrer todos lo elementos almacenados en artistsdata
        //la funcion .map genera un elemento nuevo por cada artista en este caso lo ingresa al index
        track.innerHTML = artistsData.map((artist, index) => ` 
            <article class="artist-card reveal" style="transition-delay: ${index * 0.08}s" role="listitem"> 
                <div class="artist-card-media">
                    <img src="${artist.image}" alt="${artist.name}" loading="lazy">
                    <span class="artist-card-badge">${artist.badge}</span>
                </div>
                <div class="artist-card-content">
                    <h3 class="artist-card-name">${artist.name}</h3>
                    <span class="artist-card-genre">${artist.genre}</span>
                    <p class="artist-card-desc">${artist.description}</p>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); color: var(--text-muted); font-size: var(--fs-sm);">
                        🕐 ${artist.time}
                    </div>
                </div>
            </article>
        `).join('');//se utiliza para unificar las tarjetas en un texto HTML

        // Re-observe new elements for scroll reveal
        track.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el)); //Se recicla el proceso de observador y recorre todas los elementos del arreglo
        //Observa el elemento cuando entre en pantalla para animarlo correspondientemente

        // Initialize carousel after rendering
        initArtistsCarousel(); //inicializacion del carrusel
    }

    // Carousel logica
function initArtistsCarousel() {// Se define la funcion a utilizar
    const track = document.getElementById('artistsTrack'); //Se utiliza para extraer informacion del HTML tarjetas
    const dotsContainer = document.getElementById('artistsDots'); //Se utiliza para extraer informacion del HTML indicadores inferiores

    if (!track || !dotsContainer) return; //valida que todos existan si no finaliza la funcion

    const cards = [...track.querySelectorAll('.artist-card')]; //busca todas las tarjetas que tengan la clase dentro de track

    if (!cards.length) return; //si no existen finaliza el proceso para evitar errores

    let currentIndex = 0; //Almacena la posicion de la tarjeta actual se utiliza let porque el valor cambia
    
}
    renderArtistsCarousel();

    // PROGRAMA DE ACTIVIDADES - GENERADO DESDE ARREGLO


    const actividadesData = [
        {
            hora: '16:00',
            actividad: 'Apertura de puertas y bienvenida',
            responsable: 'Organización del festival',
            categoria: 'Escenario principal'
        },
        {
            hora: '16:15',
            actividad: 'Presentación de Tiago PZK',
            responsable: 'Artista invitado',
            categoria: 'Escenario principal'
        },
        {
            hora: '17:15',
            actividad: 'Presentación de Nicki Nicole',
            responsable: 'Artista invitada',
            categoria: 'Escenario principal'
        },
        {
            hora: '18:30',
            actividad: 'Presentación de Álvaro Díaz',
            responsable: 'Artista invitado',
            categoria: 'Escenario principal'
        },
        {
            hora: '19:45',
            actividad: 'Presentación de Duki',
            responsable: 'Artista invitado',
            categoria: 'Escenario principal'
        },
        {
            hora: '20:00',
            actividad: 'Presentación de Milo J',
            responsable: 'Artista invitado',
            categoria: 'Escenario principal'
        },
        {
            hora: '21:30',
            actividad: 'Concierto principal de FEID',
            responsable: 'Artista principal',
            categoria: 'Headliner'
        },
        {
            hora: '22:30',
            actividad: 'Presentación especial de Bizarrap',
            responsable: 'Invitado sorpresa',
            categoria: 'Escenario principal'
        },
        {
            hora: '23:30',
            actividad: 'Cierre principal y After Party',
            responsable: 'Organización y DJ invitado',
            categoria: 'Dos escenarios'
        },
    ];

    // Genera las tarjetas del programa en servicios.php.
    function pintarActividades(lista) { //se genera la funcion para poder utilizar las actividades en servicios

        const contenedor = document.querySelector('#contenedorActividades'); //selecciona 

        // En otras páginas no existe este contenedor; no se ejecuta nada.
        if (!contenedor) return;

        contenedor.innerHTML = ''; //Primero limpia el contenedor para proceder con las asignaciones

        lista.forEach((actividad, index) => { //Se recorre todos los elementos que tenga la etiqueta actividad en el index

            const card = document.createElement('article'); //Se genera la consntate y se crea la seccion de articulo para almacenar las tarjetas
            card.className = 'lineup-card reveal'; // en este caso indetifica visualmente la tarjeta y permite aplicarle efectos del CSS
            card.style.transitionDelay = `${index * 0.10}s`; //Se utiliza para retrasar la animacion de aparicion en pantalla 

            card.innerHTML = `
                <div class="lineup-card-content">
                    <span class="lineup-card-time">
                        ${actividad.hora}
                    </span>

                    <h3>${actividad.actividad}</h3>

                    <p>${actividad.responsable}</p>

                    <span class="lineup-card-category">
                        ${actividad.categoria}
                    </span>
                </div>
            `;

            contenedor.appendChild(card); //Iserta el elemento dentro del contenedor CARD antes solo existia en memoria

            // Activa la animación de aparición de cada tarjeta cuando este dentro del campo observable
            revealObserver.observe(card);
        });
    }

    // Ejecutar la generación de las 9 actividades.
    pintarActividades(actividadesData);

// ACCORDION HANDLING

function initAccordion() {//Se inicializa la funcion a utilizar

    const accordionHeaders = document.querySelectorAll('.accordion-header'); //Se define la variable a utilizar en el sistema y se selecciona todas las preguntas del acordeon
    const accordionItems = document.querySelectorAll('.accordion-item'); //Se define la variable a utilizar y se selecciona todos los elementos del acordeon preguntas y respuestas

    accordionHeaders.forEach(header => { //se recorre todo las preguntas del arreglo

        header.addEventListener('click', () => { //La pregunta reaccion con la accion clic en el sobre ella

            const item = header.closest('.accordion-item'); //busca el elemento padre más cercano con la clase .accordion-item.

            if (!item) return; //Si no encuentra ninguno, termina la ejecución para evitar errores.

            const isOpen = item.classList.contains('active'); //Si la tiene, significa que está abierto. Si no la tiene, significa que está cerrado.

            // Cerrar los demás
            accordionItems.forEach(other => { //se recorre todo las preguntas del arreglo

                if (other !== item) { //se revisan los demas

                    other.classList.remove('active'); //se cierran los que no son seleccionados retirando el active de la clase

                    const otherHeader =
                        other.querySelector('.accordion-header'); //Se selecciona la pregunta correspondeinte a cada elemento

                    if (otherHeader) { //revisa que otro otherheader no este vacio
                        otherHeader.setAttribute(// si lo anterior es correcto ejecuta las instrucciones dentro del if
                            'aria-expanded', //lo reasigna de area expanded a false
                            'false'
                        );
                    }
                }
            });

            // Abrir o cerrar actual
            item.classList.toggle('active', !isOpen); //Valida y compara dependiendo del estado anterior 
            // si anteriormente tenia false agrega active, si tenia active agrega false

            header.setAttribute( //actualiza el atributo de la pregunta seleccionada
                'aria-expanded',
                !isOpen
            );

        });
    });

}
initAccordion(); //ejecuta la funcion para poder ejecutar el acordeon
})