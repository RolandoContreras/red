function active_financiada(customer_id){
    bootbox.dialog("Confirma que desea activar como financiada?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/activaciones/active_customer",
               dataType: "json",
               data: {customer_id : customer_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}

function cancelar_customer(){
	var url= 'dashboard/clientes';
	location.href = site+url;
}
