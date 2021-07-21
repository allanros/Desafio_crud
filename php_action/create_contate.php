<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
  $contato_nome = mysqli_escape_string($connect, $_POST['contato_nome']);
  $contato_telefone = mysqli_escape_string($connect, $_POST['contato_telefone']);
  $contato_email = mysqli_escape_string($connect, $_POST['contato_email']);

  $id_client = mysqli_escape_string($connect, $_POST['id_client']);

  $sql = "INSERT INTO contato_usuario (id_client, contato_nome, contato_telefone, contato_email) VALUES ('$id_client', '$contato_nome', '$contato_telefone', '$contato_email')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['message'] = "Cadastro efetuado com sucesso!";
    header('Location: ../index.php');
  else:
    $_SESSION['message'] = "Erro ao efetuar cadastro!";
    header('Location: ../index.php');
  endif;
endif;

if(isset($_POST['btn-renovar'])):
  $contato_nome = mysqli_escape_string($connect, $_POST['contato_nome']);
  $contato_telefone = mysqli_escape_string($connect, $_POST['contato_telefone']);
  $contato_email = mysqli_escape_string($connect, $_POST['contato_email']);

  $id_client = mysqli_escape_string($connect, $_POST['id_client']);

  $sql = "INSERT INTO contato_usuario (id_client, contato_nome, contato_telefone, contato_email) VALUES ('$id_client', '$contato_nome', '$contato_telefone', '$contato_email')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['message'] = "Contato adicionado com sucesso!";
    header('Location: ../add_contact.php?id_client='.$id_client);
  else:
    $_SESSION['message'] = "Erro ao adicionar contato!";
    header('Location: ../add_contact.php?id_client='.$id_client);
  endif;
endif;