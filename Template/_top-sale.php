<?php

shuffle($product_shuffle);


// requerimiento 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['top-sale-submit'])){
    //METODO DE LLAMADA AL CARRITO
    $carrito->addcarrito($_POST['usuario_id'],$_POST['item_id']);
}
}
?>

<!-- mejores vendidas-->
<section id="top-sale">
            <div class="container py-5">
              <h4 class="font-rubik ">Más vendidas</h4>
              <hr>
               <!-- carrusel-->
               <div class="owl-carousel owl-theme">
                <!--item 1-->
          <?php foreach($product_shuffle as $item){?>
                <div class="item py-2">
                  <div class="product font-monserrat">
                    <a href=" <?php printf('%s?item_id=%s','producto1.php',$item['item_id']);?>"><img src="<?php echo $item['item_img'] ?? "./assets/products/1.jpg"?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><br><?php echo $item['item_nombre'] ?? "Unknown"?></h6>
                      <div class="rating text-warning font-size-12 ">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$ <?php echo $item['item_precio'] ?? "0"?></span>
                    </div>
                    <form method="post">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                      <input type="hidden" name="usuario_id" value="<?php echo '1';?>">
                      <?php
                        if(in_array($item['item_id'], $carrito->getcarritoid($product->getData('carrito')) ?? [])){
                          echo '<button type="submit" disabled class="btn btn-success font-size-12">Ya Añadido</button>';
                        }else{
                          echo '<button type="submit" name="top-sale-submit" class="btn btn-warning font-size-12">Añadir al Carrito</button>';
                        }
                      ?>
                      
                    </form>
                    
                    </div>
                  </div>
           
                </div>
                <?php }?>
               
               </div>
                <!-- carrusel-->
            </div>
        </section>
        <!-- mejores vendidas fin -->