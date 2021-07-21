<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
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
  /*$complemento = mysqli_escape_string($connect, $_POST['complemento']);
  $contato_nome = mysqli_escape_string($connect, $_POST['contato_nome']);
  $contato_telefone = mysqli_escape_string($connect, $_POST['contato_telefone']);
  $contato_email = mysqli_escape_string($connect, $_POST['contato_email']);*/

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE dados_usuario SET nome = '$nome', apelido = '$apelido', cpf = '$cpf', telefone = '$telefone', 
  email = '$email', cep = '$cep', endereco = '$endereco', estado = '$estado', complemento = '$complemento', cidade = '$cidade',
  numero = '$numero' WHERE id = '$id'";
  
  if(mysqli_query($connect, $sql)):
    $_SESSION['message'] = "Edição efetuada com sucesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['message'] = "Erro ao efetuar edição!";
    header('Location: ../index.php');
  endif;
endif;