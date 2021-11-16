<?php

include('conection.php');

$pass = $_POST['pass'];
$email = $_POST['email'];



$sql = "SELECT * FROM cadastro WHERE Email_cadastro = '$email' AND Senha_cadastro = '$pass'";
$sql = $pdo->prepare($sql);
$sql->execute();



if ($sql->rowCount() > 0) {
    
    header("Location: ../index.html");
}else{
    echo "<script>alert('Dados Invalidos')</script>";
    echo "<meta http-equiv='refresh' content='0.5;URL=../Login.html'>";
  
}

?>