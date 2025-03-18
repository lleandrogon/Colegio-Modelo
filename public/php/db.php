<?php

$servidor = "localhost";
$usuario = "root";
$senha = "1625147451Lgc*";
$db = "colegio_modelo";
$porta = 3307; // Mude para 3306 se necessário

$conexao = mysqli_connect($servidor, $usuario, $senha, $db, $porta);

if (!$conexao) {
    echo "Conexão Falhou!";
} else {
    echo "Conexão feita com sucesso!";
}
