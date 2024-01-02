  <?php
  $item_id=$_GET['item_id']??0;
  // requerimiento 
  $encarrito1=$carrito->getcarritoid($product->getData('carrito'));
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['producto-sub'])){
    //METODO DE LLAMADA AL CARRITO
    $carrito->addcarrito($_POST['usuario_id'],$_POST['item_id']);
    }
}

  foreach($product->getdata() as $item):
  if($item['item_id']==$item_id):
    
  ?>
  <!-- Producto -->
  <section id="producto" class="py-3">
   
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src=" <?php echo $item['item_img'] ?? "./assets/products/1.jpg";?> " alt="product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-awesome">
                        <div class="col">
                            <button type="submit" class=" disabled btn btn-success form-control">Compra ya!!</button>
                        </div>
                        <br>
                        <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                            <input type="hidden" name="usuario_id" value="<?php echo '1';?>">
                              <?php
                                 if(in_array($item['item_id'], $encarrito1 ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control">Ya Añadido</button>';
                                }else{
                                echo '<button type="submit" name="producto-sub" class="btn btn-warning form-control">Añadir al Carrito</button>';
                                }
                              
                              ?>
                      
                    </form>
                        
                      
                          
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h4 class="font-awesome font-size-20"> <?php echo $item['item_nombre'] ?? "Unknown";?> </h4>
                    <small><?php echo $item['item_marca'] ?? "Marca";?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12 ">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        </div>
                        <p href="#" class="px-2 font-rale font-size-14 text-danger">Condition: Near Mint 1st Edition English <?php echo $item['item_marca'] ?? "Unknow";?> card</p>
                    </div>  
                    <hr class="m-0">
                    <!-- precio del producyto-->
                    <table class="my-3">
                      <tr class="font-rale font-size-16">
                        <td>Ahorra ahora</td>
                        <td><strike>%10</strike></td>
                      </tr>
                      <tr class="font-rale">
                        <td>Precio Sugerido:</td>
                        <td class="text-danger">$ <span><?php echo $item['item_precio'] ?? "0";?></span><small class="text-dark">&nbsp;&nbsp;Incluido Impuestos</small></td>
                      </tr>
                   
                    </table>
                    <!-- precio del producyto fin-->

                    <!-- Politicas de envio-->
                    <div id="policy">
                      <div class="d-flex">
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-3 color-primary">
                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-rale font-size-12">10 dias<br>Reembolso</a>
                        </div>
                        &nbsp;&nbsp;
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-3 color-primary">
                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-rale font-size-12">Envio<br>gratuito</a>
                        </div>
                        &nbsp;&nbsp;
                        <div class="return text-center mr-5">
                          <div class="font-size-20 my-3 color-primary">
                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                          </div>
                          <a href="#" class="font-rale font-size-12">Verificacion<br> de calidad</a>
                        </div>

                      </div>

                    </div>
                    <!-- Politicas de envio fin-->
                    <hr>
                    <!--Detalles y cantidad-->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark ">
                      <small>Detalles del vendedor</small>
                      <small><i class="fas fa-map-marker"></i>&nbsp;Vendido y enviado por <a href="#">Alomerusshop</a></small>
                      <small><i class="fas fa-award">&nbsp;</i>Near Mint 1st Edition</small>
                    </div>
                    <div class="row">
                      <div class="qty d-flex">
                        <h6 class="font-awesome">Cantidad</h6>
                        <div class=" px-4 d-flex font-rale">
                           <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                           <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1">
                           <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="col-12">
                      <h6 class="font-awesome">Producto Altamente Coleccionable</h6>
                    
                      <p class="font-awesome font-size-14">Política de reembolso y devolución</p>
                      <p class="font-rale font-size-14">Cada pedido que realice a través de TCGranshop Direct está completamente protegido por nuestra Garantía de seguridad. Eso significa cobertura del 100% en caso de que algo salga mal. Póngase en contacto con nuestro equipo de atención al cliente aquí si tiene alguna pregunta o problema con su pedido.</p>
                    </div>
                    <!--Detalles y cantidad fin-->
                    
                </div>
                
            </div>
        </div>
  </section>

  <?php
  endif;
  endforeach;
    
  ?>
    <!-- Producto fin-->