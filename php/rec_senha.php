<?php

include('conection.php');


if(isset($_POST['email_rec']) && isset($_POST['senha_rec']) ){

    $email_r = $_POST['email_rec'];
    $novaSenha = $_POST['senha_rec'];

    $sql = "SELECT * FROM usuario WHERE Email_user = '$email_r'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        $sql_senha = "UPDATE usuario SET Senha_user = '$novaSenha' WHERE Email_user = '$email_r'";
        $stmt3 = $pdo->prepare($sql_senha);
        $stmt3->execute();

        if ($stmt3->rowCount() > 0) {
            
            echo "<script>alert('Sucesso!')</script>";
            echo "<meta http-equiv='refresh' content='0.5;URL=../index.html'>";

        }else{
            echo "<script>alert('ERROR!')</script>";
            echo "<meta http-equiv='refresh' content='0.5;URL=../EsqueciSenha.html'>";
        }

    }else{

        $sql2 = "SELECT * FROM proprietario WHERE Email_prop = $email_r";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();
        
        if ($stmt2->rowCount() > 0) {
            
            $sql_senha2 = "UPDATE usuario SET Senha_user = '$novaSenha' WHERE Email_user = '$email_r'";
            $stmt4 = $pdo->prepare($sql_senha2);
            $stmt4->execute();

            if ($stmt4->rowCount() > 0 ) {
                
                echo "<script>alert('Sucesso!')</script>";
                echo "<meta http-equiv='refresh' content='0.5;URL=../index.html'>";

            }else{

                echo "<script>alert('ERROR!')</script>";
                echo "<meta http-equiv='refresh' content='0.5;URL=../EsqueciSenha.html'>";

            }

        }else{

            echo "<script>alert('Esse email não existe!')</script>";
            echo "<meta http-equiv='refresh' content='0.5;URL=../EsqueciSenha.html'>";

        }

    }


}else{
    echo "<script>alert('ERROR!')</script>";
}



?>