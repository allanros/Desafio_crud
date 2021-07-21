<?php
require_once 'includes/header.php';
include_once 'php_action/db_connect.php';
include_once 'includes/message.php';
?>

<div class="row" style="font-family: times;">
  <h2 style="margin-left: 7em;" class=""> Edição </h2>
  <hr>
  <div class="col s12 m6 push-m3 grey lighten-4" style="border-radius: 1.5%; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.363);
  padding: 0 3em 3em 3em;">

    <br>
    <h3>Informações para contato</h3>

    <table class="highlight">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Telefone:</th>
          <th>E-mail:</th>
          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php
        $id_client = mysqli_escape_string($connect, $_GET['id_client']);
        $sql = "SELECT * FROM contato_usuario WHERE id_client = '$id_client'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) :

          while ($dados = mysqli_fetch_array($result)) :
        ?>
            <tr>
              <td><?php echo $dados['contato_nome'] ?></td>>
              <td><?php echo $dados['contato_telefone'] ?></td>
              <td><?php echo $dados['contato_email'] ?></td>
              <td><a href="edit_contato.php?id=<?php echo $dados['id'] ?>" class="waves-effect waves-light btn-small yellow" style="color: black"><i class="material-icons right">edit</i>Editar</a></td>

              <td><a href="#modal<?php echo $dados['id']; ?>" class="waves-effect waves-light btn-small modal-trigger red"><i class="material-icons right">delete</i>Remover</a></td>

              <div id="modal<?php echo $dados['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Aviso!</h4>
                  <p>Prestes a deletar, tem certeza?</p>
                </div>
                <div class="modal-footer">

                  <form action="php_action/delete_contact.php" method="POST">
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
        <?php
        endif;
        ?>
      </tbody>
    </table>
    <br>
    <div class="" style="text-align: right;">
      <a href="index.php" class="btn red lighten-1" style="border-radius: 15%;"> Voltar para lista </a>
    </div>
  </div>
</div>

<?php include_once "./includes/footer.php"; ?>