<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="widget_container" style="width: 100%;">
                                            <a class="brand">LISTADO DE  USUARIOS PARA RECARGA</a>
                                            <button class="btn btn-small" onclick="nueva_recargar();">Nueva Recarga</button>
                                    </div>
                            </div>
                    </div>
                
             <form id="recargas-form" name="recargas-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/recargas/validate";?>">
                <div class="well nomargin" style="width: 100%;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                <strong>ID:</strong><br>
                <input type="text" id="customer_id" name="customer_id" value="<?php echo isset($obj_customer->customer_id)?$obj_customer->customer_id:"";?>" class="input-large-fluid" placeholder="ID">
                <br><br>
                <strong>Nombres:</strong><br>
                <input type="text" id="first_name" name="first_name" value="<?php echo isset($obj_customer->first_name)?$obj_customer->first_name:"";?>" class="input-large-fluid" placeholder="Nombres">
                <br><br>
                <strong>Apellidos:</strong><br>
                <input type="text" id="last_name" name="last_name" value="<?php echo isset($obj_customer->last_name)?$obj_customer->last_name:"";?>" class="input-large-fluid" placeholder="Apellidos">
                <br><br>
                <strong>DNI:</strong><br>
                <input type="text" id="dni" name="dni" value="<?php echo isset($obj_customer->dni)?$obj_customer->dni:"";?>" class="input-large-fluid" placeholder="DNI">
                <br><br>
                <strong>Correo Electrónico:</strong><br>
                <input type="text" id="email" name="email" value="<?php echo isset($obj_customer->email)?$obj_customer->email:"";?>" class="input-large-fluid" placeholder="Correo">
                <br><br>
                <strong>Monto:</strong><br>
                <input type="text" id="amount" name="amount" value="" class="input-large-fluid" placeholder="Monto">
                <br><br>
                <div class="subnav nobg">
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Recargar</button>
                </div>
                </div>
           </form>         
        </div>
    </div>
</div><!-- main content -->
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="static/cms/js/recargar.js"></script>