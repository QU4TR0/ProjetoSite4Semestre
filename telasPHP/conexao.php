<?php
$usuario = 'usuariosfs';
$senha = 'usuarios';
$database = 'usuariosfs';
$host = '179.188.16.2';
$porta = '3306';

$mysqli = new mysqli($host, $usuario, $senha, $database, $porta);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>