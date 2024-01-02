$(document).ready(function(){

    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1

    });

    //mas vendidos
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:  {
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotopo buscador 
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'                
    });

    //click para buscar
    $(".button-group").on("click","button",function(){
        var filterValue=$(this).attr('data-filter');
        $grid.isotope({filter: filterValue});

    })
    //nav de abajo
    $("#nuevas-cartas .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots: true,
        responsive:{
            0:  {
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    //incremento de prodcuto
    let $qty_up=$(".qty .qty-up");
    let $qty_down=$(".qty .qty-down");
    let $deal_price=$("#deal-price");
    //let $input=$(".qty .qty_input");


    //botones para subir y bajar cauadro de texto 
    //aumento de precio segun el cuadro de texto
    $qty_up.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    let $price=$(`.product_price[data-id='${$(this).data("id")}']`);


    $.ajax({url:"Template/ajax.php",type:'post',data:{itemid:$(this).data("id")} , success: function(result) {

        
        let obj = JSON.parse(result);
        let item_precio=obj[0]['item_precio'];
        
        
        if($input.val()>=1 && $input.val() <=9){
            $input.val(function(i,oldval){
            return ++oldval;
        });
        }

        //incrementar el valor y el subtotal 
        $price.text(parseInt(item_precio * $input.val()).toFixed(2));

        //colocar el subtotal en el cuadro de texto 
        let subtotal=parseInt($deal_price.text())+parseInt(item_precio);
        $deal_price.text(subtotal.toFixed(2));
        
    }});//cierre del ajax

   
    });//ciere del boton

    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price=$(`.product_price[data-id='${$(this).data("id")}']`);


        $.ajax({url:"Template/ajax.php",type:'post',data:{itemid:$(this).data("id")} , success: function(result) {

        
            let obj = JSON.parse(result);
            let item_precio=obj[0]['item_precio'];
            
            
            if($input.val()>1 && $input.val() <=10){
                $input.val(function(i,oldval){
                    return --oldval;
                });
                //incrementar el valor y el subtotal 
                 $price.text(parseInt(item_precio * $input.val()).toFixed(2));
    
                //colocar el subtotal en el cuadro de texto 
                let subtotal=parseInt($deal_price.text())-parseInt(item_precio);
                $deal_price.text(subtotal.toFixed(2));
            }
    
            
            
        }});//cierre del ajax
        
    });
});
