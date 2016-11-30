<section>
      <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/arbol.css';?>" id="maincss">
     <!-- Page content-->
     <div class="content-wrapper">
        <div class="content-heading">
              <div class="pull-right text-danger">
                Bitcoin: $737.00000000              
              </div>
                              <div class="col-lg-3">
                <img src="<?php echo site_url().'static/backoffice/images/logo-btc2.png';?>" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>           
            </div>
        <h3>Árbol Genealógico Unilevel</h3>

        <div class="container-fluid">
           <!-- START DATATABLE 1 -->
           <div class="row">
              <div class="col-lg-12">
                <div class="col-lg-12">
                    <span class="circle circle-success circle-lg"></span> 
                    Afiliado Activo<span class="circle circle-danger circle-lg"></span> 
                    Afiliado Inactivo
                    <a href="javascript: history.back(-1)" class="btn btn-primary btn-xs"><em class="icon-action-redo"></em>&nbsp;&nbsp;Atras</a>
                </div>
                 <!--ARBOL GENEALOGICO-->

                    <div class="row">
                      <div class="col-sm-12 col-lg-12" style="padding: 0;">
                        <div class="cont-arbol">
                            <div class="tree" style="width: 1000%;">                      
                            <ul id="raiz-arbol">
                                <li id="primario">
                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                          Nombre:<?php echo $obj_customer->first_name." ".$obj_customer->last_name;?>
                                          Fecha Registro:<?php echo $obj_customer->created_at;?>
                                          Estatus:
                                          <?php if($obj_customer->active == 1){ ?>
                                                    Activo
                                                <?php }else{ ?>
                                                    Inactivo
                                                <?php } ?>
                                          
                                                    Calificación:<?php echo $obj_customer->franchise; echo nl2br("");?>
                                          Pais: <?php echo $obj_customer->pais;?>
                                          <?php 
                                          if(isset($obj_customer_parent->username)){
                                          echo "Padre:"." ".$obj_customer_parent->username;}    
                                          ?>" class="some-popover-link">
                                        
                                    <div class="row imagen-profile">
                                      <div class="col-sm-2" style="padding: 0;"></div>
                                      <div class="col-sm-8" style="padding: 0;">
                                        <div class="div-img">
                                            <img src="<?php echo site_url().'static/backoffice/images/default.jpg';?>" alt="" class="img-responsive img-circle thumb48">
                                        </div>
                                      </div>
                                      <div class="col-sm-2" style="padding: 0;">
                                        <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                          <span class="circle circle-success circle-lg"></span>
                                        </span>
                                      </div>
                                    </div>
                                        <a><?php echo $obj_customer->username;?></a>
                                    </nodo>
                            <!--BEGIN SECOND LEVEL-->
                            <?php 
                            if(count($obj_customer_n2) > 0){ ?>
                                <ul>
                                    <?php 
                                     foreach ($obj_customer_n2 as $value) { ?>
                                        <li>
                                            <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                Nombre:<?php echo $value->first_name." ".$value->last_name;?>
                                                Fecha Registro:<?php echo $value->created_at;?>
                                                Estatus:
                                                <?php if($value->active == 1){ ?>
                                                          Activo
                                                      <?php }else{ ?>
                                                          Inactivo
                                                      <?php } ?>

                                                          Calificación:<?php echo $value->franchise;?>
                                                Pais: <?php echo $value->pais;?>
                                                Padre:<?php echo $obj_customer->username;?>" class="some-popover-link">

                                          <div class="row imagen-profile">
                                            <div class="col-sm-2" style="padding: 0;"></div>
                                            <div class="col-sm-8" style="padding: 0;">
                                              <div class="div-img">
                                                  <img src="<?php echo site_url().'static/backoffice/images/default.jpg';?>" alt="" class="img-responsive img-circle thumb48">
                                              </div>
                                            </div>
                                            <div class="col-sm-2" style="padding: 0;">
                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                <span class="circle circle-success circle-lg"></span>
                                              </span>
                                            </div>
                                          </div>
                                                <a href="<?php echo site_url().'backoffice/unilevel/'.$value->customer_id;?>"><?php echo $value->username;?></a>
                                          </nodo>
                                        </li>
                                     <?php }?>
                            </ul>
                           <?php } ?>
                                
                            <!--END PRIMARIO-->
                           </li>
                           <!--END ID ARBOL-->
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
        </div>                     <!--ARBOL GENEALOGICO END-->   
              </div>
           </div>
           <!-- END DATATABLE 1 -->
        </div>
     </div>
  </section>
<script>
$( window ).resize(function() {
//$(".wrapper").addClass('scroll');

var width = $(window).width()-240;
var height = $(window).height()-220;

$(".cont-arbol").css('height',height+"px");

if (width < 640) {
  $(".tree").animate({ 'zoom': 0.4 }, 400);
}
});
$(document).ready(function(){
$("button[name=resumen_red]").click(function(){
  var id = '7r1pLS-3pGMJKKk7UDSJpd9TzlZuhKvMA7N-VSjaS8c';
  $.ajax({
        type: "POST",
        dataType: "json",
        url: "../includes/ajax.php", 
        data: {"ResumenRed":1, "afiliado":id},
        success: function(result){

           $(".modal-body").html(result.result);
        },error: function(){ 

        }
     });
});


$(window).trigger("resize");
var niveles = $("#raiz-arbol li").last();
niveles.attr("id","hola");
/*$('[data-toggle="popover"]').popover({
    container: 'body',
    html: true,
    content: function () {
        var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
        return clone;
    }
}).click(function(e) {
    e.preventDefault();
});*/

});
$('.some-popover-link').popover({
  container: 'body',
  html: true,
  placement: 'top'
});
$(document).click(function (e) {

  $('.some-popover-link').each(function () {
    //alert();
      if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
          //$(this).popover('hide');

          if ($(this).data('bs.popover').tip().hasClass('in')) {
              //alert();
              $(this).popover('hide');
          }

          return;
      }
  });
});
$(window).load(function() {
setTimeout(ancho(), 10);
});
</script>

<script type="text/javascript">

function ancho(){
//var width = $(window).width()-240;
var width = $(".content-wrapper").width();
if(width < $("#primario").width()){
  $('.tree').css('width',($("#primario").width() + 50)+"px");
}else{
  $('.tree').css('width',"auto");
}
$('.cont-arbol').scrollLeft(($('.tree').width()-width)/2);
}


</script>

<script type="text/javascript">
  $(document).ready(function() {
  });
</script>

<div style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×</span>
           </button>
           <h4 id="myModalLabel" class="modal-title"><em class="fa fa-sitemap"></em> Resumen de Red</h4>
        </div>
        <div class="modal-body"><em class="fa fa-spin fa-spinner"></em> Estamos generando el resumen del arbol, por favor espere. </div>
        <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
        </div>
     </div>
  </div>
</div>