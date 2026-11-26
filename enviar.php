<?php

// Comprobar que el formulario se envió mediante POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

// Configuración
$categoriasValidas = [
    "general" => ["nombre" => "General", "precio" => 25000],
    "vip" => ["nombre" => "VIP Experience", "precio" => 55000],
    "All_Access" => ["nombre" => "All Access", "precio" => 120000]
];

$artistasMGValidos = [
    "feid" => "Feid",
    "milo_j" => "Milo J",
    "alvaro_diaz" => "Álvaro Díaz",
    "nicki_nicole" => "Nicki Nicole",
    "duki" => "Duki"
];

// Recibir y sanitizar datos
$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$telefono = trim($_POST["telefono"] ?? "");
$edad = trim($_POST["edad"] ?? "");
$categoria = trim($_POST["categoria"] ?? "");
$cantidad = trim($_POST["cantidad"] ?? "");
$artistaMG = trim($_POST["artista_mg"] ?? "");
$reglamento = isset($_POST["reglamento"]);

// Validaciones del servidor (idénticas a cliente)
$errores = [];

// 1. Nombre completo
if ($nombre === "") {
    $errores[] = "El nombre completo es obligatorio.";
} elseif (mb_strlen($nombre) < 3) {
    $errores[] = "El nombre debe tener al menos 3 caracteres.";
} elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u', $nombre)) {
    $errores[] = "El nombre solo puede contener letras y espacios.";
} elseif (mb_strlen($nombre) > 100) {
    $errores[] = "El nombre no puede exceder 100 caracteres.";
}

// 2. Correo electrónico
if ($correo === "") {
    $errores[] = "El correo electrónico es obligatorio.";
} elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
} elseif (mb_strlen($correo) > 150) {
    $errores[] = "El correo no puede exceder 150 caracteres.";
}

// 3. Teléfono (exactamente 8 dígitos)
if ($telefono === "") {
    $errores[] = "El teléfono es obligatorio.";
} elseif (!preg_match('/^\d{8}$/', $telefono)) {
    $errores[] = "El teléfono debe tener exactamente 8 dígitos numéricos.";
}

// 4. Edad (18-99)
$edadInt = filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 18, "max_range" => 99]]);
if ($edadInt === false) {
    $errores[] = "La edad debe ser un mayor a 18 años.";
}

// 5. Cantidad (1-4)
$cantidadInt = filter_var($cantidad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 4]]);
if ($cantidadInt === false) {
    $errores[] = "Debe seleccionar una cantidad entre 1 y 4 entradas.";
}

// 6. Categoría
if (!array_key_exists($categoria, $categoriasValidas)) {
    $errores[] = "Debe seleccionar una categoría de entrada válida.";
}

// 6. Reglamento
if (!$reglamento) {
    $errores[] = "Debe aceptar el reglamento para continuar.";
}

// Preparar datos para respuesta
$categoriaInfo = $categoriasValidas[$categoria] ?? ["nombre" => $categoria, "precio" => 0];
$categoriaNombre = $categoriaInfo["nombre"];
$artistaMGNombre = $artistasMGValidos[$artistaMG] ?? "";
$totalPagar = $categoriaInfo["precio"] * $cantidadInt;

// Si hay errores, redirigir de vuelta al formulario con errores en sesión
if (!empty($errores)) {
    session_start();
    $_SESSION['form_errors'] = $errores;
    $_SESSION['form_data'] = [
        'nombre' => $nombre,
        'correo' => $correo,
        'telefono' => $telefono,
        'edad' => $edad,
        'categoria' => $categoria,
        'cantidad' => $cantidad,
        'artista_mg' => $artistaMG,
    ];
    header("Location: contacto.php#formulario");
    exit;
}

// ============================================
// TODO CORRECTO - GUARDAR EN SESIÓN Y REDIRIGIR
// ============================================

session_start();

// Generar número de confirmación único
$confirmacion = "FU2026-" . strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));

// Guardar todo en sesión
$_SESSION["inscrito"] = [
    "nombre" => $nombre,
    "correo" => $correo,
    "telefono" => $telefono,
    "edad" => $edadInt,
    "categoria" => $categoria,
    "categoria_nombre" => $categoriaNombre,
    "categoria_precio" => $categoriaInfo["precio"],
    "cantidad" => $cantidadInt,
    "total_pagar" => $totalPagar,
    "artista_mg" => $artistaMG,
    "artista_mg_nombre" => $artistaMGNombre,
    "reglamento" => true,
    "confirmacion" => $confirmacion,
    "fecha_inscripcion" => date("Y-m-d H:i:s"),
    "fecha_evento" => "2026-12-12",
    "lugar_evento" => "Estadio Nacional, San José, Costa Rica",
    "ip" => $_SERVER['REMOTE_ADDR'] ?? 'desconocida',
    "user_agent" => $_SERVER['HTTP_USER_AGENT'] ?? 'desconocido'
];

// Log de inscripción (para debugging/admin)
error_log("NUEVA INSCRIPCIÓN: {$confirmacion} | {$nombre} | {$correo} | {$categoriaNombre} | " . date("Y-m-d H:i:s"));

// Redirigir a página de confirmación
header("Location: gracias.php");
exit;