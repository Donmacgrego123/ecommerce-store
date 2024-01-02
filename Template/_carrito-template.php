<!--carrito de compra-->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['detele-cart-submit'])){
            $borrarregistro=$carrito->borrarcarrito($_POST['item_id']);
        }

        //guardar para luego
        if(isset($_POST['deseos-lista'])){
            $carrito->deseo($_POST['item_id']);
        }


    }
?>
<section id="carrito" class="py-3 " >

<div class="container-fluid w-75">
    <h5 class="font-awesome font-size-20">Lista de compras</h5>
    <!-- items del carro-->
    <div class="row">
        <div class="col-sm-9">

            <?php 
            
            foreach($product->getData('carrito') as $item):
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
                    <div class="d-flex font-rale w-25">
                        <button data-id=" <?php echo $item['item_id'] ?? '0';?>" class="qty-up border bg-light" ><i class="fas fa-angle-up"></i></button>
                        <input data-id=" <?php echo $item['item_id'] ?? '0';?>" type="text" class="qty_input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1">
                        <button data-id=" <?php echo $item['item_id'] ?? '0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                    </div>
                    <form method="post">
                        <input type="hidden" value=" <?php echo $item['item_id'] ?? 0 ;  ?>" name="item_id">
                        <button type="submit" name="detele-cart-submit" class="btn font-rale text-danger px-3 border-right">Borrar</button>
                    </form>
                    <form method="post">
                        <input type="hidden" value=" <?php echo $item['item_id'] ?? 0 ;  ?>" name="item_id">
                        <button type="submit" name="deseos-lista" class="btn font-rale text-danger px-3 border-right">Guardar</button>
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
        
        
        <!-- subproducto-->
        <div class="col-sm-3">
            <div class="subtotal border text-center mt-3 ">
                <h6 class="font-size-12 font-awesome text-success py-3"><i class="fas fa-check "></i> Compra ahora</h6>
                <div class="border-top py-3">
                    <h5 class="font-awesome font-size-20">Subtotal <span class="text-danger">$ <span class="text-danger" id="deal-price"> <?php echo isset($subtotal) ? $carrito->getSum($subtotal) : 0;?> </span></span></h5>
                    <a href="factura.php">Proceder a Comprar</button></a>

                </div>
            </div>
        </div>
        
        <!-- subproducto fin-->
    </div>
    <!-- items del carro fin-->
</div>



</section>

<!--carrito de compra fin-->