<?php

include('conection.php');

    $user = $_POST['name_user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $food = $_POST['name_food'];


    

    $sql = "INSERT INTO  cadastro (Nome_cadastro, Email_cadastro, Senha_cadastro) VALUES('$user', '$email', '$pass');
    INSERT INTO proprietario (NomeEst_prop, TelefoneEst_prop, DataNasc_prop) VALUES ('$food','$tel','$date')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount();




?>