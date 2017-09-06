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
function active(customer_id,point,parents_id,franchise_id){
    bootbox.dialog("Confirma que desea activar la cuenta?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/activaciones/active",
               dataType: "json",
               data: {customer_id : customer_id,
                      parents_id : parents_id,
                      point:point,
                      franchise_id:franchise_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}