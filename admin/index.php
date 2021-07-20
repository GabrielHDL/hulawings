<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: /admin/contenido');
} else {
    header('Location: /admin/login');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="robots" content="noindex">
</head>
</html>