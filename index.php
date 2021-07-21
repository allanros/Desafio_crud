<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
include_once 'includes/message.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light" style="color: white">Clientes</h3>
    <div class="" style="text-align: left;">
      <table class="striped blue lighten-2" style="width: 60em;">
        <thead>
          <tr>
            <th>Nome:</th>
            <th>Apelido:</th>
            <th>Telefone:</th>
            <th>E-mail:</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM dados_usuario";
          $resultado = mysqli_query($connect, $sql);

          if (mysqli_num_rows($resultado) > 0) :

            while ($dados = mysqli_fetch_array($resultado)) :
          ?>
              <tr>
                <td><?php echo $dados['nome'] ?></td>
                <td><?php echo $dados['apelido'] ?></td>
                <td><?php echo $dados['telefone'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><a href="edit.php?id=<?php echo $dados['id'] ?>" class="waves-effect waves-light btn-small yellow" style="color: black"><i class="material-icons right">edit</i>Editar</a></td>

                <td><a href="#modal<?php echo $dados['id']; ?>" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons right">delete</i>Remover</a></td>

                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                  <div class="modal-content">
                    <h4>Aviso!</h4>
                    <p>Prestes a deletar, tem certeza?</p>
                  </div>
                  <div class="modal-footer">

                    <form action="php_action/delete.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                      <button type="submit" name="btn-delete" class="btn-flat waves-effect waves-green">Continuar</button>
                      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancelar</a>
                    </form>

                  </div>
                </div>

              </tr>
            <?php
            endwhile;
          else : ?>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          <?php
          endif;
          ?>
        </tbody>
      </table>
    </div>

    <br>
    <a href="add_client.php" class="btn"> Cadastrar cliente </a>

  </div>
</div>

<?php
include_once 'includes/footer.php';
?>