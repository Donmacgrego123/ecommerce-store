<?php
  // requerimiento de conexion mysql 
  require('database/DBController.php');
  // requerimiento de la clase producto
  require('database/Product.php');
  // requerimiento de la clase carrito
  require('database/carrito.php');
// requerimiento de la factura
require('database/factura.php');
  //objeto
  $db=new DBcontroller();
  //opbjeto de productos
  $product=new Product($db);
  $product_shuffle=$product->getData();
  //objeto del carrito
  $carrito=new carrito($db);
  $factura=new factura($db);

?>