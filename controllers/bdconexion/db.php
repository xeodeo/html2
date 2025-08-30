<?php
// db.php - Conexión a la base de datos

// Configuración de la base de datos
$host = 'localhost'; // Dirección del servidor (localhost si es local)
$dbname = 'tienda'; // Nombre de tu base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña del usuario

// Crear la conexión con PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error para excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Opcionalmente, puedes configurar el conjunto de caracteres
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje
    die("Error de conexión: " . $e->getMessage());
}

?>
