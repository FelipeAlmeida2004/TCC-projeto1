<?php

include('conection.php');

if (isset($_POST['nome_a'])) {
    
    $nome = $_POST['nome_a'];

    $sql ="SELECT * FROM usuario WHERE Nome_user = '$nome'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0){

        $nomeN= $_POST['nome_n'];
        $sql2 = "UPDATE usuario SET Nome_user = '$nomeN' WHERE Nome_user = '$nome'";
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
