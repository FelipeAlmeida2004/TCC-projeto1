<?php

session_start();


include('conection.php');

$info = array();
$info[0] = $_POST['desc'];
$info[1] = $_POST['nameEst'];

$_SESSION['info'] = $info;


$arquivo = $_FILES['arquivo'];
$destino = 'upload/';
$nomeArquivo = $arquivo['tmp_name'];
$nome = $arquivo['name'];
$pasta =$destino.$arquivo['name'];



    $sucesso = move_uploaded_file($arquivo["tmp_name"], $pasta);
        if ($sucesso) {

            $sql = "INSERT INTO foodtruck (Img_food, nome_img) VALUES ('$pasta','$nome')";
            $stm = $pdo->prepare($sql);
            $stm->execute();
            if(isset($_FILES['cardapio'])){
                $cardapio = $_FILES['cardapio'];
                $cardNome = $cardapio['tmp_name'];
                $card = $cardapio['name'];
                $dir = $destino.$cardapio['name'];

                $_SESSION['cardapio'] = $dir;

                $res = move_uploaded_file($cardapio["tmp_name"], $dir);
                    if($res){
                        $sql2 = "INSERT INTO cardapio (Img_card, Desc_card) VALUES ('$dir','$card')";
                        $stm2 = $pdo->prepare($sql2);
                        $stm2->execute();

                       
                        header("Location: ../InfoFood.php");
                    }else{
                        echo "ERROR";
                    }
            }else{
                echo "ERROR";
            }
        }else{
        }





?>