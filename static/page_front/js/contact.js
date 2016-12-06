function send_messages(){
    
    name = $("#name").val();    
    
    var red = document.getElementById("red").value;
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
               $(".alert-0").removeClass('text-danger').addClass('text-danger').html(data.print)
            }else{
               $(".alert-0").removeClass('text-success').addClass('text-success').html(data.print)
            }
        }            
        });
    }else{
        $(".alert-0").removeClass('text-danger').addClass('text-danger').html("Llene todos los campos")
    }
}
