<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista de ramais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container lisProd">

    <div class="bt-back">
        <a href="menu.php" role="button" class="btn btn-primary">Voltar</a>
      </div>

      <h3>Lista de Ramais | Casablanca</h3>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ramal</th>
            <th scope="col">Setor</th>
            <th scope="col">Local</th>

            <th scope="col">Ponto</th>
            <th scope="col">Voz</th>

            <th scope="col">Ação</th>

          </tr>
        </thead>

        <tr>
          <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `ramais`";
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){
              $id_ramal = $array['id_ramal'];
              $nome_ramal = $array['numero_ramal'];
              $numero_ramal = $array['nome_ramal'];
              $setor_ramal = $array['setor_ramal'];
              $local_ramal = $array['local_ramal'];
              $ponto_ramal = $array['ponto_ramal'];
              $voz_ramal = $array['voz_ramal'];
           ?>
           <tbody>
             <td><?php echo $nome_ramal ?></td>
             <td> <?php echo $numero_ramal ?> </td>
             <td> <?php echo $setor_ramal ?> </td>
             <td> <?php echo $local_ramal ?> </td>
             <td> <?php echo $ponto_ramal ?> </td>
             <td> <?php echo $voz_ramal ?> </td>

             <td>
               <a class="btn btn-warning btn-sm btedit" href="editar_ramal.php?id=<?php echo $id_ramal ?>" role="button"><i class="far fa-edit"></i>Editar</a>
               <a class="btn btn-danger btn-sm btedit" href="deletar_ramal.php?id=<?php echo $id_ramal ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
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
