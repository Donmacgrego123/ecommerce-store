<!--lista de deseos-->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['detele-cart-submit1'])){
            $borrarregistro=$carrito->borrardeseo($_POST['item_id']);
        }
    }
    if(isset($_POST['cart-submit'])){
        $carrito->deseo($_POST['item_id'], 'carrito', 'lista_compra');
    }
?>
<section id="carrito" class="py-3 " >

<div class="container-fluid w-75">
    <h5 class="font-awesome font-size-20">Lista deseados / Guardados </h5>
    <!-- items del carro-->
    <div class="row">
        <div class="col-sm-9">

            <?php 
            
            foreach($product->getData('lista_compra') as $item):
                $carrito1=$product->getproduct($item['item_id']);
                $subtotal[]=array_map(function($item){
           
           
            
            ?>
        <!--carrito-->
         <div class="row border-top py-3 mt-3">
            <div class="col-sm-2">
                <img src=" <?php  echo $item['item_img'] ?? "./assets/products/1.jpg" ?> " style="height: 100px;" alt="cart1" class="img-fluid">
            </div>
            <div class="col-sm-8">
                <h5 class="font-awesome font-size-20"><?php  echo $item['item_nombre'] ?? "Unknown"; ?></h5>
                <small><?php  echo $item['item_marca'] ?? "Unknown";?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12 ">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    </div>
                    
                </div>
                <!--cantidad-->
                <div class="qty d-flex pt-2">
                        <form method="post">
                        <input type="hidden" value=" <?php echo $item['item_id'] ?? 0 ;  ?>" name="item_id">
                        <button type="submit" name="detele-cart-submit1" class="btn font-rale text-danger px-3 border-right">Borrar</button>
                        </form>
                        <form method="post">
                        <input type="hidden" value=" <?php echo $item['item_id'] ?? 0 ;  ?>" name="item_id">
                        <button type="submit" name="cart-submit" class="btn font-rale text-danger px-3 border-right">Añadir al Carrito</button>
                        </form>
                    
                </div>
            </div>
           
            <div class="col-sm-2">
                <div class="font-size-20 text-danger font-monserrat">
                    $<span class="product_price" data-id=" <?php echo $item['item_id'] ?? '0';?>" ><?php  echo $item['item_precio'] ?? 0; ?></span>
                </div>
            </div>
         </div>
        
            
        <!--carrito fin--> 
        <?php 
            return $item['item_precio'];
            },$carrito1);
        
            endforeach;
           //print_r($subtotal);
        ?>
        </div>
        
       
    </div>
    <!-- items del carro fin-->
</div>

</section>

<!--carrito de compra fin-->







