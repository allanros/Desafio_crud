<?php
require_once 'includes/header.php';
include_once 'php_action/db_connect.php';
include_once 'includes/message.php';
if (isset($_GET['id_client'])) :
  $id_client = mysqli_escape_string($connect, $_GET['id_client']);
endif;
?>


<div class="row" style="font-family: times;">
  <h2 style="margin-left: 7em;" class=""> Cadastro </h2>
  <hr>
  <div class="col s12 m6 push-m3 grey lighten-4" style="border-radius: 1.5%; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.363);
  padding: 0 3em 3em 3em;">

    <br>
    <h3 class="">Informações para contato</h3>
    <form action="php_action/create_contate.php" method="POST">
      <input type="hidden" name="id_client" value="<?php echo $id_client; ?>">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="contato_nome" id="contato_nome" placeholder="Nome do contato">
          <label for="contato_nome">Nome</label>
        </div>

        <div class="input-field col s6">
          <input type="text" name="contato_telefone" id="contato_telefone" placeholder="Telefone do contato">
          <label for="contato_telefone">Telefone</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="contato_email" id="contato_email" placeholder="Email do contato">
          <label for="contato_email">E-mail</label>
        </div>

      </div>
      <div class="" style="text-align: right;">
        <button type="submit" name="btn-renovar" class="btn" style="margin-right: 1em;">Adicionar</button>
        <button type="submit" name="btn-cadastrar" class="btn" style=" border-radius: 15%; margin-right: 1em;">Cadastrar e finalizar</button>
      </div>
    </form>

  </div>
</div>

<?php include_once "./includes/footer.php"; ?>