<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista Usuários</title>
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
    
    <div class="container lisProd">

    <div class="bt-back">
        <a href="menu.php" role="button" class="btn btn-dark">Voltar</a>
      </div>

      <h3>Lista de Usuários | Casablanca</h3>

      <!-- <form class="d-flex buscar" action="buscar_ramal.php" method="post">

        <input class="form-control me-2" name="buscar" type="search" placeholder="Digite o nome, setor ou local" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Buscar</button>

      </form> -->

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nivel</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>

          </tr>
        </thead>

        <tr>
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `usuarios`";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){
              $id_usuario = $array['id_usuario'];
              $nome_usuario = $array['nome_usuario'];
              $mail_usuario = $array['mail_usuario'];
              $nivel_usuario = $array['nivel_usuario'];
              $status_usuario = $array['status_usuario'];
           ?>

           <tbody>
             <td><?php echo $nome_usuario ?></td>
             <td> <?php echo $mail_usuario ?> </td>
             <td> <?php echo $nivel_usuario ?> </td>
             <td> <?php echo $status_usuario ?> </td>

             <td>
               <a class="btn btn-warning btn-sm btedit" href="_editar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-edit"></i>Editar</a>
               <a class="btn btn-danger btn-sm btedit" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
             </td>
           </tbody>

         <?php } ?>

        </tr>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
