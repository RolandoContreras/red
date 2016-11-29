function alter_data(){
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var customer_id = document.getElementById("customer_id").value;
    var pierna = $("input[type='radio'][name='pierna']:checked").val();
    
        $.ajax({
        type: "post",
        url: site +"b_data/update_data",
        dataType: "json",
        data: {phone: phone,
               address: address,
               customer_id: customer_id,
               pierna: pierna},
        success:function(data){            
              if(data.message == "true"){  
                 $("#messages").html();
                 var texto = "";
                 texto = texto+'<label style="color:green;">'+data.print+'</label>';
                 $("#messages").html(texto);
                $(location).attr('href',data.url);  
            }
        }            
    });
}

function alter_btc(){
        var customer_id = document.getElementById("customer_id").value;
        var btc = document.getElementById("btc").value;
        
        $.ajax({
        type: "post",
        url: site +"b_data/update_btc_address",
        dataType: "json",
        data: {btc: btc,
               customer_id:customer_id },
        success:function(data){            
              if(data.message == "true"){  
                 $("#messages").html();
                 var texto = "";
                 texto = texto+'<label style="color:green;">'+data.print+'</label>';
                 $("#messages").html(texto);
                $(location).attr('href',data.url);  
            }
        }            
    });
}