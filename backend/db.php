<?php

// Mude as configurações do banco se necessário

$servidor = "localhost";
$usuario = "root";
$senha = "rootroot";
$db = "colegio_modelo";
$porta = 3307;

$conexao = mysqli_connect($servidor, $usuario, $senha, $db, $porta);

if (!$conexao) {
    echo "Conexão Falhou!";
} else {
    echo "Conexão feita com sucesso!";
}
