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
                    <img src="./img/portadanosotros.png" alt="Festival team working" class="hero-image" loading="eager">
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
    </section>

    <!-- ============================================
         EQUIPO ORGANIZADOR PRINCIPAL
         ============================================ -->
    <section class="team-section" id="equipo" aria-labelledby="team-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Conoce al equipo</span>
                <h2 id="team-title" class="section-title">Equipo Organizador Principal</h2>
            </header>

            <div class="team-grid" role="list">
                <!-- María González -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-content">
                        <h3 class="team-name">María González</h3>
                        <p class="team-role">Directora General</p>
                        <p class="team-meta">18 años experiencia</p>
                        <p class="team-desc">Productora ejecutiva con trayectoria en festivales internacionales (Lollapalooza Chile, Estéreo Picnic, Vive Latino). Lidera la visión estratégica, negociación de headliners y coordinación general del Festival Urbano desde su conceptualización en 2023.</p>
                    </div>
                </article>

                <!-- Diego Herrera -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-content">
                        <h3 class="team-name">Diego Herrera</h3>
                        <p class="team-role">Director Marketing</p>
                        <p class="team-meta">Comunicación Digital</p>
                        <p class="team-desc">Estratega digital especializado en entretenimiento y música. Diseña campañas 360° que conectan al festival con millones de fans: social media, influencers, PR, email marketing, paid media. Crecimiento orgánico 400% año a año.</p>
                    </div>
                </article>

                <!-- Sofía Jiménez -->
                <article class="team-card reveal" role="listitem">
                    <div class="team-card-content">
                        <h3 class="team-name">Sofía Jiménez</h3>
                        <p class="team-role">Directora Financiera</p>
                        <p class="team-meta">Patrocinios & Ventas</p>
                        <p class="team-desc">Gestiona la viabilidad económica, presupuesto de $2M+, patrocinios estratégicos y alianzas comerciales. Negoció acuerdos con marcas globales y locales. Experta en modelos de revenue: ticketing, sponsorship, merch, hospitality, broadcasting.</p>
                    </div>
                </article>

                </section>

    <!-- ============================================
         EQUIPO EXTENDIDO
         ============================================ -->
    <section class="extended-team" aria-labelledby="extended-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Especialistas</span>
                <h2 id="extended-title" class="section-title">Equipo Extendido Clave</h2>
            </header>

            <div class="extended-grid" role="list">
                <article class="extended-card reveal" role="listitem">
                    <h3>Producción Técnica</h3>
                    <div class="extended-meta">
                        <span>Sonido: Meyer Sound</span>
                        <span>Luces: GrandMA3</span>
                        <span>Video: ROE Visual</span>
                    </div>
                    <p>Equipo técnico de 50+ personas: ingenieros FOH/monitores, lighting designers, video operators, riggers certificados. Rider técnico de clase mundial para cada headliner.</p>
                </article>

                <article class="extended-card reveal" role="listitem">
                    <h3>Servicios Médicos</h3>
                    <div class="extended-meta">
                        <span>Hospital CIMA</span>
                        <span>Cruz Roja</span>
                        <span>24/7</span>
                    </div>
                    <p>Punto médico principal (carpa 100m²), 4 puestos avanzados, 2 ambulancias medicalizadas, 15 paramédicos, 5 médicos, 10 enfermeros. Protocolo triage, evacuación aérea coordinada.</p>
                </article>

                <article class="extended-card reveal" role="listitem">
                    <h3>Tecnología & Ticketing</h3>
                    <div class="extended-meta">
                        <span>QR Dinámicos</span>
                        <span>Anti-fraude</span>
                        <span>App Oficial</span>
                    </div>
                    <p>Plataforma propia de ticketing con QR dinámicos rotativos, validación offline, transferencia P2P, reventa controlada. App oficial: mapa interactivo, horarios, notificaciones push, chat soporte.</p>
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
            </header>

            <div class="mission-grid" role="list">
                <article class="mission-card reveal" role="listitem">
                    <h3>Democratizar el Acceso</h3>
                    <p>Llevar artistas de talla mundial a precios accesibles (desde ₡25,000) para que la música urbana de calidad no sea un lujo, sino un derecho cultural para la juventud costarricense. Becas para estudiantes de arte/música.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <h3>Posicionar a Costa Rica</h3>
                    <p>Consolidar al país como plaza obligatoria en giras internacionales de artistas urbanos, generando turismo (estimado 3,000 visitantes internacionales), empleo directo/indirecto (500+ puestos) y proyección país marca.</p>
                </article>

                <article class="mission-card reveal" role="listitem">
                    <h3>Crear Comunidad Segura</h3>
                    <p>Fomentar espacios de encuentro seguro e inclusivo donde la música sea el lenguaje universal que une a personas de diferentes orígenes, géneros, identidades y realidades. Protocolo anti-acoso certificado.</p>
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
            </header>

            <div class="sponsors-grid" role="list">
                <article class="sponsor-card reveal" role="listitem">
                    <h3>Cerveza Imperial</h3>
                    <p>Patrocinador Principal · Bebida Oficial · Zona VIP</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Kolbi (ICE)</h3>
                    <p>Conectividad Oficial · 5G en Estadio · App Festival · WiFi Gratis</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>BAC Credomatic</h3>
                    <p>Medio de Pago Oficial · Preventa Exclusiva · 3 Cuotas Sin Intereses · 10% Dto</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Uber</h3>
                    <p>Transporte Oficial · Zona Pick-up/Drop-off · Promo FESTIVAL20</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Spotify</h3>
                    <p>Playlist Oficial · Experiencia Fan · Canvas Artistas · Pre-save</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>JW Marriott</h3>
                    <p>Hotel Oficial · Hospedaje Artistas/Staff · Cena Gala · After Party</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Teletica / TD+</h3>
                    <p>Media Partner · Transmisión En Vivo · Cobertura Pre/Post · Documental</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Hospital CIMA</h3>
                    <p>Servicio Médico Oficial · Punto Médico 24h · Ambulancias · Staff Certificado</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Grupo ICE / CNFL</h3>
                    <p>Energía Oficial · Generadores Backup · Iluminación LED · Eficiencia Energética</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Transportes Rojas</h3>
                    <p>Buses Oficiales · 5 Rutas GAM · Ida/Vuelta · Accesibilidad</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Food Partners</h3>
                    <p>15+ Food Trucks Curados · Opciones Veganas/Sin Gluten · Calidad Certificada</p>
                </article>

                <article class="sponsor-card reveal" role="listitem">
                    <h3>Mercado Urbano</h3>
                    <p>Artesanos Locales · Merch Oficial · Arte Urbano · Tatuajes Temporales</p>
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
                    <h3>Seguridad Física</h3>
                    <p>300 guardias privados certificados + 50 Fuerza Pública + 20 Bomberos. Control accesos con 20 arcos detectores + revisión manual. Cámaras 360° con IA. Perímetro asegurado 48h antes.</p>
                </article>

                <article class="security-card reveal" role="listitem">
                    <h3>Médico Hospital CIMA</h3>
                    <p>Punto principal 100m² + 4 puestos avanzados + 2 ambulancias medicalizadas. 15 paramédicos, 5 médicos, 10 enfermeros. Triaje, estabilización, evacuación aérea coordinada.</p>
                </article>

                <article class="security-card reveal" role="listitem">
                    <h3>Hidratación y Bienestar</h3>
                    <p>8 puntos agua gratis (bidones reciclables). Zona "Chill Out" VIP con A/C, sillones, cargadores. Staff "Wellness" identificado (chaleco verde) para asistencia.</p>
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