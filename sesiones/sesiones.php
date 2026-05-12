<?php
session_start(); // Siempre debe ir al inicio

// Simulamos que el usuario validó sus credenciales
$_SESSION['usuario'] = "David Macias";
$_SESSION['rol'] = "Administrador";

echo "Sesión iniciada para: " . $_SESSION['usuario'];
?>
<br>
<a href="perfil.php">Ir al perfil protegido</a>

<?php
session_start(); // Reanudamos la sesión existente

if (isset($_SESSION['usuario'])) {
    echo "<h2>Bienvenido de nuevo, " . $_SESSION['usuario'] . "</h2>";
    echo "Tu rango es: " . $_SESSION['rol'];
} else {
    echo "No tienes permiso. Por favor, inicia sesión.";
}
?>