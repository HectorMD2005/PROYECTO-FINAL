<?php
session_start();

// Verificar que hay datos de inscripción
if (!isset($_SESSION["inscrito"])) {
    // Si no hay sesión, redirigir al inicio
    header("Location: index.php");
    exit;
}

$d = $_SESSION["inscrito"];

// NO limpiar la sesión para permitir recargar la página
// Los datos se limpiarán al cerrar el navegador o en 24h

$tituloPagina = "INSCRIPCIÓN CONFIRMADA | FESTIVAL URBANO 2026";
include "header.php";
?>

<main>

    <div class="gracias-container" role="status" aria-live="polite">
        <div class="gracias-icon" aria-hidden="true">✓</div>

        <h1>¡INSCRIPCIÓN <span class="nombre-inscrito">CONFIRMADA</span>!</h1>

        <p>Hola <strong class="nombre-inscrito"><?php echo htmlspecialchars($d["nombre"]); ?></strong>, tu registro se ha procesado correctamente.</p>

        <p>Gracias por unirte al <strong>Festival Urbano 2026</strong>. Nos vemos el <strong>sábado 12 de diciembre</strong> en el <strong>Estadio Nacional</strong>, San José.</p>

        <div class="gracias-detalle">
            <h3>📋 Detalles de tu Inscripción</h3>

            <div class="detalle-item">
                <span class="detalle-label">Número de confirmación:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["confirmacion"]); ?></span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Categoría:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["categoria_nombre"]); ?> <span style="font-size:0.85rem; color:var(--color-acento); font-weight:700;">(₡<?php echo number_format($d["categoria_precio"], 0, ',', '.'); ?> c/u)</span></span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Cantidad:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["cantidad"]); ?> entrada(s)</span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Total a pagar:</span>
                <span class="detalle-valor"><strong>₡<?php echo number_format($d["total_pagar"], 0, ',', '.'); ?></strong></span>
            </div>  

            <div class="detalle-item">
                <span class="detalle-label">Correo de confirmación:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["correo"]); ?></span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Teléfono:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["telefono"]); ?></span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Edad:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["edad"]); ?> años</span>
            </div>

            <div class="detalle-item">
                <span class="detalle-label">Fecha y hora de inscripción:</span>
                <span class="detalle-valor"><?php echo htmlspecialchars($d["fecha_inscripcion"]); ?></span>
            </div>
        </div>

        <div style="background: linear-gradient(135deg, rgba(233,69,96,0.1), rgba(15,52,96,0.1)); border: 1px solid rgba(233,69,96,0.3); border-radius: var(--radio-lg); padding: 1.5rem; margin: 2rem 0; text-align: left;">
            <h4 style="color: var(--color-texto2); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">📧 Próximos Pasos</h4>
            <ol style="color: var(--color-descripciones); line-height: 2; padding-left: 1.25rem; font-size: 0.95rem;">
                <li>Revisa tu email <strong><?php echo htmlspecialchars($d["correo"]); ?></strong> (también carpeta spam/promociones)</li>
                <li>Descarga tu <strong>entrada digital con código QR</strong> adjunta en el correo</li>
                <li>Guarda el QR en tu celular <strong>Y</strong> llévalo impreso como respaldo</li>
                <li>Presenta <strong>DNI original + QR</strong> el 12 diciembre en el Estadio Nacional</li>
                <li>Llega con <strong>2 horas de antelación</strong> mínimo (apertura puertas: 16:00)</li>
            </ol>
        </div>

        <p style="color: var(--color-descripciones); font-size: 0.9rem; margin-top: 1.5rem; line-height: 1.6;">
            <strong>Importante:</strong> Guarda tu número <strong><?php echo htmlspecialchars($d["confirmacion"]); ?></strong>. 
            Para soporte: <a href="mailto:soporte@festivalurbano2026.com" style="color: var(--color-acento);">soporte@festivalurbano2026.com</a> | 
            WhatsApp: <a href="https://wa.me/50622223333" target="_blank" style="color: var(--color-acento);">+506 2222-3333</a>
        </p>

        <div class="hero-botones" style="margin-top: 2rem;">
            <a href="index.php" class="boton boton-principal">Volver al Inicio</a>
            <a href="servicios.php" class="boton boton-secundario">Ver Programa Completo</a>
        </div>
    </div>

</main>

<?php include "footer.php"; ?>