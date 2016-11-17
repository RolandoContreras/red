function validate_username(username) {
        $.ajax({
        type: "post",
        url: "registro/validate_username",
        dataType: "json",
        data: {username: username},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
                
            }else{
                $(".alert-0").removeClass('text-danger').addClass('text-success').html(data.print);
            }
        }            
    });
}

function validate_2passwordr(password2) {
        var password1 = document.getElementById("clave").value;
        if(password1 == password2){
            $(".alert-1").removeClass('text-danger').addClass('text-success').html("las contraseña coinciden");
        }else{
            $(".alert-1").removeClass('text-danger').addClass('text-danger').html("las contraseña no coinciden");
        }
}

function validate_dni(dni) {
        $.ajax({
        type: "post",
        url: "registro/validate_dni",
        dataType: "json",
        data: {dni: dni},
        success:function(data){            
                if(data.message == "true"){         
                $(".alert-3").removeClass('text-danger').addClass('text-danger').html(data.print)
                
            }else{
                $(".alert-3").removeClass('text-danger').addClass('text-success').html(data.print);
            }
        }            
    });
}


//   $(document).ready(function(){ 


//
//         //Validar Identidad
//         $("input[name=identidad]").blur(function(){
//            var identidad = $(this).val().trim();
//            identidad = identidad.replace(/\s/g, '');
//
//            $.ajax({
//               type: "POST",
//               dataType: "json",
//               url: "includes/ajax_registro.php", 
//               data: {"ValidarIdentidadRegistro":identidad},
//               success: function(result){
//                  if(result.rps){
//                     $(".alert-3").removeClass('text-danger').addClass('text-success').html(result.mensaje);
//                  }else{
//                     $(".alert-3").removeClass('text-success').addClass('text-danger').html(result.mensaje);
//                  } 
//
//                  $("#identidad").val(identidad);
//
//               },error: function(XMLHttpRequest, textStatus, errorThrown){ 
//                                 }
//            });
//         }); 
//
//         //Registro
//         $("form[name=FormRegistrarUsuario]").submit(function(){
//            var captcha_resp =  $("#g-recaptcha-response").val();
//            $("input[name=ValCaptcha]").val(captcha_resp);
//
//            //Desactivamos el boton
//            $("button[type=submit]").attr('disabled', 'disabled').html('<em class="fa fa-spin fa-spinner"></em> Por favor espere...');
//
//            $.ajax({
//               type: "POST",
//               dataType: "json",
//               url: "includes/ajax_registro.php", 
//               data: $("form[name=FormRegistrarUsuario]").serialize(),
//               success: function(result){
//                  if(result.rps){
//                     if(result.tipo_registro){
//                        window.location='registro-pago-'+result.usuario;
//                     }else{
//                        swal({
//                           title: "Registro Exitoso!", 
//                           text: result.mensaje, 
//                           type: "success",  
//                           confirmButtonText: "Ok!",   
//                           closeOnConfirm: false,   
//                           }, 
//                           function(isConfirm){ 
//                              if(isConfirm){     
//                                 window.location='registro-bienvenida-'+result.usuario;
//                              } 
//                        });
//                     }
//
//                     /*swal("Registro Exitoso!", result.mensaje, "success");*/
//                  }else{
//                     (result.error==1)? $("#usuario").focus():'';
//                     (result.error==2)? $("#clave").focus():'';
//                     (result.error==3)? $("#identidad").focus():'';
//                     (result.error==6)? $("#politica").focus():'';
//                     (result.error==7)? $("#email").focus():'';
//                     (result.error==8)? $("#campo_adicional1").focus():'';
//                     (result.error==9)? $("#campo_adicional1").focus():'';
//                     (result.error==10)? $("#campo_adicional1").focus():'';
//                     (result.error==11)? $("#campo_adicional1").focus():'';
//                     (result.error==12)? $("#campo_adicional1").focus():'';
//                     (result.error==13)? $("#afiliacion").focus():'';
//                     swal("Disculpe!", result.mensaje, "warning");
//                     $("button[type=submit]").removeAttr('disabled').html('Crear cuenta');
//                  }
//                  
//               },error: function(XMLHttpRequest, textStatus, errorThrown){ 
//                                 }
//            });
//
//            return false;  
//         });
//
//         //Paises a estados
//         if($("#pais").length>0){
//         
//            $("#pais").change(function(){
//               var pais = $(this).val();
//               
//               $.ajax({
//                  type: "POST",
//                  dataType: "json",
//                  url: "includes/ajax_registro.php", 
//                  data: {"RecargaDePaises":pais},
//                  success: function(result){
//                     if(result.rps){
//                        $(".ajax_estado_pais").html('').html(result.result);
//                     }
//                  },error: function(XMLHttpRequest, textStatus, errorThrown){ 
//                                       }
//               });
//            });
//         }
//
//      });
//      
//      
//      
      


function delete_car(e) {
    var t = null;
    var n = 0;
    n = $("#spinner").get(0);
    bootbox.dialog("¿Confirma que desea Eliminar el Producto?", [{
        label: "Cancelar"
    }, {
        label: "Eliminar",
        "class": "btn-danger",
        callback: function() {
            t = (new Spinner(opts)).spin(n);
            $.ajax({
                type: "post",
                url: site + "home/delete_car",
                dataType: "json",
                data: {
                    row_id: e
                },
                success: function(e) {
                    location.reload()
                }
            })
        }
    }])
}

function empty_car() {
    var e = null;
    var t = 0;
    t = $("#spinner").get(0);
    bootbox.dialog("¿Desea limpiar el carrito?", [{
        label: "Cancelar"
    }, {
        label: "Limpiar",
        "class": "btn-danger",
        callback: function() {
            e = (new Spinner(opts)).spin(t);
            $.ajax({
                type: "post",
                url: site + "home/empty_car",
                dataType: "json",
                success: function() {
                    bootbox.dialog("Carrito Vacio", []);
                    location.reload()
                }
            })
        }
    }])
}

