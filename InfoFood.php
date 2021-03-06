<?php

session_start();

$info = $_SESSION['info'];
$pasta = $_SESSION['img'];
$dir = $_SESSION['cardapio'];



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoinTruck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="img/logo.ico">
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

<!--Rodap??-->
<div class="container-fluid texto1 estiloR">
  <div class="row justify-content-sm-center text-center">
    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4 rodap">
      <ul class="list-group">
        <h4>PoinTruck</h4>
        <li class="list-group"><a class="espa??o" href="FaleC.html">Fale conosco</a></li>
        <li class="list-group"><a class="espa??o" href="Qsomos.html">Empresa</a></li>
      </ul>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-4 rodap">
      <ul class="list-group">
        <h4>Descubra</h4>
        <li class="list-group"> <a class="espa??o" href="#">Cadastre seu Food Truck</a></li>
        <li class="list-group"> <a class="espa??o" href="Categ.html">Categorias</a></li>
        <li class="list-group"> <a class="espa??o" href="#">Mais acessados</a></li>
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



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

