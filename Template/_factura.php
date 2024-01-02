<?php
// requerimiento 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['top-sale-submit'])){
    //METODO DE LLAMADA AL CARRITO
    $factura->addfactura($_POST['usuario_id'],$_POST['item_id']);
}
}
foreach($product->getData('carrito') as $item):
    $carrito1=$product->getproduct($item['item_id']);
    $subtotal[]=array_map(function($item){
        return $item['item_precio'];
        
    },$carrito1);
        
endforeach;
 //print_r($subtotal);
 //print_r($factura);
?>


<section class="seccion2">
<div class="container-fluid w-75">

    <div class="row">
        <div class="col-sm-9">
        
            <div class="arrastre row border-top py-3 mt-3">
                <div class="titulo">
                    <h4 class="font-monserrat">Procerder a la compra</h4>
                </div>
                <div class="form">
                    <div class="campo">
                        <label>Nombres</label>
                        <input type="text" class="input">
                    </div>
                    <div class="campo">
                        <label>Apellidos</label>
                        <input type="text" class="input">
                    </div>
                    <div class="campo">
                        <label>Direccion de Correo</label>
                        <input type="text" class="input">
                    </div>
                    <div class="campo">
                        <label>Dirección</label>
                        <textarea cols="30" rows="10" class="area"></textarea>
                    </div>
                    
                    
                    <div class="campo">
                    <input type="submit" value="Aceptar" class="boton">
                    </div>


                    </div>
                </div>
            </div>
            
        <div class="col-sm-3">
            <div class="subtotal border text-center mt-3 ">
                <h6 class="font-size-12 font-awesome text-success py-3"><i class="fas fa-check "></i> Compra ahora</h6>
                <div class="border-top py-3">
                    <h5 class="font-awesome font-size-20">Total <span class="text-danger">$ <span class="text-danger" id="deal-price"> <?php echo isset($subtotal) ? $carrito->getSum($subtotal) : 0; ?> </span></span></h5>
                    <i class="fab fa-cc-visa" style="font-size:30px;color:red"></i><i class="fab fa-cc-paypal" style="font-size:30px;colo:blue"></i><br>
                    <button type="submit" class="btn btn-success font-size-12">Comprar ahora</button>
                </div>
            </div>
        </div>
    
    </div>


</div>

        
</section>