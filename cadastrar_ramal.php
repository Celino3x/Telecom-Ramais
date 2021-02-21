<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Ramal | Telecom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container formCadRamal">
    <h3>Form. Cadastrar Ramal</h3>
      <form class="form-cad" action="_inserir_ramal.php" method="post">

          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome_ramal" class="form-control" placeholder="João da Silva" required autocomplete="off">
          </div>

          <div class="mb-3">
            <label class="form-label">Ramal</label>
            <input type="number" name="numero_ramal" class="form-control" placeholder="7777" required autocomplete="off">
          </div>

          <select class="form-select" name="setor_ramal" required>
            <option selected>Selecione o Setor</option>
            <option value="Arte">Arte</option>
            <option value="Cenografia">Cenografia</option>
            <option value="Continuidade">Continuidade</option>
            <option value="Telecom">Telecom</option>
            <option value="Tecnologia da Informação">Tecnologia da Informação</option>
          </select>

        </br>

          <select class="form-select" name="local_ramal" required>
            <option selected>Selecione o Local</option>
            <option value="PA1">PA1</option>
            <option value="PA2">PA2</option>
            <option value="PA3">PA3</option>
            <option value="PA4">PA4</option>
            <option value="Estúdio D">Estúdio D</option>
            <option value="Estúdio E">Estúdio E</option>
            <option value="Estúdio F">Estúdio F</option>
            <option value="Estúdio G">Estúdio G</option>
            <option value="Estúdio H">Estúdio H</option>
            <option value="Estúdio I">Estúdio I</option>
            <option value="Estúdio J">Estúdio J</option>
            <option value="G1">G1</option>
            <option value="G2">G2</option>
            <option value="G3">G3</option>
            <option value="Recepção">Recepção</option>
            <option value="Guarita">Guarita</option>
          </select>

          <div class="mb-3">
            <label class="form-label">Ponto</label>
            <input type="text" name="ponto_ramal" class="form-control" placeholder="A00" autocomplete="off">
          </div>

          <div class="mb-3">
            <label class="form-label">Voz</label>
            <input type="text" name="voz_ramal" class="form-control" placeholder="V00" autocomplete="off">
          </div>

          <div class="bt-cad">
            <button type="submit" class="btn btn-secondary"><i class="far fa-save"></i> Cadastrar</button>
          </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
