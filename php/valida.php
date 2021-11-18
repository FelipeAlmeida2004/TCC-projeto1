<?php

include('conection.php');

$pass = $_POST['pass'];
$email = $_POST['email'];
$food = $_POST['food'];


if(empty($_POST['food']) == true){

    $sql = "SELECT * FROM usuario WHERE Email_user = '$email' AND Senha_user = '$pass'";
    $sql = $pdo->prepare($sql);
    $sql->execute();

        if ($sql->rowCount() > 0) {
            
            header("Location: ../index.html");

        }else{
                echo "<script>alert('Dados Invalidos')</script>";
                echo "<meta http-equiv='refresh' content='0.5;URL=../Login.html'>";
            }
}else{

    $sql = "SELECT * FROM proprietario WHERE Email_prop = '$email' AND Senha_prop = '$pass' AND NomeEst_prop = '$food'";
    $sql = $pdo->prepare($sql);
    $sql->execute();
    
    
    if ($sql->rowCount() > 0) {
        
        header("Location: ../painel.html");
    }else{
        echo "<script>alert('Dados Invalidos')</script>";
        echo "<meta http-equiv='refresh' content='0.5;URL=../Login.html'>";
      
    }
   
}


?>