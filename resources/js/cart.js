$(document).ready(function(){
   
    $(".form-add-to-cart").submit(function(e){
        e.preventDefault();
        // let url = "{{route('add_to_cart')}}";
        let id = $(this)[0][1].attributes['data-id'].value; //ID del libro
        let token = $("input[name='_token']").val();

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            async: true, //Indica si la comunicación será asincrónica (true)
            method: "POST", //Indica el método que se envían los datos (GET o POST)
            dataType: "html", //Indica el tipo de datos que se va a recuperar
            contentType: "application/x-www-form-urlencoded", //cómo se
            url: url, //el nombre de la página que procesará la petición
            data: {
                "token": token,
                "id": id
            },
            success: function(){
                $(".carrito__cantidad").load(urlCantidadCarrito); //Actualizamos solo el número del carrito
                // location.reload();
                $('#add-to-cart__message').css("display", "block");
                //Obtenemos de nuevo el contenido del carrito a través de AJAX para que se actualice el offcanvas sin recargar la página
                $.ajax({
                    type: "GET",
                    url: urlCartContent,
                    data:{
                        "token": token
                    },
                    success: function(data){
                        $(".offcanvas-content").html(data);
                    }
                })
                
                setTimeout(function(){ //Degradado al desaparecer la alerta
                     $("#add-to-cart__message").fadeOut(2000);
                }, 3000)

            }
            });
         return false;
    });
})