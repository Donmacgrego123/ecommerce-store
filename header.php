<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCGrandshop</title>

    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- carusel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- custom css-->
   <link rel="stylesheet" href="style.css">

  <?php 
  //requerimientos de conexion
    require('functions.php');
  ?>

</head>
<body> 
    <header id="header">
        <div class="strip d-flex justify-content-between px4 py-1 bg-light">
            <p class="font-monserrat font-size-12 text-black-50 m-0">Quito, Ecuador - Caderon  - zabala</p>
            <div class="font-monserrat font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Ingresar</a>
           <!--  <a href="#" class="px-3 border-right text-dark">Carrito (0)</a>-->
            </div>
        </div>

        <!-- barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c44800;">
         <div class="container-fluid">
          <a class="navbar-brand" href="index.php">TCGrandshop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik" >
              <li class="nav-item">
              
              <a class="nav-link active" aria-current="page" href="#">Nuevos sets de tus juegos favoritos</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Proximamente</a>
              </li>-->
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="carrito.php" class="py-2 rounded-pill " style="background-color: #003859;">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"> <?php echo count($product->getdata('carrito')); ?></span>
                </a>
            </form>
          </div>
        </div>
      </nav>
      <!-- barra de navegacion-->
    </header>
     <main id="main-site">