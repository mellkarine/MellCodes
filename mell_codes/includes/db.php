<?php 

/* Conexão com o Banco de Dados */ 

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na Conexão com o Banco de Dados: " . $conn->connect_error);
}

?>