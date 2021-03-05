<?php
  include 'conexao.php';
  $id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editar Ramal | Telecom</title>
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
        <a href="listar_ramal.php" role="button" class="btn btn-dark">Voltar</a>
      </div>

    <h3>Edição de Ramal</h3>
      <form class="form-cad" action="_atualizar_ramal.php" method="post">
        <?php
          $sql = "SELECT * FROM `ramais` WHERE id_ramal = $id";
          $buscar = mysqli_query($conexao, $sql);
          while ($array = mysqli_fetch_array($buscar)){

            $id_ramal = $array['id_ramal'];
            $nome_ramal = $array['nome_ramal'];
            $numero_ramal = $array['numero_ramal'];
            $setor_ramal = $array['setor_ramal'];
            $local_ramal = $array['local_ramal'];
        ?>

          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome_ramal" class="form-control" value="<?php echo $nome_ramal ?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Ramal</label>
            <input type="number" name="numero_ramal" class="form-control" value="<?php echo $numero_ramal ?>" disabled>
            <input type="number" name="id" class="form-control displayid" value="<?php echo $id ?>" >
          </div>

          <select class="form-select" name="setor_ramal" value="<?php echo $setor_ramal ?>">
         
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM setor ORDER BY `nome_setor`";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)){
              $id_setor = $array['id_setor'];
              $nome_setor = $array['nome_setor'];
            ?>

            <option><?php echo $nome_setor ?></option>
            
            <?php } ?>

          </select>

        </br>

          <select class="form-select" name="local_ramal" value="<?php echo $local_ramal ?>">
          
              
              <?php
              include 'conexao.php';
              $sql2 = "SELECT * FROM localcb";
              $buscar2 = mysqli_query($conexao,$sql2);

              while ($array = mysqli_fetch_array($buscar2)){
                 $id_local = $array['id_local'];
                 $nome_local = $array['nome_local'];
                ?>

            <option><?php echo $nome_local ?></option>

            <?php } ?>
          </select>

    <!--      <div class="mb-3">
            <label class="form-label">Ponto</label>
            <input type="text" name="ponto_ramal" class="form-control" >
          </div>

          <div class="mb-3">
            <label class="form-label">Voz</label>
            <input type="text" name="voz_ramal" class="form-control" >
          </div> -->

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
