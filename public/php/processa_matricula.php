<?php 

require "db.php";

$nome = mysqli_escape_string($conexao, $_POST["nome"]);
$data_nascimento = mysqli_escape_string($conexao, $_POST["data_nascimento"]);
$cpf = mysqli_escape_string($conexao, $_POST["cpf"]);
$endereco = mysqli_escape_string($conexao, $_POST["endereco"]);
$serie = mysqli_escape_string($conexao, $_POST["serie"]);
$turno = mysqli_escape_string($conexao, $_POST["turno"]);
$nome_responsavel = mysqli_escape_string($conexao, $_POST["nome_responsavel"]);
$cpf_responsavel = mysqli_escape_string($conexao, $_POST["cpf_responsavel"]);
$telefone = mysqli_escape_string($conexao, $_POST["telefone"]);
$parentesco = mysqli_escape_string($conexao, $_POST["parentesco"]);

$query = "INSERT INTO matriculas (nome, data_nascimento, cpf, endereco, serie, turno, nome_responsavel, cpf_responsavel, telefone, parentesco) VALUES ('$nome', '$data_nascimento', '$cpf', '$endereco', '$serie', '$turno', '$nome_responsavel', '$cpf_responsavel', '$telefone', '$parentesco')";

mysqli_query($conexao, $query);