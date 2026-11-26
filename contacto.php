<?php
$tituloPagina = "INSCRIPCIONES | FESTIVAL URBANO 2026";

// Leer errores y datos del formulario desde la sesión (para mostrar inline)
session_start();
$formErrors = $_SESSION['form_errors'] ?? [];
$formData = $_SESSION['form_data'] ?? [];
// Limpiar después de leer
unset($_SESSION['form_errors'], $_SESSION['form_data']);

include "header.php";
?>

<main>

    <!-- ============================================
         HERO CONTACTO - Cinematic Split
         ============================================ -->
    <section class="hero hero-contacto" aria-labelledby="contacto-hero-title">
        <div class="hero-bg" aria-hidden="true">
            <img src="./img/entradas.png" alt="" loading="eager">
            <div class="hero-overlay"></div>
            <div class="hero-gradient-left"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-tags">
                    <span class="tag">Inscripciones</span>
                    <span class="tag">Cupos Limitados</span>
                </div>

                <h1 id="contacto-hero-title" class="hero-title">
                    <span class="title-line">INSCRÍBETE</span>
                    <span class="title-line">AHORA</span>
                </h1>

                <p class="hero-script">Reserva tu lugar en el festival urbano del año</p>

                <p class="hero-description">
                    Cupos limitados por categoría. Recibe confirmación inmediata con tu entrada digital (QR).
                </p>

                <div class="hero-buttons">
                    <a href="#formulario" class="btn btn-primary">
                        <span>Ir al formulario</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="5 12 19 12"></polyline><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-image-wrapper">
                    <img src="./img/entradas.png" alt="Festival experience" class="hero-image" loading="eager">
                </div>

                <aside class="floating-card floating-card-stats" aria-label="Inscritos confirmados">
                    <div class="floating-card-bg"></div>
                    <div class="floating-card-content">
                        <div class="floating-badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            <span>Inscritos confirmados</span>
                        </div>
                        <div class="floating-stats">
                            <div class="stat-item">
                                <div class="stat-number" data-count="12847">0</div>
                                <span class="stat-label">Personas registradas</span>
                            </div>  
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
         ENTRADAS - ELIGE TU EXPERIENCIA
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
                    <a href="#formulario" class="btn btn-outline" onclick="scrollToForm(); return false;">Seleccionar General</a>
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
                    <a href="#formulario" class="btn btn-primary" onclick="scrollToForm(); return false;">Seleccionar VIP</a>
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
                    <a href="#formulario" class="btn btn-outline" onclick="scrollToForm(); return false;">Seleccionar Meet & Greet</a>
                </article>
            </div>

            <p class="tickets-note">Preventa BAC Credomatic: 10% dto + 3 cuotas sin intereses · Métodos: Tarjeta, Transferencia, SINPE Móvil, Efectivo</p>
        </div>
    </section>

    <!-- ============================================
         FORMULARIO + FAQ - LAYOUT LADO A LADO
         ============================================ -->
    <section class="contact-layout" id="formulario" aria-labelledby="form-title">
        <div class="contenedor">
            <div class="contact-grid">
                <!-- IZQUIERDA: FORMULARIO -->
                <div class="form-column">
                    <header class="section-header">
                        <span class="section-tag">Completa tu registro</span>
                        <h2 id="form-title" class="section-title">Formulario de Inscripción</h2>
                    </header>
                    <form class="formulario-moderno" action="enviar.php" method="POST" novalidate>
                        <?php if (!empty($formErrors)): ?>
                            <div class="form-errors-summary" role="alert" aria-live="assertive">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                <div>
                                    <strong>Por favor corrige los siguientes errores:</strong>
                                    <ul>
                                        <?php foreach ($formErrors as $error): ?>
                                            <li><?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre">Nombre completo <span class="requerido">*</span></label>
                                <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez González" required autocomplete="name" maxlength="100" aria-describedby="error-nombre" value="<?php echo htmlspecialchars($formData['nombre'] ?? ''); ?>" <?php echo in_array('El nombre completo es obligatorio.', $formErrors) || in_array('El nombre debe tener al menos 3 caracteres.', $formErrors) || in_array('El nombre solo puede contener letras y espacios.', $formErrors) || in_array('El nombre no puede exceder 100 caracteres.', $formErrors) ? 'class="error"' : ''; ?>>
                                <span class="error-msg" id="error-nombre" aria-live="polite"><?php 
                                    $nombreErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'El nombre'));
                                    echo htmlspecialchars(implode(' ', $nombreErrors));
                                ?></span>
                            </div>

                            <div class="form-group">
                                <label for="correo">Correo electrónico <span class="requerido">*</span></label>
                                <input type="email" id="correo" name="correo" placeholder="juan@email.com" required autocomplete="email" maxlength="150" aria-describedby="error-correo" value="<?php echo htmlspecialchars($formData['correo'] ?? ''); ?>" <?php echo in_array('El correo electrónico es obligatorio.', $formErrors) || in_array('El correo electrónico no es válido.', $formErrors) || in_array('El correo no puede exceder 150 caracteres.', $formErrors) ? 'class="error"' : ''; ?>>
                                <span class="error-msg" id="error-correo" aria-live="polite"><?php 
                                    $correoErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'El correo'));
                                    echo htmlspecialchars(implode(' ', $correoErrors));
                                ?></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="telefono">Teléfono (8 dígitos) <span class="requerido">*</span></label>
                                <input type="tel" id="telefono" name="telefono" placeholder="88887777" required autocomplete="tel" maxlength="8" pattern="\d{8}" inputmode="numeric" aria-describedby="error-telefono" value="<?php echo htmlspecialchars($formData['telefono'] ?? ''); ?>" <?php echo in_array('El teléfono es obligatorio.', $formErrors) || in_array('El teléfono debe tener exactamente 8 dígitos numéricos.', $formErrors) ? 'class="error"' : ''; ?>>
                                <span class="error-msg" id="error-telefono" aria-live="polite"><?php 
                                    $telErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'El teléfono'));
                                    echo htmlspecialchars(implode(' ', $telErrors));
                                ?></span>
                            </div>

                            <div class="form-group">
                                <label for="edad">Edad <span class="requerido">*</span></label>
                                <input type="number" id="edad" name="edad" placeholder="25" required min="16" max="99" autocomplete="off" aria-describedby="error-edad" value="<?php echo htmlspecialchars($formData['edad'] ?? ''); ?>" <?php echo in_array('La edad debe ser un número entre 16 y 99 años.', $formErrors) ? 'class="error"' : ''; ?>>
                                <span class="error-msg" id="error-edad" aria-live="polite"><?php 
                                    $edadErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'La edad'));
                                    echo htmlspecialchars(implode(' ', $edadErrors));
                                ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoría de entrada <span class="requerido">*</span></label>
                            <select id="categoria" name="categoria" required aria-describedby="error-categoria" <?php echo in_array('Debe seleccionar una categoría de entrada válida.', $formErrors) ? 'class="error"' : ''; ?>>
                                <option value="">-- Selecciona una categoría --</option>
                                <option value="general" <?php echo ($formData['categoria'] ?? '') === 'general' ? 'selected' : ''; ?>>General - ₡25,000</option>
                                <option value="vip" <?php echo ($formData['categoria'] ?? '') === 'vip' ? 'selected' : ''; ?>>VIP Experience - ₡55,000</option>
                                <option value="meet_greet" <?php echo ($formData['categoria'] ?? '') === 'meet_greet' ? 'selected' : ''; ?>>Meet & Greet - ₡120,000</option>
                            </select>
                            <span class="error-msg" id="error-categoria" aria-live="polite"><?php 
                                $catErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'Debe seleccionar una categoría'));
                                echo htmlspecialchars(implode(' ', $catErrors));
                            ?></span>
                        </div>

                        <div class="form-group">
                            <label for="cantidad">Cantidad de entradas <span class="requerido">*</span></label>
                            <select id="cantidad" name="cantidad" required aria-describedby="error-cantidad" <?php echo in_array('Debe seleccionar una cantidad entre 1 y 4 entradas.', $formErrors) ? 'class="error"' : ''; ?>>
                                <option value="">-- Selecciona cantidad --</option>
                                <option value="1" <?php echo ($formData['cantidad'] ?? '') === '1' ? 'selected' : ''; ?>>1 entrada</option>
                                <option value="2" <?php echo ($formData['cantidad'] ?? '') === '2' ? 'selected' : ''; ?>>2 entradas</option>
                                <option value="3" <?php echo ($formData['cantidad'] ?? '') === '3' ? 'selected' : ''; ?>>3 entradas</option>
                                <option value="4" <?php echo ($formData['cantidad'] ?? '') === '4' ? 'selected' : ''; ?>>4 entradas (máximo)</option>
                            </select>
                            <span class="error-msg" id="error-cantidad" aria-live="polite"><?php 
                                $cantErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'Debe seleccionar una cantidad'));
                                echo htmlspecialchars(implode(' ', $cantErrors));
                            ?></span>
                        </div>

                        <div class="form-group hidden" id="artista_mg_group">
                            <label for="artista_mg">Artista para Meet & Greet <span class="requerido">*</span></label>
                            <select id="artista_mg" name="artista_mg" aria-describedby="error-artista_mg" <?php echo in_array('Debe seleccionar un artista para el Meet & Greet.', $formErrors) ? 'class="error"' : ''; ?>>
                                <option value="">-- Selecciona artista --</option>
                                <option value="feid" <?php echo ($formData['artista_mg'] ?? '') === 'feid' ? 'selected' : ''; ?>>Feid</option>
                                <option value="milo_j" <?php echo ($formData['artista_mg'] ?? '') === 'milo_j' ? 'selected' : ''; ?>>Milo J</option>
                                <option value="alvaro_diaz" <?php echo ($formData['artista_mg'] ?? '') === 'alvaro_diaz' ? 'selected' : ''; ?>>Álvaro Díaz</option>
                                <option value="nicki_nicole" <?php echo ($formData['artista_mg'] ?? '') === 'nicki_nicole' ? 'selected' : ''; ?>>Nicki Nicole</option>
                                <option value="duki" <?php echo ($formData['artista_mg'] ?? '') === 'duki' ? 'selected' : ''; ?>>Duki</option>
                            </select>
                            <span class="error-msg" id="error-artista_mg" aria-live="polite"><?php 
                                $artErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'Debe seleccionar un artista'));
                                echo htmlspecialchars(implode(' ', $artErrors));
                            ?></span>
                            <small class="form-hint">Solo aplica para categoría Meet & Greet</small>
                        </div>

                        <div class="form-group checkbox-group" role="group" aria-labelledby="reglamento-label">
                            <input type="checkbox" id="reglamento" name="reglamento" required <?php echo in_array('Debe aceptar el reglamento para continuar.', $formErrors) ? 'class="error"' : ''; ?>>
                            <label for="reglamento" id="reglamento-label">
                                Acepto el <a href="#reglamento" style="text-decoration: underline;">reglamento completo del festival</a>, la política de privacidad y autorizo el tratamiento de mis datos para la gestión de mi inscripción y comunicaciones del evento. <span class="requerido">*</span>
                            </label>
                            <span class="error-msg" aria-live="polite"><?php 
                                $regErrors = array_filter($formErrors, fn($e) => str_starts_with($e, 'Debe aceptar el reglamento'));
                                echo htmlspecialchars(implode(' ', $regErrors));
                            ?></span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit">
                            <span>Confirmar Inscripción</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="5 12 19 12"></polyline><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                    </form>
                </div>

                <!-- DERECHA: FAQ -->
                <div class="faq-column">
                    <header class="section-header">
                        <span class="section-tag">Preguntas frecuentes</span>
                        <h2 id="faq-title" class="section-title">Preguntas Frecuentes</h2>
                        <p class="section-desc">Resolvemos tus dudas antes de que te inscribas. ¿No encuentras tu respuesta? <a href="mailto:soporte@festivalurbano2026.com" style="color: var(--accent-primary);">Escríbenos</a></p>
                    </header>

                    <div class="accordion" role="region" aria-label="Preguntas frecuentes">
                        <!-- FAQ 1: COSTOS -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq1-content">
                                ¿Cuáles son los costos y qué incluye cada categoría?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq1-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>Tenemos tres categorías con precios finales (impuestos incluidos):</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;"><strong>General — ₡25,000:</strong> Acceso a ambos escenarios, zona general, food court (15+ food trucks), 4 barras, mercado urbano, baños, lockers (alquiler ₡2,000), hidratación gratis, punto médico.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>VIP Experience — ₡55,000:</strong> Todo lo de General + zona VIP elevada con vista preferencial, barra premium ILIMITADA (whisky, vodka, gin, ron, cerveza artesanal, cocteles), baños VIP con A/C, lockers GRATIS, zona descanso climatizada, entrada rápida sin filas, pulsera VIP coleccionable, credencial laminada, servicio mesero.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>Meet & Greet — ₡120,000:</strong> Todo lo VIP + meet & greet privado con 1 artista (Feid, Milo J, Álvaro Díaz, Nicki Nicole o Duki), foto profesional 15x20cm + digital HD, laminado numerado edición limitada, merch exclusivo (hoodie + gorra + lanyard), acceso soundcheck (sujeto a disp.), entrada prioritaria absoluta, staff dedicado, regalo firmado.</li>
                                    </ul>
                                    <p><strong>Métodos de pago:</strong> Tarjeta (Visa/Mastercard/Amex), Transferencia (BAC/BN/BCR/Popular), SINPE Móvil, Efectivo en puntos autorizados. <strong>Preventa BAC:</strong> 10% dto + 3 cuotas sin intereses.</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 2: QUÉ LLEVAR -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq2-content">
                                ¿Qué debo llevar y qué está prohibido?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq2-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>✅ OBLIGATORIO — Llevar sí o sí:</strong></p>
                                    <ul style="margin: 0.75rem 0 1.5rem 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li>Documento de identidad físico (cédula, pasaporte o DIMEX) — <strong>sin este no entras</strong></li>
                                        <li>Entrada digital (código QR en celular cargado) O entrada impresa</li>
                                    </ul>

                                    <p><strong>✅ RECOMENDADO:</strong></p>
                                    <ul style="margin: 0.75rem 0 1.5rem 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li>Ropa y calzado cómodo (estarás de pie 10+ horas)</li>
                                        <li>Protector solar (envase <100ml, sin aerosol)</li>
                                        <li>Lentes de sol y gorra/sombrero</li>
                                        <li>Cargador portátil (power bank) — hay lockers con carga en VIP</li>
                                        <li>Medicamentos personales con receta visible</li>
                                        <li>Impermeable/poncho (NO paraguas, por seguridad)</li>
                                        <li>Binoculares compactos (opcional)</li>
                                    </ul>

                                    <p><strong>❌ PROHIBIDO — No intentes entrar con:</strong></p>
                                    <ul style="margin: 0.75rem 0 1.5rem 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li>Armas, navajas, objetos punzocortantes</li>
                                        <li>Sustancias ilegales, drogas, vapeadores con THC</li>
                                        <li>Envases de vidrio, latas, botellas (vacías o llenas)</li>
                                        <li>Selfie sticks, trípodes, drones</li>
                                        <li>Cámaras profesionales (lentes intercambiables), GoPros</li>
                                        <li>Comida y bebida externa (excepto agua sellada <500ml y comida médica)</li>
                                        <li>Mascotas (excepto perros guía con credencial)</li>
                                        <li>Paraguas, aerosoles, punteros láser</li>
                                    </ul>
                                    <p>Habrá revisión de mochilas/bolsas al ingreso. Objetos prohibidos se decomisan sin devolución.</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 3: EDAD MÍNIMA -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq3-content">
                                ¿Cuál es la edad mínima y reglas para menores?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq3-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>Edad mínima: 16 años cumplidos al 12 de diciembre 2026.</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;"><strong>Menores de 16 años:</strong> <span style="color: var(--accent-secondary); font-weight: 700;">NO se permite el ingreso</span>, bajo ninguna circunstancia, incluso acompañados de adultos.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>16 y 17 años:</strong> Ingreso permitido <strong>SOLO acompañado</strong> de padre, madre o tutor legal (mayor de 25 años) que <strong>debe permanecer dentro del festival todo el tiempo</strong>. Se requiere firmar carta de responsabilidad al ingreso.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>18+ años:</strong> Ingreso libre sin restricciones.</li>
                                    </ul>
                                    <p>Se verifica edad con documento original al ingreso. <strong>No hay excepciones ni devoluciones por edad.</strong> Si compraste para menor de 16 años, puedes transferir la entrada a mayor de 16 (ver FAQ transferencias).</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 4: LLUVIA -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq4-content">
                                ¿Qué pasa si llueve el día del evento?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq4-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>¡El festival se realiza LLUEVA O TRUENE! 🌧️☀️</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;">El Estadio Nacional tiene <strong>techo parcial retráctil</strong> que cubre graderías y zona VIP.</li>
                                        <li style="margin-bottom: 0.75rem;">Zonas VIP, Meet & Greet, barras premium y food court <strong>tienen techo completo</strong>.</li>
                                        <li style="margin-bottom: 0.75rem;">Escenario principal tiene estructura cubierta para proteger equipos y artistas.</li>
                                        <li style="margin-bottom: 0.75rem;">Lleva <strong>impermeable o poncho</strong> (NO paraguas — riesgo de accidentes).</li>
                                        <li style="margin-bottom: 0.75rem;">Calzado cerrado y antideslizante <strong>muy recomendado</strong>.</li>
                                    </ul>
                                    <p><strong>Solo en caso de ALERTA ROJA</strong> (decretada por CNE por fenómenos extremos: huracán, tormenta severa) se evaluaría reprogramación. Notificación por email, web, redes y WhatsApp con <strong>mínimo 24h de antelación</strong>. Las entradas mantienen validez para la nueva fecha. Si no puedes en la nueva fecha, aplica política de reembolsos (ver FAQ reembolsos).</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 5: TRANSFERENCIAS -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq5-content">
                                ¿Puedo transferir mi entrada a otra persona?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq5-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>Sí, las entradas son 100% transferibles</strong> hasta <strong>48 horas antes del evento</strong> (hasta el 10 diciembre 23:59).</p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;">Entra a tu cuenta en <strong>festivalurbano2026.com/mis-entradas</strong> y usa "Transferir entrada".</li>
                                        <li style="margin-bottom: 0.75rem;">El nuevo asistente debe registrarse con sus datos completos (nombre, cédula, email, teléfono).</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>Costo de transferencia: ₡2,000</strong> (cubre gestión administrativa y re-emisión de QR).</li>
                                        <li style="margin-bottom: 0.75rem;">La transferencia es inmediata; el nuevo QR llega al email del nuevo asistente.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>No se permiten transferencias el día del evento</strong> (12 diciembre).</li>
                                    </ul>
                                    <p><strong>Meet & Greet:</strong> Requiere autorización previa del equipo de producción. Contactar a <a href="mailto:produccion@festivalurbano2026.com" style="color: var(--accent-primary);">produccion@festivalurbano2026.com</a> con 7 días de antelación mínimo. Sujeto a aprobación del artista.</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 6: REEMBOLSOS -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq6-content">
                                ¿Hay reembolsos si no puedo asistir?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq6-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>Política de reembolsos (cancelación voluntaria):</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;"><strong>Hasta 30 días antes (hasta 12 nov):</strong> Reembolso <strong>80%</strong> (se retiene 20% por gastos de gestión, plataforma, impuestos).</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>15-30 días antes (13 nov - 27 nov):</strong> Reembolso <strong>50%</strong>.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>Menos de 15 días (desde 28 nov):</strong> <strong>No hay reembolso</strong>, pero SÍ puedes transferir (ver FAQ anterior).</li>
                                    </ul>
                                    <p><strong>Casos de fuerza mayor documentados</strong> (enfermedad grave hospitalaria, fallecimiento familiar directo): Se evalúan individualmente. Requiere certificado médico/hospitalario o acta de defunción. Contactar a <a href="mailto:soporte@festivalurbano2026.com" style="color: var(--accent-primary);">soporte@festivalurbano2026.com</a> en <strong>máximo 5 días hábiles</strong> post-evento.</p>
                                    <p><strong>Cancelación del evento por organizador:</strong> Reembolso 100% automático al método de pago original en 10 días hábiles.</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 7: TRANSPORTE -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq7-content">
                                ¿Hay transporte especial y parqueo?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq7-content" role="region">
                                <div class="accordion-content-inner">
                                    <p><strong>Sí, múltiples opciones oficiales:</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.75rem;"><strong>🚌 Buses Oficiales (ida y vuelta):</strong> Salidas desde 5 puntos GAM: San José (Parque Central), Alajuela (Parque Central), Heredia (Parque Central), Cartago (Parque Central), Desamparados (Municipalidad). Horarios: 13:00, 14:00, 15:00, 16:00. Regreso: 00:30, 01:30, 02:30. <strong>Costo: ₡5,000</strong>. Compra anticipada obligatoria en web. Cupos limitados.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>🚗 Uber Zona Oficial:</strong> Zona designada de pick-up/drop-off en costado este del estadio. Código <strong>FESTIVAL20</strong> = 20% off (usuarios nuevos) / 10% off (usuarios existentes). Tiempo estimado desde centro SJ: 25 min.</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>🅿️ Parqueo VIP:</strong> Incluido en entradas VIP y Meet & Greet (cupos limitados, 1 vehículo por entrada). Parqueo general público: ₡5,000 (sujeto a disponibilidad, reservar en web).</li>
                                        <li style="margin-bottom: 0.75rem;"><strong>♿ Accesibilidad:</strong> Buses adaptados (solicitar al comprar), zona drop-off accesible, baños adaptados, plataformas vista preferencial. Acompañante gratis para PCD (presentar carné CONAPDIS).</li>
                                    </ul>
                                    <p><strong>Recomendación:</strong> Usa buses oficiales o Uber. El tráfico alrededor del estadio será intenso. Llega con 2h de antelación mínimo.</p>
                                </div>
                            </div>
                        </article>

                        <!-- FAQ 8: REGLAMENTO -->
                        <article class="accordion-item">
                            <button class="accordion-header" aria-expanded="false" aria-controls="faq8-content">
                                ¿Dónde veo el reglamento completo y política de privacidad?
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </button>
                            <div class="accordion-content" id="faq8-content" role="region">
                                <div class="accordion-content-inner">
                                    <p>Documentos legales completos disponibles en:</p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.5rem;"><strong>Reglamento General:</strong> <a href="https://festivalurbano2026.com/reglamento" target="_blank" rel="noopener" style="color: var(--accent-primary);">festivalurbano2026.com/reglamento</a></li>
                                        <li style="margin-bottom: 0.5rem;"><strong>Política de Privacidad:</strong> <a href="https://festivalurbano2026.com/privacidad" target="_blank" rel="noopener" style="color: var(--accent-primary);">festivalurbano2026.com/privacidad</a></li>
                                        <li style="margin-bottom: 0.5rem;"><strong>Términos y Condiciones:</strong> <a href="https://festivalurbano2026.com/terminos" target="_blank" rel="noopener" style="color: var(--accent-primary);">festivalurbano2026.com/terminos</a></li>
                                        <li style="margin-bottom: 0.5rem;"><strong>Política de Cookies:</strong> <a href="https://festivalurbano2026.com/cookies" target="_blank" rel="noopener" style="color: var(--accent-primary);">festivalurbano2026.com/cookies</a></li>
                                    </ul>
                                    <p><strong>Resumen de puntos clave del reglamento:</strong></p>
                                    <ul style="margin: 1rem 0; padding-left: 1.5rem; color: var(--text-muted); line-height: 1.8;">
                                        <li style="margin-bottom: 0.5rem;"><strong>📸 Derechos de imagen:</strong> Al ingresar, autorizas uso de tu imagen en fotos/video del festival para fines promocionales sin compensación.</li>
                                        <li style="margin-bottom: 0.5rem;"><strong>🔒 Protección de datos:</strong> Tus datos solo para gestión de entrada, comunicaciones del festival y obligaciones legales. No se venden a terceros. Derecho a olvido: <a href="mailto:privacidad@festivalurbano2026.com" style="color: var(--accent-primary);">privacidad@festivalurbano2026.com</a>.</li>
                                        <li style="margin-bottom: 0.5rem;"><strong>🚫 Conducta:</strong> Cero tolerancia a acoso, discriminación, violencia, conductas de riesgo. Expulsión inmediata sin reembolso ni transferencia.</li>
                                        <li style="margin-bottom: 0.5rem;"><strong>⚕️ Emergencias:</strong> Punto médico Hospital CIMA 24h. Personal de seguridad y protección civil identificado con chaleco. Sigue instrucciones del staff.</li>
                                        <li style="margin-bottom: 0.5rem;"><strong>🎫 Entrada:</strong> Personal e intransferible (excepto proceso oficial). Código QR único. Duplicados = entrada denegada.</li>
                                    </ul>
                                    <p>Al marcar "Acepto el reglamento" en el formulario, confirmas haber leído y aceptado íntegramente todos los documentos arriba enlazados.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>

<!-- Scripts específicos de la página -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Animate stat numbers in floating card
    document.querySelectorAll('.floating-card-stats .stat-number').forEach(statNumber => {
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
    });

    // Toggle artista_mg field based on categoria
    const categoriaSelect = document.getElementById('categoria');
    const artistaGroup = document.getElementById('artista_mg_group');
    
    if (categoriaSelect && artistaGroup) {
        function toggleArtista() {
            const show = categoriaSelect.value === 'meet_greet';
            artistaGroup.style.display = show ? 'block' : 'none';
            const artistaSelect = document.getElementById('artista_mg');
            if (artistaSelect) {
                artistaSelect.required = show;
            }
        }
        
        categoriaSelect.addEventListener('change', toggleArtista);
        toggleArtista(); // Estado inicial
    }
});
</script>