<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Menu Principal | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="tele.ico">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>



    <?php
    include 'navbar.php';
    ?>

  <div class="container menu_itens">
        <center>
            <img src="logo.png" class="logo animate__animated animate__pulse" alt="">
            <h3 class="title-menu">Ramais Casablanca</h3>
        </center>
        <div class="row">
            <?php 
                if(($nivel == 1) || ($nivel == 2)){

            ?>
            <div class="col-sm-6 quad-index">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Ramal</h5>
                        <p class="card-text">Opção para adicionar novos ramais</p>
                        <a href="cadastrar_ramal.php" class="btn btn-secondary"><i class="fas fa-cash-register"></i> Adicionar Ramal</a>
                    </div>
                </div>
            </div>
            <?php } ?>


                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listar Ramais</h5>
                            <p class="card-text">Opção para consulta de ramais Casablanca.</p>
                            <a href="listar_ramal.php" class="btn btn-secondary"><i class="fas fa-list-ol"></i> Listar Ramais</a>
                        </div>
                    </div>
                </div>

                <?php 
                if(($nivel == 1) || ($nivel == 2)){

                 ?>
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Setor</h5>
                            <p class="card-text">Opção para cadastrar setores.</p>
                            <a href="adicionar_setor.php" class="btn btn-secondary"><i class="fas fa-warehouse"></i> Cadastrar Setor</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php 
                if(($nivel == 1) || ($nivel == 2)){

                 ?>
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Local</h5>
                            <p class="card-text">Opção para cadastrar local.</p>
                            <a href="adicionar_local.php" class="btn btn-secondary"><i class="fas fa-map-marker-alt"></i> Cadastrar Local</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php 
                if(($nivel == 1) || ($nivel == 2)){

                 ?>
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listar e Editar Setor</h5>
                            <p class="card-text">Lista de Setores Casablanca.</p>
                            <a href="listar_setor.php" class="btn btn-secondary"><i class="far fa-edit"></i> Editar Setor</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php 
                if($nivel == 1){

                 ?>
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aprovar Usuários</h5>
                            <p class="card-text">Listar usuários para acesso de sistema.</p>
                            <a href="aprovar_usuarios.php" class="btn btn-secondary"><i class="far fa-edit"></i> Aprovar Usuário</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php 
                if($nivel == 1){

                 ?>                
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Usuários</h5>
                            <p class="card-text">Cadastrar usuários no sistema.</p>
                            <a href="cadastro_usuario.php" class="btn btn-dark"><i class="fas fa-user-plus"></i> Cadastrar Usuário</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php 
                if($nivel == 1){

                 ?>                     
                <div class="col-sm-6 quad-index">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listar Usuários</h5>
                            <p class="card-text">Listar usuários no sistema, editar e excluir.</p>
                            <a href="listar_usuario.php" class="btn btn-dark"><i class="fas fa-user-plus"></i> Listar Usuário</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                                
            </div>                
        </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
