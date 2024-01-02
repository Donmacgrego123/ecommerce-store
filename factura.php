<?php
ob_start();
//header incluido 
include('header.php');
?>
<?php

//carrito incluido si no esta vacio 
count($product->getData('carrito')) ? include ('Template/_factura.php') :  include ('Template/notFound/_noencontrado.php');

//nuevas cartas incluido 
include('Template/_nuevas-cartas.php');

?>

<?php
//footer incluido 
include('footer.php');
?>