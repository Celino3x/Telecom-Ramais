<?php
  include 'conexao.php';
  $id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editar Setor | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" type="image/x-icon" href="tele.ico">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <?php
    include 'navbar.php';
    ?>

    <div class="container formCadRamal">
    
    <div class="bt-back">
        <a href="listar_setor.php" role="button" class="btn btn-dark">Voltar</a>
    </div>

    <h3>Edição de Setor</h3>
      <form class="form-cad" action="_atualizar_setor.php" method="post">
        <?php
          $sql = "SELECT * FROM `setor` WHERE id_setor = $id";
          $buscar = mysqli_query($conexao, $sql);
          while ($array = mysqli_fetch_array($buscar)){

            $id_setor = $array['id_setor'];
            $nome_setor = $array['nome_setor'];
            
        ?>

          <div class="mb-3">
            <label class="form-label">Nome Setor</label>
            <input type="text" name="nome_setor" class="form-control" value="<?php echo $nome_setor ?>">
            <input type="text" name="id" class="form-control" value="<?php echo $id_setor ?>" style="display:none">
          </div>

          
          <div class="bt-cad">
            <button type="submit" id="bt-update" class="btn btn-secondary"><i class="far fa-save"></i> Atualizar</button>
          </div>
          <?php } ?>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
