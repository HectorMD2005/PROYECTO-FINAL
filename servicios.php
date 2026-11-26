<?php
$tituloPagina = "PROGRAMA OFICIAL | FESTIVAL URBANO 2026";
include "header.php";
?>

<main>

    <!-- ============================================
         HERO PROGRAMA - Cinematic Split
         ============================================ -->
    <section class="hero hero-programa" aria-labelledby="programa-hero-title">
        <div class="hero-bg" aria-hidden="true">
            <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=1600&h=900&fit=crop" alt="" loading="eager">
            <div class="hero-overlay"></div>
            <div class="hero-gradient-left"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-tags">
                    <span class="tag">Lineup 2026</span>
                    <span class="tag">10 Horas Non-Stop</span>
                </div>

                <h1 id="programa-hero-title" class="hero-title">
                    <span class="title-line">EL RITMO</span>
                    <span class="title-line">DE LA NOCHE</span>
                </h1>

                <p class="hero-script">Programa oficial del festival</p>

                <p class="hero-description">
                    Descubre cada presentación, escenario y experiencia que hará de esta noche un momento inolvidable.
                </p>

                <div class="hero-meta">
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <span>Sábado 12 de diciembre de 2026</span>
                    </div>
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>16:00 - 02:00</span>
                    </div>
                    <div class="meta-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Estadio Nacional</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#contenedorActividades" class="btn btn-primary">
                        <span>Explorar programación</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="5 12 19 12"></polyline><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?w=800&h=1000&fit=crop" alt="Festival stage at night" class="hero-image" loading="eager">
                </div>

                <aside class="floating-card floating-card-lineup" aria-label="Artistas confirmados">
                    <div class="floating-card-bg"></div>
                    <div class="floating-card-content">
                        <div class="floating-badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <span>8 Artistas Confirmados</span>
                        </div>
                        <div class="floating-stats">
                            <div class="stat-item">
                                <div class="stat-number" data-count="2">0</div>
                                <span class="stat-label">Escenarios</span>
                            </div>
                            <div class="stat-divider" aria-hidden="true"></div>
                            <div class="stat-item">
                                <div class="stat-number" data-count="10">0</div>
                                <span class="stat-label">Actividades</span>
                            </div>
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
         LINEUP COMPLETO - GENERADO DESDE JAVASCRIPT
         ============================================ -->
    <section class="lineup-section" aria-labelledby="lineup-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Programación musical</span>
                <h2 id="lineup-title" class="section-title">LINEUP COMPLETO</h2>
                <p class="section-desc">Diez actividades programadas · Dos escenarios simultáneos</p>
            </header>

            <!-- CONTENEDOR DONDE JAVASCRIPT GENERA LAS CARDS -->
            <div class="lineup-grid" id="contenedorActividades" role="list">
                <!-- Las tarjetas se generan desde main.js -->
            </div>

            <!-- Leyenda de categorías -->
            <div id="leyenda" class="categories-legend" role="region" aria-label="Guía de categorías musicales">
                <h3 class="legend-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    Guía Rápida de Categorías
                </h3>
                <div class="legend-grid">
                    <article class="legend-item legend-headliners">
                        <div class="legend-icon">🌟</div>
                        <div class="legend-info">
                            <strong>HEADLINERS</strong>
                            <small>Artistas principales · Escenario Principal</small>
                        </div>
                    </article>
                    <article class="legend-item legend-stars">
                        <div class="legend-icon">🎤</div>
                        <div class="legend-info">
                            <strong>ESTRELLAS INTERNACIONALES</strong>
                            <small>Artistas invitados top · Escenario Principal</small>
                        </div>
                    </article>
                    <article class="legend-item legend-electronic">
                        <div class="legend-icon">🎧</div>
                        <div class="legend-info">
                            <strong>ESCENARIO ELECTRÓNICO</strong>
                            <small>DJs continuos 16:00-02:00 · Escenario Secundario</small>
                        </div>
                    </article>
                    <article class="legend-item legend-general">
                        <div class="legend-icon">🎪</div>
                        <div class="legend-info">
                            <strong>GENERAL / OTROS</strong>
                            <small>Apertura, cierre, actividades varias</small>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         ENTRADAS - TIPOS DE PASE
         ============================================ -->
    <section class="tickets-section" id="entradas" aria-labelledby="tix-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Elige tu pase</span>
                <h2 id="tix-title" class="section-title">Entradas</h2>
                <p class="section-desc">Tres experiencias, una noche inolvidable. Precios finales con impuestos incluidos.</p>
            </header>

            <div class="tickets-grid">
                <!-- General -->
                <article class="ticket-card" data-tier="general">
                    <div class="ticket-badge">MÁS VENDIDO</div>
                    <div class="ticket-header">
                        <h3>General</h3>
                        <div class="ticket-price">
                            <span class="currency">₡</span>
                            <span class="amount">25,000</span>
                        </div>
                    </div>
                    <ul class="ticket-benefits">
                        <li>Acceso a ambos escenarios</li>
                        <li>Food court + 4 barras</li>
                        <li>Mercado urbano + activaciones</li>
                        <li>Hidratación gratis (8 puntos)</li>
                        <li>Punto médico Hospital CIMA</li>
                    </ul>
                    <a href="contacto.php" class="btn btn-outline" onclick="scrollToForm(); return false;">Seleccionar General</a>
                </article>

                <!-- VIP -->
                <article class="ticket-card featured" data-tier="vip">
                    <div class="ticket-badge ticket-badge-vip">RECOMENDADO</div>
                    <div class="ticket-header">
                        <h3>VIP Experience</h3>
                        <div class="ticket-price">
                            <span class="currency">₡</span>
                            <span class="amount">55,000</span>
                        </div>
                    </div>
                    <ul class="ticket-benefits">
                        <li>Todo lo de General +</li>
                        <li>Zona elevada vista preferencial</li>
                        <li>Barra libre premium ilimitada</li>
                        <li>Baños VIP + lockers gratis</li>
                        <li>Entrada rápida + pulsera VIP</li>
                        <li>Zona chill A/C + mesero</li>
                    </ul>
                    <a href="contacto.php" class="btn btn-primary" onclick="scrollToForm(); return false;">Seleccionar VIP</a>
                </article>

                <!-- Premium / Meet & Greet -->
                <article class="ticket-card" data-tier="premium">
                    <div class="ticket-badge ticket-badge-premium">EXCLUSIVO</div>
                    <div class="ticket-header">
                        <h3>Meet & Greet</h3>
                        <div class="ticket-price">
                            <span class="currency">₡</span>
                            <span class="amount">120,000</span>
                        </div>
                    </div>
                    <ul class="ticket-benefits">
                        <li>Todo lo VIP +</li>
                        <li>Meet & Greet con 1 artista top</li>
                        <li>Foto pro + laminado numerado</li>
                        <li>Merch exclusivo (hoodie+gorra)</li>
                        <li>Acceso soundcheck (sujeto a disp.)</li>
                        <li>Staff dedicado 1:10</li>
                    </ul>
                    <a href="contacto.php" class="btn btn-outline" onclick="scrollToForm(); return false;">Seleccionar Meet & Greet</a>
                </article>
            </div>

            <p class="tickets-note">Preventa BAC Credomatic: 10% dto + 3 cuotas sin intereses · Métodos: Tarjeta, Transferencia, SINPE Móvil, Efectivo</p>
        </div>
    </section>


    <!-- ============================================
         GASTRONOMÍA Y BEBIDAS
         ============================================ -->
    <section class="food-section" id="food" aria-labelledby="food-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Experiencia gastronómica</span>
                <h2 id="food-title" class="section-title">SABORES QUE ACOMPAÑAN LA NOCHE</h2>
                <p class="section-desc">Una experiencia culinaria tan diversa como el lineup</p>
            </header>

            <div class="food-grid" role="list">
                <article class="food-card reveal" role="listitem">
                    <div class="food-card-media">
                        <div class="food-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">🌮</div>
                    </div>
                    <div class="food-card-content">
                        <h3>Food Trucks Curados (15+)</h3>
                        <div class="food-meta">
                            <span>Internacional</span>
                            <span>Local</span>
                            <span>Vegano</span>
                        </div>
                        <ul class="food-list">
                            <li><strong>Tacos & Birria:</strong> Birria de res, consomé, quesabirrias</li>
                            <li><strong>Asian Fusion:</strong> Bao buns, ramen burgers, gyozas</li>
                            <li><strong>Burgers Artesanales:</strong> Smash burgers, carne 100% angus, opciones veganas Beyond</li>
                            <li><strong>Pizza Napolitana:</strong> Horno leña 485°C, masa 72h fermentación</li>
                            <li><strong>Comida Caribeña:</strong> Rondon, patacones, ceviche de palmito</li>
                            <li><strong>Postres:</strong> Churros rellenos, helado artesanal, crepes, waffles</li>
                            <li><strong>Opciones Saludables:</strong> Poké bowls, wraps, jugos cold-press, acai</li>
                        </ul>
                    </div>
                </article>

                <article class="food-card reveal" role="listitem">
                    <div class="food-card-media">
                        <div class="food-icon" style="background: linear-gradient(135deg, #E28CFF 0%, #8B4DFF 100%);">🍻</div>
                    </div>
                    <div class="food-card-content">
                        <h3>Barras Temáticas (4)</h3>
                        <div class="food-meta">
                            <span>Cerveza</span>
                            <span>Cocteles</span>
                            <span>Sin Alcohol</span>
                        </div>
                        <ul class="food-list">
                            <li><strong>🍺 Barra Imperial:</strong> Imperial, Imperial Light, Imperial Silver, Pilsen, Bavaria, Rock Ice</li>
                            <li><strong>🍸 Barra Cocteles:</strong> Mojito, Piña Colada, Margarita, Espresso Martini, Negroni, Signature "Ferxxo"</li>
                            <li><strong>🥤 Barra Zero:</strong> Mocktails, aguas saborizadas, kombucha, jugos naturales, café de especialidad</li>
                            <li><strong>🥃 Barra VIP Premium:</strong> Whisky 12+, vodka premium, gin artesanal, ron añejo, champagne (solo VIP)</li>
                        </ul>
                    </div>
                </article>

                <article class="food-card reveal" role="listitem">
                    <div class="food-card-media">
                        <div class="food-icon" style="background: linear-gradient(135deg, #B58AFF 0%, #E28CFF 100%);">💧</div>
                    </div>
                    <div class="food-card-content">
                        <h3>Hidratación Gratuita</h3>
                        <div class="food-meta">
                            <span>8 Puntos</span>
                            <span>Bidones Reciclables</span>
                            <span>Staff Reposición</span>
                        </div>
                        <p class="food-desc">8 estaciones de agua purificada fría distribuidas en todo el festival. Bidones reciclables de 500ml (devolución en puntos = 1 token comida). Staff dedicado reposición constante. Puntos señalizados en app y mapa físico.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         REGLAS DEL FESTIVAL
         ============================================ -->
    <section class="rules-section" id="reglas" aria-labelledby="rules-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Seguridad y convivencia</span>
                <h2 id="rules-title" class="section-title">DISFRUTA LA NOCHE CON RESPONSABILIDAD</h2>
                <p class="section-desc">Para que todos disfrutemos de una experiencia segura, respetuosa e inolvidable</p>
            </header>

            <div class="rules-grid" role="list">
                <article class="rule-card rule-allowed reveal" role="listitem">
                    <div class="rule-header">
                        <div class="rule-icon" style="background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <div>
                            <span class="rule-badge badge-allowed">PERMITIDO</span>
                            <h3>Permitido y Recomendado</h3>
                        </div>
                    </div>
                    <ul class="rule-list">
                        <li>Documento identidad físico <strong>(OBLIGATORIO)</strong></li>
                        <li>Entrada digital (QR en celular) o impresa</li>
                        <li>Ropa y calzado cómodo (10h de pie)</li>
                        <li>Protector solar (envase <100ml, no aerosol)</li>
                        <li>Lentes de sol, gorra/sombrero</li>
                        <li>Cargador portátil (power bank)</li>
                        <li>Medicamentos con receta visible</li>
                        <li>Impermeable/poncho (NO paraguas)</li>
                        <li>Binoculares compactos</li>
                        <li>Dinero en efectivo / tarjeta / celular para pagos</li>
                    </ul>
                </article>

                <article class="rule-card rule-prohibited reveal" role="listitem">
                    <div class="rule-header">
                        <div class="rule-icon" style="background: linear-gradient(135deg, #e94560 0%, #ff6b8a 100%);">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </div>
                        <div>
                            <span class="rule-badge badge-prohibited">PROHIBIDO</span>
                            <h3>Estrictamente Prohibido</h3>
                        </div>
                    </div>
                    <ul class="rule-list">
                        <li>Armas, navajas, objetos punzocortantes</li>
                        <li>Sustancias ilegales, drogas, vape THC</li>
                        <li>Envases vidrio, latas, botellas</li>
                        <li>Selfie sticks, trípodes, drones</li>
                        <li>Cámaras pro (lentes intercambiables)</li>
                        <li>Comida/bebida externa (excepto agua <500ml sellada y comida médica)</li>
                        <li>Mascotas (excepto perros guía)</li>
                        <li>Paraguas, aerosoles, láseres</li>
                        <li>Sillas, mantas, tiendas de campaña</li>
                        <li>Material publicitario no autorizado</li>
                    </ul>
                </article>

                <article class="rule-card rule-pro reveal" role="listitem">
                    <div class="rule-header">
                        <div class="rule-icon" style="background: linear-gradient(135deg, #8B4DFF 0%, #B58AFF 100%);">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                        </div>
                        <div>
                            <span class="rule-badge badge-pro">RECOMENDACIÓN</span>
                            <h3>Recomendaciones Pro</h3>
                        </div>
                    </div>
                    <ul class="rule-list">
                        <li>Llega <strong>2h antes</strong> (14:00) para mejor ubicación</li>
                        <li>Hidrátate <strong>cada 30 min</strong> (agua gratis en 8 puntos)</li>
                        <li>Acuerda <strong>punto de encuentro</strong> con amigos (ej: "fuente principal")</li>
                        <li>Batería celular al 100% + power bank</li>
                        <li>Foto del QR en galería + respaldo impreso</li>
                        <li>Dinero en efectivo para propinas/comida rápida</li>
                        <li>Calzado cerrado, cómodo, que no te importe ensuciar</li>
                        <li>Ropa en capas (tarde calor, noche fresco)</li>
                        <li>Usa buses oficiales o Uber (tráfico intenso)</li>
                        <li>Sigue a staff chaleco naranja/rojo en emergencias</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- ============================================
         RESUMEN DE HORARIOS
         ============================================ -->
    <section class="schedule-section" aria-labelledby="schedule-title">
        <div class="contenedor">
            <header class="section-header">
                <span class="section-tag">Cada momento tiene su ritmo</span>
                <h2 id="schedule-title" class="section-title">CADA MOMENTO TIENE SU RITMO</h2>
                <p class="section-desc">Resumen rápido de horarios por escenario</p>
            </header>

            <div class="schedule-table-wrapper">
                <table class="schedule-table" role="table">
                    <thead>
                        <tr>
                            <th scope="col">HORA</th>
                            <th scope="col">ESCENARIO PRINCIPAL</th>
                            <th scope="col">ESCENARIO ELECTRÓNICO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>16:00</td><td>Apertura puertas · Bienvenida</td><td>Warm Up · DJ Local</td></tr>
                        <tr><td>16:15</td><td><strong>Tiago PZK</strong></td><td>Deep House Set</td></tr>
                        <tr><td>17:15</td><td><strong>Nicki Nicole</strong></td><td>Tech House</td></tr>
                        <tr><td>18:30</td><td><strong>Álvaro Díaz</strong></td><td>Progressive House</td></tr>
                        <tr><td>19:45</td><td><strong>Duki</strong></td><td>Melodic Techno</td></tr>
                        <tr><td>20:00</td><td><strong>Milo J</strong></td><td>Peak Time Techno</td></tr>
                        <tr><td>21:30</td><td><strong>FEID 🌟 HEADLINER</strong></td><td>Hard Techno</td></tr>
                        <tr><td>22:30</td><td><strong>Bizarrap 🎧 SORPRESA</strong></td><td>After Party Warm Down</td></tr>
                        <tr><td>23:30</td><td>Cierre Principal · Agradecimientos</td><td><strong>After Party · DJ Invitado</strong></td></tr>
                        <tr><td>01:00</td><td>Desalojo ordenado</td><td>Cierre Escenario Electrónico</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="schedule-note">Horarios sujetos a cambios operativos. Confirmación final 48h antes en app y web. Llega temprano para no perderte nada.</p>
        </div>
    </section>

</main>

<?php include "footer.php"; ?>

<!-- Section-specific animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Animate stat numbers in floating card
    document.querySelectorAll('.floating-card-lineup .stat-number').forEach(statNumber => {
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
    });
});
</script>