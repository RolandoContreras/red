     <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               
		<!-- START Language list-->
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" data-toggle="dropdown" class="btn btn-default">Spanish</button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                	<li><a href="#" class="LenguageSystem" onclick="LenguajeSystem('English');" >English</a></li><li><a href="#" class="LenguageSystem" onclick="LenguajeSystem('Spanish');" >Spanish</a></li>
                </ul>
            </div>
        </div>
        <!-- END Language list    -->
		               <div class="col-lg-3">
                <img src="../perfiles_img/logo.jpg" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>            </div>

            <div class="row">
               <div class="col-lg-12">
                  <div role="alert" class="alert alert-info">
                     <strong>Nota: </strong>Recordamos que el 7% de sus comisiones es para gastos administrativos para la empresa.
                  </div>

                                    <div id="panelDemo14" class="panel panel-info">
                     <div class="panel-heading">Mi Balance</div>
                     <div class="panel-body">
                              
                        <!--<form name="facturas-frm" id="facturas-frm" method="post" action="reportes-generales-facturas" class="form-horizontal" data-parsley-validate target="_blank">-->
                             
                           <table id="table" class="display table table-striped table-hover responsive">
                              <thead>
                                <tr>
                                    <th style="width:120px;" class="all">Fecha</th>
                                    <th>Concepto</th>
                                    <th style="width:100px;">Creditos</th>
                                    <th style="width:150px;">Estado</th>
                                    
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($obj_commissions as $value) { ?>
                                      <tr role="row" class="odd">
                                          <td class="sorting_1"><?php echo formato_fecha($value->date);?></td>
                                          <td>Concepto &nbsp;<?php echo $value->bonus;?></td>
                                            <td>
                                            <span class="text-success"><?php echo "$".$value->amount;?></span>
                                            <!--<span class="text-danger">(-10%)</span>-->
                                            </td>
                                            <td>
                                            <!--<span class="label label-warning">En espera por procesar</span>-->
                                               <span class="label label-success">
                                                   <?php 
                                                   if($value->status_value == 1){ ?>
                                                       <span class="label label-success">Procesado</span>
                                                   <?php }else{ ?>
                                                       <span class="label label-warning">En espera por procesar</span>
                                                   <?php } ?>
                                               </span> 
                                            </td>
                                       </tr>
                                 <?php } ?>
                                  
<!--                                   
                                   <tr role="row" class="even">
                                        <td class="sorting_1">2016-11-30 23:00:01</td>
                                        <td>Concepto Pasivos no calculables (Pack 100) (ID PACKS 73)</td>
                                        <td>
                                        <span class="text-success">$1.00</span>
                                        <span class="text-danger">(-10%)</span>
                                        </td>
                                        <td>
                                        <span class="text-danger">$0.00</span>
                                        </td>
                                        <td>
                                        <span class="label label-success">Procesado</span>
                                        </td>
                                   </tr>-->
                              </tbody>
                           </table>

                        <!--</fortablem>-->
                          
                     </div>
                  </div>
                    
               </div>

            </div>
            
         </div>
      </section>
      <!-- Page footer-->
<script src="<?php echo site_url().'static/cms/js/core/bootstrap-modal.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/bootbox.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.dataTables.min.js';?>"></script>
<link href="<?php echo site_url().'static/cms/css/core/jquery.dataTables.css';?>" rel="stylesheet"/>

 <script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
</body>

</html>