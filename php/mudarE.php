<?php

include('conection.php');

if (isset($_POST['email_a'])) {
    
    $email = $_POST['email_a'];

    $sql ="SELECT * FROM usuario WHERE Email_user = '$email'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0){

        $emailN= $_POST['email_n'];
        $sql2 = "UPDATE usuario SET Email_user = '$emailN' WHERE Email_user = '$email'";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute();

        if ($stmt2->rowCount() > 0 ) {

            echo "<script>alert('Sucesso!')</script>";
            echo "<meta http-equiv='refresh' content='0.5;URL=../painelUser.html'>";

        }else{

            echo "<script>alert('ERROR boco!')</script>";
            echo "<meta http-equiv='refresh' content='0.5;URL=../MudarEmail.html'>";

        }

    }else{

        echo "<script>alert('ERROR!')</script>";
        echo "<meta http-equiv='refresh' content='0.5;URL=../MudarEmail.html'>";

    }

}else{

    echo "<script>alert('ERROR!')</script>";

}


?>
