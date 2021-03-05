<?php
    include 'conexao.php';

    $nome_ramal = $_POST['nome_ramal'];
    $numero_ramal = $_POST['numero_ramal'];
    $setor_ramal = $_POST['setor_ramal'];
    $local_ramal = $_POST['local_ramal'];

    $sql = "INSERT INTO `ramais`(`numero_ramal`, `nome_ramal`, `setor_ramal`, `local_ramal`) VALUES ($numero_ramal,'$nome_ramal','$setor_ramal','$local_ramal')";

    $inserir = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Página Inicial | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizarindex.css">
    <link rel="shortcut icon" type="image/x-icon" href="tele.ico">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <?php
    include 'navbar.php';
    ?>

  <center>

      <h3>Adicionado com sucesso!</h3>
      <p>Nada é tão horrível que não possa piorar muito!</p>
      <div>
          <a href="cadastrar_ramal.php" class="btn btn-warning">Voltar</a>
      </div>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
