<?php

include 'conexao.php';

$sql = "SELECT * FROM setor ORDER BY nome_setor ASC";
$buscar = mysqli_fetch_array($conexao,$sql);

while ($array = mysqli_fetch_array($buscar)) {
  $id_setor = $array['id_setor'];
  $nome_setor = $array['nome_setor'];


echo $nome_setor


?>
