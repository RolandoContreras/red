<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: auto;">
                                            <a class="brand">LISTADO DE  ASOCIADOS</a>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 1050px;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>USUARIO</th>
                                <th>CLIENTE</th>
                                <th>PAQUETE</th>
                                <th>FECHA DE CREACIÓN</th>
                                <th>ESTADO</th> 
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($obj_customer as $value): ?>
                                <td align="center"><b><?php echo $value->username;?></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td align="center"><?php echo $value->franchise;?></td>
                                <td align="center"><?php echo formato_fecha($value->created_at);?></td>
                                <td align="center">
                                    <?php if ($value->status_value == 0) {
                                        $valor = "Activo";
                                        $stilo = "label label-important";
                                    }else{
                                        $valor = "Inactivo";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor;?></span>
                                </td>
                            
                                <td>
                                    <div class="operation">
                                        <div class="btn-group">
                                                    <button class="btn btn-small" onclick="active('<?php echo $value->customer_id;?>');">Activar Paquete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
           <!--</form>-->         
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
<script src="static/cms/js/customer.js"></script>