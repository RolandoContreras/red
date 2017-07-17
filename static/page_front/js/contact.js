function send_messages(){
    name = $("#name").val();    
    email = $("#email").val();     
    message = $("#message").val();
    if(name != "" && email != "" && message != ""){
        
        $.ajax({
        type: "post",
        url: "contact/send_messages",
        dataType: "json",
        data: {name : name, email:email, message:message,},
        success:function(data){            
            if (data.message == "false"){                         
               no_enviado();
            }else{
                enviado_correcto();
            }
        }            
        });
    }else{
        llene_campos();
    }
}
function send_login(){
    
    username = $("#username").val();    
    password = $("#password").val();     
    
    if(username != "" && password != ""){
        $.ajax({
        type: "Post",
        url: "Login/validate",
        dataType: "json",
        data: {username : username, password:password},
        success:function(data){            
            if (data.message == "false"){                         
                no_login();
            }else{
                $(location).attr('href',data.url);  
            }
        }            
    });
  }else{
   llene_campos();
  }   
}

function enviado_correcto() {
    w2popup.open({
        title: 'Felicidades',
        body: '<div class="w2ui-centered">Mensaje enviado correctamente</div>'
    });
}function no_enviado() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">El Mensaje no pudo enviarse.</div>'
    });
}function no_login() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Usuario y/o contraseña incorrecta.</div>'
    });
}
function llene_campos() {
    w2popup.open({
        title: 'Mensaje',
        body: '<div class="w2ui-centered">Debe llenar todos los campos.</div>'
    });
}