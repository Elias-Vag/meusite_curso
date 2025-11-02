<?php
// Configurações do banco local (XAMPP)
$host = 'localhost';
$dbname = 'website_db';   // 👉 substitua pelo nome real do seu banco
$user = 'root';
$pass = '';

try {
    // Cria a conexão PDO
    $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}
?>