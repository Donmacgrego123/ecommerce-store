<?php

  require('../database/DBController.php');

  require('../database/Product.php');

  $db=new DBcontroller();

  $product=new Product($db);






if(isset($_POST['itemid'])){
    $result=$product->getproduct($_POST['itemid']);
    echo json_encode($result);
}

?>