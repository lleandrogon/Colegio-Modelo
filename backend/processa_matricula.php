<?php

require "db.php";

header("Access-Control-Allow-Origin: http://localhost:8080");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$dados_json = file_get_contents("php://input");
$dados = json_decode($dados_json, true);

$nome = mysqli_escape_string($conexao, $dados['nome']);
$data_nascimento = mysqli_escape_string($conexao, $dados['data_nascimento']);
$cpf = mysqli_escape_string($conexao, $dados['cpf']);
$endereco = mysqli_escape_string($conexao, $dados['endereco']);
$serie = mysqli_escape_string($conexao, $dados['serie']);
$turno = mysqli_escape_string($conexao, $dados['turno']);
$nome_responsavel = mysqli_escape_string($conexao, $dados['nome_responsavel']);
$cpf_responsavel = mysqli_escape_string($conexao, $dados['cpf_responsavel']);
$telefone = mysqli_escape_string($conexao, $dados['telefone']);
$parentesco = mysqli_escape_string($conexao, $dados['parentesco']);

$query = "INSERT INTO matriculas (nome, data_nascimento, cpf, endereco, serie, turno, nome_responsavel, cpf_responsavel, telefone, parentesco) 
VALUES ('$nome', '$data_nascimento', '$cpf', '$endereco', '$serie', '$turno', '$nome_responsavel', '$cpf_responsavel', '$telefone', '$parentesco')";

mysqli_query($conexao, $query);
