<?php
$marca=array_map(function($pro){return $pro['item_marca'];},$product_shuffle);
$unique=array_unique($marca);
sort($unique);
shuffle($product_shuffle);
$encarrito=$carrito->getcarritoid($product->getData('carrito'));
// requerimiento 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['special-price-submit'])){
      //METODO DE LLAMADA AL CARRITO
      $carrito->addcarrito($_POST['usuario_id'],$_POST['item_id']);
  }

}
?>
<!-- buscador-->
<section id="special-price">
    <div class="container">
            <h4 class="font-monserrat">Precios Especiales</h4>
            <div id="filters" class="button-group text-right">
              <button class="btn is-checked" data-filter="*">Todos los productos</button>
              <?php
              array_map(function($marca){
                printf('<button class="btn" data-filter=".%s">%s</button>',$marca, $marca);
              }, $unique);
              ?> 
             
            </div>
              
            <!--productos-->
          <div class="grid">
              <?php array_map(function($item) use($encarrito){ ?>
    
            <div class="grid-item border <?php echo $item['item_marca'] ??"Marca";?> ">
                  <div class="item py-2" style="width: 200px;">
                      <div class="item py-2">
                          <div class="product font-monserrat">
                            <a href="<?php printf('%s?item_id=%s','producto1.php',$item['item_id']);?>"><img src=" <?php echo $item['item_img'] ?? "./assets/products/1.jpg"; ?>" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                  <h6><br><?php echo $item['item_nombre'] ?? "Unknown";?></h6>
                                      <div class="rating text-warning font-size-12 ">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>  
                                      </div>
                                      <div class="price py-2">
                                      <span>$ <?php echo $item['item_precio'] ?? "0";?></span>
                                      </div>
                                      <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                        <input type="hidden" name="usuario_id" value="<?php echo '1';?>">
                                        <?php
                                            if(in_array($item['item_id'], $encarrito ?? [])){
                                            echo '<button type="submit" disabled class="btn btn-success font-size-12">Ya Añadido</button>';
                                            }else{
                                            echo '<button type="submit" name="top-sale-submit" class="btn btn-warning font-size-12">Añadir al Carrito</button>';
                                            }
                                        ?>
                                      </form>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              <?php },$product_shuffle)?>
            </div>
                  
          </div>  
    </div>      
</section>
          <!--buscador fin-->
      