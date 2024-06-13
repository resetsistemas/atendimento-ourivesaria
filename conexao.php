<?php
$host = '172.18.0.5'; // Nome do serviço definido no docker-compose.yml
$port = '5432';
$dbname = 'ourivesaria';
$user = 'ourivesaria';
$password = 'Sspk159288**';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    if ($pdo) {
        echo "Conexão com PostgreSQL estabelecida com sucesso!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>