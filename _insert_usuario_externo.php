<?php
    include 'conexao.php';
    include 'password/password.php';

    $nome_usuario = $_POST['nome_usuario'];
    $mail_usuario = $_POST['mail_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    //$nivel_usuario = $_POST['nivel_usuario'];
    $status = 'Inativo';

    $sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `status_usuario`) VALUES ('$nome_usuario','$mail_usuario',sha1('$senha_usuario'),'$status')";

    $inserir = mysqli_query($conexao, $sql);

?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Adicionado | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" type="image/x-icon" href="tele.ico">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <center class="center_Sucess">
      <h3>Usuário adicionado com sucesso!</h3>
      <p>Aguardando aprovação dos administradores</p>
      <div>
          <a href="cadastro_usuario.php" class="btn btn-warning">Voltar</a>
      </div>
  </center>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>