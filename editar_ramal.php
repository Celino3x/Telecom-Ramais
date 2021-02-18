<?php
  $id = $_GET['id'];
  include 'conexao.php';
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editar Ramal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>

    <div class="bt-back">
        <a href="menu.php" role="button" class="btn btn-primary">Voltar</a>
    </div>

    <form action="_atualizar_ramais.php" method="post">
      <?php
      $sql = "SELECT * FROM `ramais` WHERE id_ramais = $id";
      $buscar = mysqli_query($conexao,$sql);
      while ($array = mysqli_fetch_array($buscar)){
        $id_ramal = $array['id_ramal'];
        $numero_ramal = $array['numero_ramal'];
        $nome_ramal = $array['nome_ramal'];
        $setor_ramal = $array['setor_ramal'];
        $local_ramal = $array['local_ramal'];
        $ponto_ramal = $array['ponto_ramal'];
        $voz_ramal = $array['voz_ramal'];

       ?>

       <div class="mb-3">
         <label>Número do Ramal</label>
         <input type="number" class="form-control inputNumRamal" name="numero_ramal" value="<?php echo $numero_ramal ?>" disabled>
         <input type="number" class="form-control inputId" name="id" value="<?php echo $id ?>">
       </div>
       <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" class="form-control" name="nome_ramal" value="<?php echo $nome_ramal ?>">
       </div>

       <select class="form-select" name="nome_setor" value="<?php echo $nome_setor ?>">
         <option value="Arte">Arte</option>
         <option value="Continuidade">Continuidade</option>
         <option value="Cenografia">Cenografia</option>
       </select>

       <div class="bt-cad">
          <button type="submit" id="bt-cad" class="btn bt" name="button">Atualizar</button>
       </div>

     <?php } ?>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
