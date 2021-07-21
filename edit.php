<?php
include_once 'includes/header.php';
include_once 'php_action/db_connect.php';
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM dados_usuario WHERE id = '$id'";
  $result = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($result);
endif;
?>

<div class="row" style="font-family: times;">
  <h2 style="margin-left: 7em;" class=""> Cadastro </h2>
  <hr>
  <div class="col s12 m6 push-m3 grey lighten-4" style="border-radius: 8%; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.363);
  padding: 0 3em 3em 3em;">

    <br>
    <h3> Dados do cliente </h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s6">
          <input type="text" name="apelido" value="<?php echo $dados['apelido']; ?>" id="apelido">
          <label for="apelido">Apelido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" value="<?php echo $dados['cpf']; ?>" name="cpf" id="cpf">
          <label for="cpf">CPF/CNPJ</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="telefone" value="<?php echo $dados['telefone']; ?>" id="telefone">
          <label for="telefone">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="email" value="<?php echo $dados['email']; ?>" id="email">
          <label for="email">E-mail</label>
        </div>
      </div>

      <h3 class=""> Informações sobre o endereço </h3>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="endereco" value="<?php echo $dados['endereco']; ?>" id="endereco">
          <label for="endereco">Endereço</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="cep" value="<?php echo $dados['cep']; ?>" id="cep">
          <label for="cep">CEP</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="estado" value="<?php echo $dados['estado']; ?>" id="estado">
          <label for="estado">Estado</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>" id="cidade">
          <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="numero" value="<?php echo $dados['numero']; ?>" id="numero">
          <label for="numero">Número</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="complemento" value="<?php echo $dados['complemento']; ?>" id="complemento">
          <label for="complemento">Complemento</label>
        </div>

      
      <div class="" style="text-align: right;">
        <a href="edit_contact.php?id_client=<?php echo $dados['id']; ?>" class="btn yellow" style="margin-right: 10px; color: black;">Editar contatos</a>
        <a href="add_contate.php?cpf=<?php echo $dados['cpf']; ?>" class="btn" style="margin-right: 10em;">Novo contato</a>
        <button type="submit" name="btn-editar" class="btn" style=" border-radius: 15%; margin-right: 1em;">Editar</button>
        <a href="index.php" class="btn red lighten-1" style="border-radius: 15%;"> Voltar para lista </a>
      </div>
    </form>

  </div>
</div>

<?php include_once "./includes/footer.php"; ?>