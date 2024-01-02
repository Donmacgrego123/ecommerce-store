
<section id="carrito" class="py-3 " >

<div class="container-fluid w-75">
    <h5 class="font-awesome font-size-20">Lista de compras</h5>
    <!-- items del carro-->
    <div class="row">
        <div class="col-sm-9">

            <!-- carro vacio -->
            <div class="row border-top py-3 mt-3">
            <div class="col-sm-12 text-center py-2">
                <img src="./assets/blog/empty_cart.png" alt="Empty cart" class="img-fluid" style="height:200px;">
                <p class="font-awesome font-size-20 text-black-50">Carrito Vacio</p>
            </div>
            </div>
          
        </div>
            <!-- subproducto-->
            <div class="col-sm-3">
            <div class="subtotal border text-center mt-3 ">
                <h6 class="font-size-12 font-awesome text-success py-3"><i class="fas fa-check "></i> Compra ahora</h6>
                <div class="border-top py-3">
                    <h5 class="font-awesome font-size-20">Subtotal <span class="text-danger">$ <span class="text-danger" id="deal-price"> <?php echo isset($subtotal) ? $carrito->getSum($subtotal) : 0; ?> </span></span></h5>
                    <button type="submit" class="btn btn-warning mt-3">Proceder a Comprar</button>

                </div>
            </div>
            </div>
        
        <!-- subproducto fin-->
    </div>
    <!-- items del carro fin-->
</div>

</section>

<!--carrito de compra fin-->