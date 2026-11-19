<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Festival Urbano 2026 - El festival de música urbana más grande de Centroamérica. Feid, Milo J, Álvaro Díaz y más. 12 Diciembre, Estadio Nacional.">

    <title>
        <?php echo isset($tituloPagina) ? $tituloPagina : "FESTIVAL URBANO 2026 | Siente el Sonido"; ?>
    </title>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=Great+Vibes&display=swap" media="print" onload="this.media='all'">

    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>

<header class="header" role="banner">
    <div class="header-inner">
        <a href="index.php" class="logo" aria-label="Festival Urbano 2026 - Inicio">
            FESTIVAL <span>URBANO</span> 2026
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-desktop" aria-label="Navegación principal">
            <a href="index.php" class="nav-link">Inicio</a>
            <a href="nosotros.php" class="nav-link">Nosotros</a>
            <a href="servicios.php" class="nav-link">Programa</a>
            <a href="contacto.php" class="nav-link">Inscripciones</a>
            <a href="contacto.php" class="nav-link nav-cta">Obtener entradas</a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobileMenu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Mobile Menu Panel -->
<div class="mobile-menu-overlay" id="mobileOverlay" aria-hidden="true"></div>
<nav class="mobile-menu" id="mobileMenu" aria-label="Menú móvil">
    <a href="index.php" class="nav-link">Inicio</a>
    <a href="nosotros.php" class="nav-link">Nosotros</a>
    <a href="servicios.php" class="nav-link">Programa</a>
    <a href="contacto.php" class="nav-link">Inscripciones</a>
    <a href="contacto.php" class="nav-link nav-cta">Obtener entradas</a>
</nav>