<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-delete'])):
  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "DELETE FROM dados_usuario WHERE id = '$id'";
  
  if(mysqli_query($connect, $sql)):
    $_SESSION['message'] = "Remoção efetuada com sucesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['message'] = "Erro ao efetuar remoção!";
    header('Location: ../index.php');
  endif;
endif;