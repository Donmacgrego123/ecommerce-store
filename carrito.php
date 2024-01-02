<?php
ob_start();
//header incluido 
include('header.php');
?>

<?php

//carrito incluido si no esta vacio 
count($product->getData('carrito')) ? include ('Template/_carrito-template.php') :  include ('Template/notFound/_noencontrado.php');



//deseados incluido 
count($product->getData('lista_compra')) ? include ('Template/_deseados.php') :  include ('Template/notFound/_nolista.php');

//nuevas cartas incluido 
include('Template/_nuevas-cartas.php');



?>

<?php
//footer incluido 
include('footer.php');
?>
     