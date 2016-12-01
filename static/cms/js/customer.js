function active(customer_id){
           $.ajax({
               type: "post",
               url: site+"dashboard/clientes/active_customer",
               dataType: "json",
               data: {customer_id : customer_id},
               success:function(data){                             
               location.reload();
               }         
           });
}

function no_active(customer_id){
           $.ajax({
               type: "post",
               url: site+"dashboard/clientes/no_active_customer",
               dataType: "json",
               data: {customer_id : customer_id},
               success:function(data){                             
               location.reload();
               }         
           });
}
function edit_customer(product_id){    
     var url = 'dashboard/clientes/load/'+product_id;
     location.href = site+url;   
}
function cancelar_customer(){
	var url= 'dashboard/clientes';
	location.href = site+url;
}
