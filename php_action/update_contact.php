<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
  $contato_nome = mysqli_escape_string($connect, $_POST['contato_nome']);
  $contato_telefone = mysqli_escape_string($connect, $_POST['contato_telefone']);
  $contato_email = mysqli_escape_string($connect, $_POST['contato_email']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE contato_usuario SET contato_nome = '$contato_nome', contato_telefone = '$contato_telefone', 
  contato_email = '$contato_email' WHERE id = '$id'";
  
  if(mysqli_query($connect, $sql)):
    $_SESSION['message'] = "Edição efetuada com sucesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['message'] = "Erro ao efetuar edição!";
    header('Location: ../index.php');
  endif;
endif;