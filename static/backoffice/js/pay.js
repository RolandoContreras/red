function enviar_pago(){
    
    monto =  $('select[name=monto]').val();
    
    if(monto != ""){
       $.ajax({
       type: "post",
       url: site+"backoffice/pagos/validar",
       dataType: "json",
       data: {monto : monto},
       success:function(data){
                   location.reload();
       }         
   });
    }
    
    
    
          
}
function edit_customer(product_id){    
     var url = 'dashboard/clientes/load/'+product_id;
     location.href = site+url;   
}
function cancelar_customer(){
	var url= 'dashboard/clientes';
	location.href = site+url;
}
