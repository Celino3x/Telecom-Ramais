<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Usuário | Telecom</title>
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

      <div class="container form_cad_user">
          <div class="voltar_topo">
              <a href="menu.php" role="button" class="btn btn-secondary"><i class="fas fa-undo-alt"></i> Voltar</a>
          </div>
          <h3>Cadastro de Usuário</h3>
          <form action="_insert_usuario.php" method="post">
              <div class="form-group">
                  <label>Nome do Usuário</label>
                  <input type="text" name="nome_usuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
              </div>
              <div class="form-group">
                  <label>E-mail</label>
                  <input type="email" name="mail_usuario" class="form-control" required autocomplete="off" placeholder="exemplo@exemplo.com">
              </div>
              <div class="form-group">
                  <label>Senha</label>
                  <input type="password" id="txtSenha"  name="senha_usuario" class="form-control" required autocomplete="off">
              </div>
              <div class="form-group">
                  <label>Repetir Senha</label>
                  <input type="password" name="senha_usuario2" class="form-control" required autocomplete="off" oninput="validaSenha(this)">
                  <small>Precisa ser igual a senha digitada acima.</small>
              </div>
              <!--<div class="form-group">
                  <label>Foto</label>
                  <input type="file" id="formFile" name="foto_usuario" class="form-control" autocomplete="off">
              </div>-->

              <div class="select_nivel">
                  <label>Nível de Acesso</label>
                  <select class="form-select" name="nivel_usuario">
                      <optgroup>
                          <option value="1">Administrador</option>
                          <option value="2">Apoio</option>
                          <option value="3">Consulta</option>
                      </optgroup>
                  </select>
              </div>
              <div class="bt_cadUser">
                  <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Cadastrar</button>
              </div>
          </form>
      </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>


</body>
</html>
