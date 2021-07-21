<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $apelido = mysqli_escape_string($connect, $_POST['apelido']);
  $cpf = mysqli_escape_string($connect, $_POST['cpf']);
  $telefone = mysqli_escape_string($connect, $_POST['telefone']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $endereco = mysqli_escape_string($connect, $_POST['endereco']);
  $cep = mysqli_escape_string($connect, $_POST['cep']);
  $estado = mysqli_escape_string($connect, $_POST['estado']);
  $cidade = mysqli_escape_string($connect, $_POST['cidade']);
  $numero = mysqli_escape_string($connect, $_POST['numero']);
  $complemento = mysqli_escape_string($connect, $_POST['complemento']);
  /*$contato_nome = mysqli_escape_string($connect, $_POST['contato_nome']);
  $contato_telefone = mysqli_escape_string($connect, $_POST['contato_telefone']);
  $contato_email = mysqli_escape_string($connect, $_POST['contato_email']);*/

  $sql = "INSERT INTO dados_usuario (nome, apelido, cpf, telefone, email, cep, endereco, estado, complemento, cidade, numero)
  VALUES ('$nome', '$apelido', '$cpf', '$telefone', '$email', '$cep', '$endereco', '$estado', '$complemento', '$cidade', '$numero')";

  if(mysqli_query($connect, $sql)):
    //$_SESSION['message'] = "Cadastro efetuado com sucesso!";
    header('Location: ../add_contate.php?cpf='.$cpf);
  else:
    $_SESSION['message'] = "Erro ao efetuar cadastro!";
    header('Location: ../index.php');
  endif;
endif;