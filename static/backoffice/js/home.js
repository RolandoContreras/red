// $(document).ready(function(){
//$("#basic_button").on( "click", function() {
//        $('#default').hide(); //muestro mediante id
//        $('#basic').show(); //muestro mediante clase
//                                
//});
//});
 
 
//
//
////function make_pedido(franchise_id){
//    var kit = $("input[type='radio'][name='kit']:checked").val();
//    
//        $.ajax({
//        type: "post",
//        url: site +"b_home/make_pedido",
//        dataType: "json",
//        data: {kit: kit},
//        success:function(data){            
//              if(data.message == "true"){  
//                 location.reload();
//            }
//        }            
//    });
//}
//document.getElementById("default").style.visibility = "hidden";
//document.getElementById("basic").style.visibility = "hidden";
//document.getElementById("platinium").style.visibility = "hidden";
//document.getElementById("gold").style.visibility = "hidden";
//document.getElementById("vip").style.visibility = "hidden";
//document.getElementById("elite").style.visibility = "hidden";
//document.getElementById("super_vip").style.visibility = "hidden";



//function make_pedido(franchise_id){
//        $.ajax({
//        type: "post",
//        url: site +"b_home/make_pedido",
//        dataType: "json",
//        data: {franchise_id: franchise_id},
//        success:function(data){            
//              if(data.message == "true"){  
//            }
//        }            
//    });
//}

function make_pedido(franchise_id){
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
    
    
        $.ajax({
        type: "post",
        url: site +"b_home/make_pedido",
        dataType: "json",
        data: {franchise_id: franchise_id},
        success:function(data){            
                if(data.message == "true"){
                    location.reload();
                }
        }            
    });
}