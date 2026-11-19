<?php
$tituloPagina = "NOSOTROS | FESTIVAL URBANO 2026";
include "header.php";
?>

<main>

    <!-- ============================================
         HERO NOSOTROS - Cinematic Split
         ============================================ -->
    <section class="hero hero-nosotros" aria-labelledby="nosotros-hero-title">
        <div class="hero-bg" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=1600&h=900&fit=crop" alt="" loading="eager">
            <div class="hero-overlay"></div>
            <div class="hero-gradient-left"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-tags">
                    <span class="tag">Equipo</span>
                    <span class="tag">Pasión</span>
                </div>

                <h1 id="nosotros-hero-title" class="hero-title">
                    <span class="title-line">CONOCE A LOS</span>
                    <span class="title-line">ORGANIZADORES</span>
                </h1>

                <p class="hero-script">Detrás de cada gran festival hay un equipo apasionado que lo hace posible</p>

                <div class="hero-buttons">
                    <a href="#equipo" class="btn btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="12 5 19 12 12 19"></polyline></svg>
                        <span>Ver equipo</span>
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=800&h=1000&fit=crop" alt="Festival team working" class="hero-image" loading="eager">
                </div>

                <aside class="floating-card floating-card-stats" aria-label="Años de experiencia">
                    <div class="floating-card-bg"></div>
                    <div class="floating-card-content">
                        <div class="stat-large">
                            <div class="stat-number" data-count="18">0</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <p class="stat-label">Años de experiencia promedio</p>
                        <p class="stat-sub">Produciendo eventos de clase mundial</p>
                    </div>
                </aside>
            </div>
        </div>

        <div class="scroll-indicator" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
        </div>
    </section>

    <!-- ============================================
         EQUIPO ORGANIZADOR PRINCIPAL
         ============================================ -->
    <section class="team-section" id="equipo" aria-labelledby="team-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Conoce al equipo</span>
                <h2 id="team-title" class="section-title">Equipo Organizador Principal</h2>
                <p class="section-desc">Profesionales con 10-20 años de experiencia en producción de eventos masivos internacionales</p>
            </header>

            <div class="team-grid" role="list">
                <!-- María González -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">👑</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">María González</h3>
                        <p class="team-role">Directora General</p>
                        <p class="team-meta">18 años experiencia</p>
                        <p class="team-desc">Productora ejecutiva con trayectoria en festivales internacionales (Lollapalooza Chile, Estéreo Picnic, Vive Latino). Lidera la visión estratégica, negociación de headliners y coordinación general del Festival Urbano desde su conceptualización en 2023.</p>
                    </div>
                </article>

                <!-- Carlos Rodríguez -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🎭</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">Carlos Rodríguez</h3>
                        <p class="team-role">Director Artístico</p>
                        <p class="team-meta">Booking & Talento</p>
                        <p class="team-desc">Responsable de la curaduría artística y negociación directa con agencias internacionales (UTA, CAA, WME). Ha traído a Latinoamérica a los mayores exponentes del género urbano: Bad Bunny, J Balvin, Karol G, Rosalía. Experto en routing de giras.</p>
                    </div>
                </article>

                <!-- Ana Martínez -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">⚙️</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">Ana Martínez</h3>
                        <p class="team-role">Directora Operaciones</p>
                        <p class="team-meta">Logística & Producción</p>
                        <p class="team-desc">Experta en logística de eventos de 20,000+ asistentes. Coordina montaje (72h), desmontaje (24h), permisos municipales, bomberos, salud, seguridad privada, policía, tránsito. Certificada en gestión de riesgos y protección civil.</p>
                    </div>
                </article>

                <!-- Diego Herrera -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">📱</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">Diego Herrera</h3>
                        <p class="team-role">Director Marketing</p>
                        <p class="team-meta">Comunicación Digital</p>
                        <p class="team-desc">Estratega digital especializado en entretenimiento y música. Diseña campañas 360° que conectan al festival con millones de fans: social media, influencers, PR, email marketing, paid media. Crecimiento orgánico 400% año a año.</p>
                    </div>
                </article>

                <!-- Sofía Jiménez -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #B58AFF 100%);">💰</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">Sofía Jiménez</h3>
                        <p class="team-role">Directora Financiera</p>
                        <p class="team-meta">Patrocinios & Ventas</p>
                        <p class="team-desc">Gestiona la viabilidad económica, presupuesto de $2M+, patrocinios estratégicos y alianzas comerciales. Negoció acuerdos con marcas globales y locales. Experta en modelos de revenue: ticketing, sponsorship, merch, hospitality, broadcasting.</p>
                    </div>
                </article>

                <!-- Roberto Vargas -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-media">
                        <div class="team-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #8B4DFF 100%);">🛡️</div>
                    </div>
                    <div class="team-card-content">
                        <h3 class="team-name">Roberto Vargas</h3>
                        <p class="team-role">Jefe de Seguridad</p>
                        <p class="team-meta">Protección Civil</p>
                        <p class="team-desc">Coordinador de seguridad integral. Diseña planes de emergencia, evacuación, control de accesos, gestión de multitudes. Coordina 300+ guardias privados, 50 policías, 20 bomberos, 15 paramédicos. Ex-jefe seguridad presidencial.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         EQUIPO EXTENDIDO
         ============================================ -->
    <section class="extended-team" aria-labelledby="extended-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Especialistas</span>
                <h2 id="extended-title" class="section-title">Equipo Extendido Clave</h2>
                <p class="section-desc">Especialistas que hacen posible cada detalle</p>
            </header>

            <div class="extended-grid" role="list">
                <article class="extended-card reveal" role="listitem">
                    <div class="extended-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🎵</div>
                    <h3>Producción Técnica</h3>
                    <div class="extended-meta">
                        <span>Sonido: Meyer Sound</span>
                        <span>Luces: GrandMA3</span>
                        <span>Video: ROE Visual</span>
                    </div>
                    <p>Equipo técnico de 50+ personas: ingenieros FOH/monitores, lighting designers, video operators, riggers certificados. Rider técnico de clase mundial para cada headliner.</p>
                </article>

                <article class="extended-card reveal" role="listitem">
                    <div class="extended-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🏥</div>
                    <h3>Servicios Médicos</h3>
                    <div class="extended-meta">
                        <span>Hospital CIMA</span>
                        <span>Cruz Roja</span>
                        <span>24/7</span>
                    </div>
                    <p>Punto médico principal (carpa 100m²), 4 puestos avanzados, 2 ambulancias medicalizadas, 15 paramédicos, 5 médicos, 10 enfermeros. Protocolo triage, evacuación aérea coordinada.</p>
                </article>

                <article class="extended-card reveal" role="listitem">
                    <div class="extended-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">🌐</div>
                    <h3>Tecnología & Ticketing</h3>
                    <div class="extended-meta">
                        <span>QR Dinámicos</span>
                        <span>Anti-fraude</span>
                        <span>App Oficial</span>
                    </div>
                    <p>Plataforma propia de ticketing con QR dinámicos rotativos, validación offline, transferencia P2P, reventa controlada. App oficial: mapa interactivo, horarios, notificaciones push, chat soporte.</p>
                </article>

                <article class="extended-card reveal" role="listitem">
                    <div class="extended-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">🌱</div>
                    <h3>Sostenibilidad</h3>
                    <div class="extended-meta">
                        <span>Carbono Neutro</span>
                        <span>Residuo Cero</span>
                        <span>Comunidad Local</span>
                    </div>
                    <p>Compensación huella de carbono (reforestación), vasos reutilizables, separación residuos 5 flujos, compostaje orgánico, proveedores 80% locales, empleo 200+ personas comunidad aledaña.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         MISIÓN Y OBJETIVOS
         ============================================ -->
    <section class="mission-section" aria-labelledby="mission-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Nuestra brújula</span>
                <h2 id="mission-title" class="section-title">Nuestra Misión y Objetivos</h2>
                <p class="section-desc">Más que un festival, una plataforma cultural transformadora</p>
            </header>

            <div class="mission-grid" role="list">
                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🎯</div>
                    <h3>Democratizar el Acceso</h3>
                    <p>Llevar artistas de talla mundial a precios accesibles (desde ₡25,000) para que la música urbana de calidad no sea un lujo, sino un derecho cultural para la juventud costarricense. Becas para estudiantes de arte/música.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🌎</div>
                    <h3>Posicionar a Costa Rica</h3>
                    <p>Consolidar al país como plaza obligatoria en giras internacionales de artistas urbanos, generando turismo (estimado 3,000 visitantes internacionales), empleo directo/indirecto (500+ puestos) y proyección país marca.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">🤝</div>
                    <h3>Crear Comunidad Segura</h3>
                    <p>Fomentar espacios de encuentro seguro e inclusivo donde la música sea el lenguaje universal que une a personas de diferentes orígenes, géneros, identidades y realidades. Protocolo anti-acoso certificado.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">🌱</div>
                    <h3>Sostenibilidad Real</h3>
                    <p>Primer festival urbano carbono neutro en Centroamérica. Gestión integral de residuos, proveedores locales, responsabilidad social con comunidades aledañas (becas, mejoras infraestructura, empleo local).</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #B58AFF 100%);">🎨</div>
                    <h3>Impulsar Talento Local</h3>
                    <p>Escenario "Nueva Onda" 100% artistas costarricenses emergentes. Talleres gratuitos de producción musical, gestión cultural, técnica escénica. Convocatoria abierta transparente con jurado experto.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <div class="mission-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #8B4DFF 100%);">🔄</div>
                    <h3>Legado Anual</h3>
                    <p>No es un evento único: construimos una franquicia sostenible anual. Cada edición crece en alcance, impacto y calidad. Reinversión de utilidades en comunidad, infraestructura y talento emergente.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         PATROCINADORES Y ALIADOS
         ============================================ -->
    <section class="sponsors-section" aria-labelledby="sponsors-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Aliados estratégicos</span>
                <h2 id="sponsors-title" class="section-title">Patrocinadores y Aliados</h2>
                <p class="section-desc">Marcas que confían y hacen posible esta experiencia de clase mundial</p>
            </header>

            <div class="sponsors-grid" role="list">
                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🍺</div>
                    <h3>Cerveza Imperial</h3>
                    <p>Patrocinador Principal · Bebida Oficial · Zona VIP</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">📱</div>
                    <h3>Kolbi (ICE)</h3>
                    <p>Conectividad Oficial · 5G en Estadio · App Festival · WiFi Gratis</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">💳</div>
                    <h3>BAC Credomatic</h3>
                    <p>Medio de Pago Oficial · Preventa Exclusiva · 3 Cuotas Sin Intereses · 10% Dto</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">🚗</div>
                    <h3>Uber</h3>
                    <p>Transporte Oficial · Zona Pick-up/Drop-off · Promo FESTIVAL20</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #B58AFF 100%);">🎧</div>
                    <h3>Spotify</h3>
                    <p>Playlist Oficial · Experiencia Fan · Canvas Artistas · Pre-save</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #8B4DFF 100%);">🏨</div>
                    <h3>JW Marriott</h3>
                    <p>Hotel Oficial · Hospedaje Artistas/Staff · Cena Gala · After Party</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">📺</div>
                    <h3>Teletica / TD+</h3>
                    <p>Media Partner · Transmisión En Vivo · Cobertura Pre/Post · Documental</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🏥</div>
                    <h3>Hospital CIMA</h3>
                    <p>Servicio Médico Oficial · Punto Médico 24h · Ambulancias · Staff Certificado</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">⚡</div>
                    <h3>Grupo ICE / CNFL</h3>
                    <p>Energía Oficial · Generadores Backup · Iluminación LED · Eficiencia Energética</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">🚌</div>
                    <h3>Transportes Rojas</h3>
                    <p>Buses Oficiales · 5 Rutas GAM · Ida/Vuelta · Accesibilidad</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #B58AFF 100%);">🍔</div>
                    <h3>Food Partners</h3>
                    <p>15+ Food Trucks Curados · Opciones Veganas/Sin Gluten · Calidad Certificada</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <div class="sponsor-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #8B4DFF 100%);">🎨</div>
                    <h3>Mercado Urbano</h3>
                    <p>Artesanos Locales · Merch Oficial · Arte Urbano · Tatuajes Temporales</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         FILOSOFÍA - 4 PILARES
         ============================================ -->
    <section class="philosophy-section" aria-labelledby="philosophy-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Valores innegociables</span>
                <h2 id="philosophy-title" class="section-title">Nuestra Filosofía: 4 Pilares</h2>
                <p class="section-desc">Cada decisión que tomamos está guiada por estos valores innegociables</p>
            </header>

            <div class="philosophy-grid" role="list">
                <article class="philosophy-card reveal" role="listitem">
                    <div class="philosophy-number">01</div>
                    <div class="philosophy-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">✨</div>
                    <h3>Excelencia Obsesiva</h3>
                    <p>Buscamos la perfección en cada detalle: sonido, iluminación, comodidad, atención, limpieza, señalética, tiempos. No conformarnos con "bueno", ir por "excepcional". Si no lo haríamos para nuestra familia, no lo hacemos.</p>
                </article>

                <article class="philosophy-card reveal" role="listitem">
                    <div class="philosophy-number">02</div>
                    <div class="philosophy-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">💙</div>
                    <h3>Pasión Auténtica</h3>
                    <p>Amamos la música urbana y lo que representa: cultura, identidad, resistencia, alegría. Esa pasión se transmite en cada correo, cada reunión, cada decisión del festival. No es un negocio, es nuestra vida.</p>
                </article>

                <article class="philosophy-card reveal" role="listitem">
                    <div class="philosophy-number">03</div>
                    <div class="philosophy-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">🔄</div>
                    <h3>Innovación Constante</h3>
                    <p>No repetimos fórmulas. Cada edición trae sorpresas, tecnología nueva, formatos frescos, artistas inesperados. Evolucionamos con la cultura, anticipamos tendencias, rompemos esquemas. Lo de ayer no sirve para mañana.</p>
                </article>

                <article class="philosophy-card reveal" role="listitem">
                    <div class="philosophy-number">04</div>
                    <div class="philosophy-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">🤲</div>
                    <h3>Integridad Radical</h3>
                    <p>Transparencia en precios, trato justo a proveedores (pago a 15 días), cumplimiento laboral y fiscal impecable, diversidad e inclusión real. Hacemos las cosas bien, aunque cueste más, aunque nadie vea.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         HISTORIA - TIMELINE
         ============================================ -->
    <section class="history-section" id="historia" aria-labelledby="history-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Nuestra trayectoria</span>
                <h2 id="history-title" class="section-title">Nuestra Historia</h2>
                <p class="section-desc">De una idea entre amigos al festival urbano más grande de Centroamérica</p>
            </header>

            <div class="timeline" role="list">
                <article class="timeline-item reveal" role="listitem">
                    <div class="timeline-marker">
                        <span class="timeline-year">2023</span>
                    </div>
                    <div class="timeline-content">
                        <h3>El Nacimiento</h3>
                        <p>Cuatro amigos de la industria musical soñaban con traer a los grandes del urbano a Costa Rica. Primera edición: 8,000 asistentes, 4 artistas, un escenario. Vendido en 3 semanas.</p>
                    </div>
                </article>

                <article class="timeline-item reveal" role="listitem">
                    <div class="timeline-marker">
                        <span class="timeline-year">2024</span>
                    </div>
                    <div class="timeline-content">
                        <h3>La Consolidación</h3>
                        <p>15,000 asistentes, 6 artistas, 2 escenarios. Primera transmisión en vivo nacional. Premio "Mejor Evento Cultural" Cámara de Turismo. Carbono neutro certificado.</p>
                    </div>
                </article>

                <article class="timeline-item reveal" role="listitem">
                    <div class="timeline-marker">
                        <span class="timeline-year">2025</span>
                    </div>
                    <div class="timeline-content">
                        <h3>Expansión Regional</h3>
                        <p>20,000 asistentes, 8 artistas internacionales + 10 locales. Gira previa por 3 países. App oficial lanzada. Meet & Greet vendido en 2 horas. Documental en producción.</p>
                    </div>
                </article>

                <article class="timeline-item reveal" role="listitem">
                    <div class="timeline-marker">
                        <span class="timeline-year">2026</span>
                    </div>
                    <div class="timeline-content">
                        <h3>Edición Actual</h3>
                        <p>Headliners: Feid, Milo J, Álvaro Díaz. Artistas sorpresa confirmados. Nueva zona VIP premium. Transmisión multiplataforma. Meta: 22,000 asistentes, impacto económico ₡1,500M+.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         TRANSPORTE
         ============================================ -->
    <section class="transport-section" id="transporte" aria-labelledby="transport-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Cómo llegar</span>
                <h2 id="transport-title" class="section-title">Transporte Oficial Detallado</h2>
            </header>

            <div class="transport-grid" role="list">
                <article class="transport-card reveal" role="listitem">
                    <div class="transport-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🚌</div>
                    <h3>Buses Oficiales</h3>
                    <p class="transport-price">₡5,000 ida/vuelta</p>
                    <p>5 rutas GAM con salidas 13:00, 14:00, 15:00, 16:00. Regreso 00:30, 01:30, 02:30. Compra anticipada web. Buses adaptados disponibles (solicitar).</p>
                </article>

                <article class="transport-card reveal" role="listitem">
                    <div class="transport-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🚗</div>
                    <h3>Uber / DiDi</h3>
                    <p class="transport-price">Zona Oficial</p>
                    <p>Pick-up/drop-off costado este estadio. Promo FESTIVAL20 (20% nuevos, 10% existentes). Tiempo estimado centro SJ: 25 min.</p>
                </article>

                <article class="transport-card reveal" role="listitem">
                    <div class="transport-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">🅿️</div>
                    <h3>Parqueo VIP</h3>
                    <p class="transport-price">Incluido VIP/M&G</p>
                    <p>1 vehículo por entrada. Acceso por portón norte. Parqueo general ₡5,000 (cupos limitados, reservar web).</p>
                </article>

                <article class="transport-card reveal" role="listitem">
                    <div class="transport-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">♿</div>
                    <h3>Accesibilidad Total</h3>
                    <p class="transport-price">Gratis para acompañantes</p>
                    <p>Buses adaptados, zona drop-off prioritaria, plataformas vista preferencial, baños adaptados, acompañante gratis (carné CONAPDIS).</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         SEGURIDAD
         ============================================ -->
    <section class="security-section" id="seguridad" aria-labelledby="security-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Tu seguridad</span>
                <h2 id="security-title" class="section-title">Seguridad y Protocolos</h2>
            </header>

            <div class="security-grid" role="list">
                <article class="security-card reveal" role="listitem">
                    <div class="security-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🛡️</div>
                    <h3>Seguridad Física</h3>
                    <p>300 guardias privados certificados + 50 Fuerza Pública + 20 Bomberos. Control accesos con 20 arcos detectores + revisión manual. Cámaras 360° con IA. Perímetro asegurado 48h antes.</p>
                </article>

                <article class="security-card reveal" role="listitem">
                    <div class="security-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🏥</div>
                    <h3>Médico Hospital CIMA</h3>
                    <p>Punto principal 100m² + 4 puestos avanzados + 2 ambulancias medicalizadas. 15 paramédicos, 5 médicos, 10 enfermeros. Triaje, estabilización, evacuación aérea coordinada.</p>
                </article>

                <article class="security-card reveal" role="listitem">
                    <div class="security-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">💧</div>
                    <h3>Hidratación y Bienestar</h3>
                    <p>8 puntos agua gratis (bidones reciclables). Zona "Chill Out" VIP con A/C, sillones, cargadores. Staff "Wellness" identificado (chaleco verde) para asistencia.</p>
                </article>

                <article class="security-card reveal" role="listitem">
                    <div class="security-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #E28CFF 100%);">📋</div>
                    <h3>Protocolos de Emergencia</h3>
                    <p>Plan evacuación 8 min. Puntos reunión señalizados. Coordinación 911, Cruz Roja, Bomberos, CNE. Simulacro previo con 500 staff. Comunicación por app push + megafonía + pantallas.</p>
                </article>
            </div>
        </div>
    </section>

</main>

<?php include "footer.php"; ?>

<!-- Section-specific animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Animate stat number in floating card
    const statNumber = document.querySelector('.floating-card-stats .stat-number');
    if (statNumber) {
        const target = parseInt(statNumber.dataset.count);
        let current = 0;
        const duration = 2000;
        const start = performance.now();

        function animate(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            current = Math.floor(target * eased);
            statNumber.textContent = current;
            if (progress < 1) requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
    }
});
</script>