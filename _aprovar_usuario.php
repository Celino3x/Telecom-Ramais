<?php
    include 'conexao.php';

    $id = $_GET['id'];
    $nivel_usuario = $_GET['nivel_usuario'];

     if ($nivel_usuario == 1){

        $update = "UPDATE `usuarios` SET `nivel_usuario`=1,`status_usuario`= 'Ativo' WHERE id_usuario = $id";     
        $atualizacao = mysqli_query($conexao, $update);
        $msg = "Administrador Aprovado!";
        
    }
    if ($nivel_usuario == 2){

        $update = "UPDATE `usuarios` SET `nivel_usuario`=2,`status_usuario`= 'Ativo' WHERE id_usuario = $id";
        $atualizacao = mysqli_query($conexao, $update);
        $msg = "Apoio Aprovado!";
        
    }
    if ($nivel_usuario == 3){

        $update = "UPDATE `usuarios` SET `nivel_usuario`=3,`status_usuario`= 'Ativo' WHERE id_usuario = $id";
        $atualizacao = mysqli_query($conexao, $update);
        $msg = "Consulta Aprovado!";
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Usuário Aprovado | Telecom</title>
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

  <center>
      <h3 class="h3_user"> <?php echo $msg ?> </h3>
      <div>
          <a href="aprovar_usuarios.php" class="btn btn-warning">Voltar</a>
      </div>
  </center>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>