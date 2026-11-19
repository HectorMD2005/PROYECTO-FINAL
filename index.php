<?php
$tituloPagina = "FESTIVAL URBANO 2026 | Siente el Sonido";
include "header.php";
?>

<main>

    <!-- ============================================
         HERO SECTION - Cinematic Split Layout
         ============================================ -->
    <section class="hero" aria-labelledby="evento-titulo">
        <div class="hero-bg" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1507838153414-b4b713384ebf?w=1600&h=900&fit=crop" alt="" loading="eager">
            <div class="hero-overlay"></div>
            <div class="hero-gradient-right"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-tags">
                    <span class="tag">Música en vivo</span>
                    <span class="tag">Buenas vibras</span>
                </div>

                <h1 id="evento-titulo" class="hero-title">
                    <span class="title-line">ECOS DE</span>
                    <span class="title-line">MEDIA NOCHE</span>
                </h1>

                <p class="hero-script">Vive el momento</p>

                <p class="hero-description">
                    Únete a miles de amantes de la música y descubre una experiencia nocturna inolvidable.
                </p>

                <div class="hero-buttons">
                    <a href="contacto.php" class="btn btn-primary">
                        <span>Conseguir entradas</span>
                        <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="5 12 19 12"></polyline><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1507838153414-b4b713384ebf?w=800&h=1000&fit=crop&crop=face" alt="Festival experience" class="hero-image" loading="eager">
                </div>

                <aside class="floating-card" aria-label="Asistentes confirmados">
                    <div class="floating-card-bg"></div>
                    <div class="floating-card-content">
                        <div class="avatars">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=60&h=60&fit=crop&crop=face" alt="" class="avatar" loading="lazy">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="" class="avatar" loading="lazy">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face" alt="" class="avatar" loading="lazy">
                            <span class="avatar-more">+12K</span>
                        </div>
                        <div class="floating-stats">
                            <div class="stat-number" data-count="12847">0</div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <div class="scroll-indicator" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
        </div>
    </section>

    <!-- ============================================
         OVERLAPPING CARDS SECTION
         ============================================ -->
    <section class="overlap-cards" aria-label="Destacados del festival">
        <div class="contenedor">

            <!-- Card 1: Experiencia Musical -->
            <article class="overlap-card card-experience">
                <div class="card-media">
                    <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=400&h=250&fit=crop" alt="Escenario festival" loading="lazy">
                    <div class="card-glow"></div>
                </div>
                <div class="card-content">
                    <span class="card-category">EXPERIENCIA MUSICAL</span>
                    <h2 class="card-title">La esencia del festival</h2>
                    <p class="card-desc">Sonido envolvente, producción de clase mundial y una curaduría artística que trasciende géneros.</p>
                    <div class="sound-waves" aria-hidden="true">
                        <span style="--i:0"></span><span style="--i:1"></span><span style="--i:2"></span>
                        <span style="--i:3"></span><span style="--i:4"></span><span style="--i:5"></span>
                    </div>
                </div>
            </article>

            <!-- Card 2: Cuenta Regresiva -->
            <article class="overlap-card card-countdown">
                <div class="card-bg-pattern" aria-hidden="true"></div>
                <div class="card-content countdown-content">
                    <span class="card-category">CUENTA REGRESIVA</span>
                    <h2 class="card-title">El festival comienza en</h2>
                    <div class="countdown" id="countdown" role="timer" aria-label="Tiempo restante para el festival">
                        <div class="countdown-item">
                            <div class="countdown-number" id="days">00</div>
                            <div class="countdown-label">Días</div>
                        </div>
                        <div class="countdown-separator" aria-hidden="true">:</div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="hours">00</div>
                            <div class="countdown-label">Horas</div>
                        </div>
                        <div class="countdown-separator" aria-hidden="true">:</div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="minutes">00</div>
                            <div class="countdown-label">Min</div>
                        </div>
                        <div class="countdown-separator" aria-hidden="true">:</div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="seconds">00</div>
                            <div class="countdown-label">Seg</div>
                        </div>
                    </div>
                    <p class="countdown-date">Sábado 12 Diciembre 2026 · 16:00 · Estadio Nacional</p>
                </div>
            </article>

            <!-- Card 3: Artistas -->
            <article class="overlap-card card-artists">
                <div class="card-content artists-content">
                    <span class="card-category">ARTISTAS</span>
                    <h2 class="card-title">Últimos artistas anunciados</h2>
                    <div class="artists-grid">
                        <div class="artist-item">
                            <img src="https://images.unsplash.com/photo-1507838153414-b4b713384ebf?w=120&h=120&fit=crop&crop=face" alt="Feid" class="artist-avatar" loading="lazy">
                            <span class="artist-name">Feid</span>
                            <span class="artist-genre">Reggaetón · Pop</span>
                        </div>
                        <div class="artist-item">
                            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161f15f7?w=120&h=120&fit=crop&crop=face" alt="Milo J" class="artist-avatar" loading="lazy">
                            <span class="artist-name">Milo J</span>
                            <span class="artist-genre">Trap · R&B</span>
                        </div>
                        <div class="artist-item">
                            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=120&h=120&fit=crop&crop=face" alt="Álvaro Díaz" class="artist-avatar" loading="lazy">
                            <span class="artist-name">Álvaro Díaz</span>
                            <span class="artist-genre">Urbano · Alt.</span>
                        </div>
                    </div>
                    <a href="servicios.php" class="card-link">Ver lineup completo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="5 12 19 12"></polyline><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                </div>
            </article>

        </div>
    </section>

    <!-- ============================================
         EXPERIENCE SECTION
         ============================================ -->
    <section class="experience" id="experiencia" aria-labelledby="exp-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Qué te espera</span>
                <h2 id="exp-title" class="section-title">La Experiencia</h2>
                <p class="section-desc">Más que un festival, una noche que recordarás toda la vida</p>
            </header>

            <div class="experience-grid">
                <article class="exp-card">
                    <div class="exp-media">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=800&h=600&fit=crop" alt="Crowd enjoying festival" loading="lazy">
                    </div>
                    <div class="exp-content">
                        <h3>Escenario Principal</h3>
                        <p>Producción visual y sonora de nivel mundial. Pantallas LED 8K, sonido Meyer Sound envolvente, pirotecnia sincronizada y lighting design que transforma cada canción en un momento único.</p>
                        <ul class="exp-features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Pantallas LED 8K curvas</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Sonido envolvente 360°</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Efectos pirotécnicos y láser</li>
                        </ul>
                    </div>
                </article>

                <article class="exp-card reverse">
                    <div class="exp-media">
                        <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?w=800&h=600&fit=crop" alt="VIP area" loading="lazy">
                    </div>
                    <div class="exp-content">
                        <h3>Zona VIP Premium</h3>
                        <p>Vista elevada privilegiada, barra libre de licores premium, baños exclusivos climatizados, lockers, zona chill con A/C y servicio de mesero. La forma más cómoda de vivir el festival.</p>
                        <ul class="exp-features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Barra libre premium ilimitada</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Baños VIP con A/C</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Entrada rápida sin filas</li>
                        </ul>
                    </div>
                </article>

                <article class="exp-card">
                    <div class="exp-media">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=800&h=600&fit=crop" alt="Food and drinks" loading="lazy">
                    </div>
                    <div class="exp-content">
                        <h3>Gastronomía & Coctelería</h3>
                        <p>15+ food trucks curados: tacos birria, bao buns, burgers angus, pizza napolitana, poké bowls, opciones veganas. 4 barras temáticas: Imperial, cocteles signature, zero alcohol, VIP premium.</p>
                        <ul class="exp-features">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>15+ food trucks internacionales</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>4 barras temáticas especializadas</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Hidratación gratuita en 8 puntos</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         ARTISTS SECTION
         ============================================ -->
    <section class="artists-section" id="artistas" aria-labelledby="art-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Lineup 2026</span>
                <h2 id="art-title" class="section-title">Artistas Confirmados</h2>
                <p class="section-desc">8 artistas internacionales + escenario electrónico continuo</p>
            </header>

            <div class="artists-grid" id="artistsGrid">
                <!-- Generado desde JS -->
            </div>

            <div class="section-cta">
                <a href="servicios.php" class="btn btn-secondary">Ver programa completo por horarios</a>
            </div>
        </div>
    </section>

    <!-- ============================================
         LOCATION SECTION
         ============================================ -->
    <section class="location" id="ubicacion" aria-labelledby="loc-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Dónde estamos</span>
                <h2 id="loc-title" class="section-title">Ubicación</h2>
                <p class="section-desc">Estadio Nacional de Costa Rica · Acceso fácil desde todo el GAM</p>
            </header>

            <div class="location-grid">
                <div class="location-map">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.830774071115!2d-84.1015!3d9.9351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3a3a3a3a3a3%3A0x1234567890abcdef!2sEstadio%20Nacional%20de%20Costa%20Rica!5e0!3m2!1ses!2scr!4v1234567890"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen
                            aria-label="Mapa del Estadio Nacional de Costa Rica">
                        </iframe>
                    </div>
                </div>

                <div class="location-info">
                    <article class="location-card">
                        <div class="location-icon">📍</div>
                        <div>
                            <h3>Estadio Nacional</h3>
                            <p>La Sabana, San José, Costa Rica</p>
                        </div>
                    </article>

                    <article class="location-card">
                        <div class="location-icon">🅿️</div>
                        <div>
                            <h3>Parqueo VIP</h3>
                            <p>Incluido en VIP/M&G · General ₡5,000 (cupos limitados)</p>
                        </div>
                    </article>

                    <article class="location-card">
                        <div class="location-icon">♿</div>
                        <div>
                            <h3>Accesibilidad</h3>
                            <p>Buses adaptados, plataformas vista, baños adaptados, acompañante gratis</p>
                        </div>
                    </article>

                    <article class="location-card">
                        <div class="location-icon">🕐</div>
                        <div>
                            <h3>Puertas Abren</h3>
                            <p>16:00 · Llega 2h antes para mejor ubicación</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include "footer.php"; ?>

<!-- Hero-specific inline script for counter animation -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Animate floating card number
    const statNumber = document.querySelector('.stat-number');
    if (statNumber) {
        const target = parseInt(statNumber.dataset.count);
        let current = 0;
        const duration = 2000;
        const start = performance.now();

        function animate(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            current = Math.floor(target * eased);
            statNumber.textContent = current.toLocaleString();
            if (progress < 1) requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
    }
});
</script>