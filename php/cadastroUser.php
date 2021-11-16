<?php


include('conection.php');

    $user = $_POST['name_user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $end = $_POST['end'];
    $tel = $_POST['tel'];
    $cpf = $_POST['cpf'];

  $sql = "INSERT INTO cadastro (Nome_cadastro, Email_cadastro, Senha_cadastro) VALUES('$user', '$email', '$pass'); INSERT 
  INTO usuario (Telefone_user, Cpf_user, Endereco_user) VALUES('$tel', '$cpf', '$end');";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  
  
  /*Segunda opção de inserção de dados no metodo "execute": 
  
  array(
    ':nome' => $user, ':email' => $email, ':senha' => $pass
  )array(':tel' => $tel, ':cpf' => $cpf, ':end' => $end);*/
  
    echo $stmt->rowCount();
?>