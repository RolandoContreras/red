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
    
    var opts = {
    lines: 13 // The number of lines to draw
    , length: 28 // The length of each line
    , width: 14 // The line thickness
    , radius: 42 // The radius of the inner circle
    , scale: 1 // Scales overall size of the spinner
    , corners: 1 // Corner roundness (0..1)
    , color: '#000' // #rgb or #rrggbb or array of colors
    , opacity: 0.25 // Opacity of the lines
    , rotate: 0 // The rotation offset
    , direction: 1 // 1: clockwise, -1: counterclockwise
    , speed: 1 // Rounds per second
    , trail: 60 // Afterglow percentage
    , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
    , zIndex: 2e9 // The z-index (defaults to 2000000000)
    , className: 'spinner' // The CSS class to assign to the spinner
    , top: '50%' // Top position relative to parent
    , left: '50%' // Left position relative to parent
    , shadow: false // Whether to render a shadow
    , hwaccel: false // Whether to use hardware acceleration
    , position: 'absolute' // Element positioning
    }
    var target = document.getElementById('spinner')
    var spinner = new Spinner(opts).spin(target);
    
    
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
                spinner.stop(); 
            }else{
                $(location).attr('href',data.url);  
            }
        }            
    });
  }else{
   llene_campos();
   spinner.stop(); 
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