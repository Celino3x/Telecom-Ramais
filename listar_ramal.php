<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista de ramais</title>
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

      <h3>Lista de Ramais | Casablanca</h3>

      <form class="d-flex buscar" action="buscar_ramal.php" method="post">

        <input class="form-control me-2" name="buscar" type="text" placeholder="Digite o nome, setor ou local" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Buscar</button>

      </form>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ramal</th>
            <th scope="col">Setor</th>
            <th scope="col">Local</th>
            <?php 
                if(($nivel == 1) || ($nivel == 2)){

            ?>
            <th scope="col">Ação</th>
            <?php } ?>
          </tr>
        </thead>

        <tr>
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `ramais` ORDER BY `nome_ramal`";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){
              $id_ramal = $array['id_ramal'];
              $nome_ramal = $array['nome_ramal'];
              $numero_ramal = $array['numero_ramal'];
              $setor_ramal = $array['setor_ramal'];
              $local_ramal = $array['local_ramal'];
           ?>
           <tbody>
             <td><?php echo $nome_ramal ?></td>
             <td> <?php echo $numero_ramal ?> </td>
             <td> <?php echo $setor_ramal ?> </td>
             <td> <?php echo $local_ramal ?> </td>

             <?php 
                if(($nivel == 1) || ($nivel == 2)){

            ?>
             <td>
               <a class="btn btn-warning btn-sm btedit" href="_editar_ramal.php?id=<?php echo $id_ramal ?>" role="button"><i class="far fa-edit"></i>Editar</a>
               <a class="btn btn-danger btn-sm btedit" href="_deletar_ramal.php?id=<?php echo $id_ramal ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
             </td>
             <?php } ?>
           </tbody>

         <?php } ?>

        </tr>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
