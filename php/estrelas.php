<?php

session_start();

$info = $_SESSION['info'];
$pasta = $_SESSION['img'];
$dir = $_SESSION['cardapio'];



?>


<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: #f7f7f7;">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-xl fixed-top estilo1">
          <div class="container-fluid mt-2">
            <a class="navbar-brand col-xl-4 ps-5" href="index.html">Pointruck</a>
            <button class="navbar-toggler" style="outline: none; box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="bi bi-card-list"></span>
            </button>
            <div class="collapse navbar-collapse ps-5" id="navbarSupportedContent">
              <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item col-xl-4">
                  <a class="nav-link active menu" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item col-xl-6">
                  <a class="nav-link menu" href="Qsomos.html">Quem somos</a>
                </li>
                <li class="nav-item col-xl-6">
                  <a class="nav-link menu" href="Categ.html">Categoria</a>
                </li>
              </ul>
              <button class="btn1 ms-auto" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-user"></i></button>
            </div>
          </div>
        </nav>
      </div>
      
            <div class="modal fade" style="width: 300px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="width: 300px;">
                  <div class="modal-header gradt">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-circle icon"></i></h5>
                    <button style="outline: none; box-shadow: none;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li><br>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-black text-center" style="margin-top: 150px;">
        <img src="php/<?= $pasta ?>" style="width:1210px; height:250px;" alt="">
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-3">
            <p class="display-6 titulo-food" style="font-size: 30px; margin-left: 11%;"><?= $info[1] ?></p>
            </div>
        </div>

        <div class="row justify-content-around mt-5">
            <div class="col-xl-5 desc">
               <p class="mt-3"><?= $info[0] ?></p>
            </div>
            <div class="col-xl-5 foto">
                <img class="cardapio" src="php/<?= $dir ?>" alt="">
            </div>
        </div>
    </div>

    <br><br><br>







<div class="container">
    <div class="row">
 
<form action="estrelas.php" method="post">
 
    <div>
        <h3>Student Rating System</h3>
    </div>
 
    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>

    <div>
         <label>Comentário</label>
        <input type="text" name="coment">
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="0"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
 
    <div><input type="submit" name="add"> </div>
 
</form>
</div>
</div>


<div class="container-fluid texto1 estiloR">
  <div class="row justify-content-sm-center text-center">
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 rodap">
      <ul class="list-group">
        <h4>PoinTruck</h4>
        <li class="list-group"><a class="espaço" href="FaleC.html">Fale conosco</a></li>
        <li class="list-group"><a class="espaço" href="Qsomos.html">Empresa</a></li>
      </ul>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-4 rodap">
      <ul class="list-group">
        <h4>Descubra</h4>
        <li class="list-group"> <a class="espaço" href="#">Cadastre seu Food Truck</a></li>
        <li class="list-group"> <a class="espaço" href="Categ.html">Categorias</a></li>
        <li class="list-group"> <a class="espaço" href="#">Mais acessados</a></li>
      </ul>
    </div>
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 rodap">
        <ul class="list-group"></ul>
          <h4>Social</h4>
          <div class="row justify-content-sm-center">
            <div class="col-2">
              <a class="cor" href=""><i class="fab fa-facebook"></i></a>
            </div>
            <div class="col-2">
              <a class="cor" href=""><i class="fab fa-twitter"></i></a>
            </div>
            <div class="col-2">
              <a class="cor" href=""><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-2">
              <a class="cor" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
</body>
 
</html>
<?php
require 'conection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $coment = $_POST["coment"];
    $rating = $_POST["rating"];
 
    $sql = "INSERT INTO avaliacao (Comentario_aval, Nome_aval, QntEstr_aval, DataReg_aval) VALUES ('$coment','$name','$rating', NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0)
    {
        echo "<script>alert('Sucesso!')</script>";
    }
    else
    {
        echo "Error!";
    }
}
?>