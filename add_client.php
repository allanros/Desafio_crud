<?php
require_once 'includes/header.php';
?>

<div class="row" style="font-family: times;">
  <h2 style="margin-left: 7em;" class=""> Cadastro </h2>
  <hr>
  <div class="col s12 m6 push-m3 grey lighten-4" style="border-radius: 8%; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.363);
  padding: 0 3em 3em 3em;">

    <br>
    <h3> Dados do cliente </h3>
    <form action="php_action/create.php" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s6">
          <input type="text" name="apelido" id="apelido">
          <label for="apelido">Apelido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="cpf" id="cpf">
          <label for="cpf">CPF/CNPJ</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="telefone" id="telefone">
          <label for="telefone">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="email" id="email">
          <label for="email">E-mail</label>
        </div>
      </div>

      <h3 class=""> Informações sobre o endereço </h3>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="endereco" id="endereco">
          <label for="endereco">Endereço</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="cep" id="cep">
          <label for="cep">CEP</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="estado" id="estado">
          <label for="estado">Estado</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="cidade" id="cidade">
          <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="numero" id="numero">
          <label for="numero">Número</label>
        </div>

        <div class="input-field col s12">
          <input type="text" name="complemento" id="complemento">
          <label for="complemento">Complemento</label>
        </div>

      </div>
      <div class="" style="text-align: right;">
        <button type="submit" name="btn-cadastrar" class="btn" style=" border-radius: 15%; margin-right: 1em;">Continuar</button>
        <a href="index.php" class="btn red lighten-1" style="border-radius: 15%;"> Voltar para lista </a>
      </div>
    </form>

  </div>
</div>

<?php include_once "./includes/footer.php"; ?>