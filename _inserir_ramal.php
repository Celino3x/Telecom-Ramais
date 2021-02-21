<?php
    include 'conexao.php';

    $numero_ramal = $_POST['numero_ramal'];
    $nome_ramal = $_POST['nome_ramal'];
    $setor_ramal = $_POST['setor_ramal'];
    $local_ramal = $_POST['local_ramal'];


    $sql = "INSERT INTO `ramais`(`numero_ramal`, `nome_ramal`, `setor_ramal`, `local_ramal`, `ponto_ramal`, `voz_ramal`) VALUES ($numero_ramal,'$nome_ramal','$setor_ramal','$local_ramal')";
    $inserir = mysqli_query($conexao, $sql);


    ?>