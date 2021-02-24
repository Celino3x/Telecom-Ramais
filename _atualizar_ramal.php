<?php
    $id = $_POST['id'];
    include 'conexao.php';

    //$id_ramal = $_POST['id_ramal'];
    //$numero_ramal = $_POST['numero_ramal'];
    $nome_ramal = $_POST['nome_ramal'];
    $setor_ramal = $_POST['setor_ramal'];
    $local_ramal = $_POST['local_ramal'];


   $sql = "UPDATE `ramais` SET `nome_ramal`='$nome_ramal',`setor_ramal`='$setor_ramal',`local_ramal`='$local_ramal' WHERE id_ramal = $id";
   $atualizar = mysqli_query($conexao, $sql);



    ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Ataulizar Ramal | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <div class="container voltar">
    <center>
      <h3>Atualizado com Sucesso!</h3>
      <a href="listar_ramal.php" class="btn btn-warning"><i class="fas fa-long-arrow-alt-left"></i> Voltar</a>
    </center>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>