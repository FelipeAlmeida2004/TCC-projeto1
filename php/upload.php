<?php

include('conection.php');


if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo!");

    if($arquivo['size'] > 2097152)
        die("Arquivo muito grande!");

    $pasta = 'upload/';
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg")
        die("Tipo de arquivo inválido!");

    $path = $pasta . $novoNomeArquivo . "." . $extensao;
    
    $sucesso = move_uploaded_file($arquivo["tmp_name"], $path);
        if ($sucesso) {

            $sql = "INSERT INTO foodtruck (Img_food, nome_img) VALUES ('$path','$nomeArquivo')";
            $stm = $pdo->prepare($sql);
            $stm->execute();

            echo "<p>Arquivo enviado com sucesso!!</p>";
        }else{
            echo "<p>Falha ao enviar arquivo!</p>";
        }


}
$sql_consulta = "SELECT Img_food, nome_img FROM foodtruck";
$stmt = $pdo->prepare($sql_consulta);
$stmt->execute();

while($arquivo = $sql_consulta->fetch_assoc()){

}

?>