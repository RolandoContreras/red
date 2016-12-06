<!-- Main section-->
      <section>
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
             
             <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-green">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                           <em class="icon-diamond fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Balance total</div>
                        </div>
                     </div>
                  </div>
               </div>
                
                  <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0"><?php if(count($obj_balance_disponible)>0){echo "$".$obj_balance_disponible;}else{echo "$0.00";}?></div>
                            <input type="hidden" id="balance" name="balance" value="<?php if(count($obj_balance_disponible)>0){echo $obj_balance_disponible;}else{echo "0.00";}?>" />
                           <div class="text-uppercase">Balance total disponible</div>
                        </div>
                     </div>
                  </div>
               </div> 
                 
                 <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-danger">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-danger-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0"><?php if(count($normal_account)>0){echo "$".$normal_account;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Balance Cuenta Normal</div>
                        </div>
                     </div>
                  </div>
               </div>
                 
              <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-warning">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-warning-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0"><?php if(count($mandatory_account)>0){echo "$".$mandatory_account;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Balance Cuenta Mandatoria</div>
                        </div>
                     </div>
                  </div>
               </div>  

            <div class="row">
               <div class="col-lg-12">
                    
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           Moviemientos
                        </div>
                        <div class="panel-body">
                           <div class="proceso_1 col-lg-12">
                           <div class="proceso_2 col-lg-12">
                              <table id="table" class="display table table-striped table-hover responsive">
                                 <thead>
                                    <tr>
                                         <th class="all">Usuario Responzable</th>
                                         <th>Afiliado</th>
                                         <th>Monto</th>
                                         <th>Estado</th>
                                         <th>Concepto</th>
                                         <th class="all">Fecha</th>
                                    </tr>
                                 </thead>
                                 <tbody >
                                     <?php foreach ($obj_commissions as $value) { ?>
                                      <tr role="row" class="odd">
                                          <td>Administrador</td>
                                          <td class="sorting_1"><?php echo $value->username;?></td>
                                          <td>
                                            <span class="text-success"><?php echo "$".$value->amount;?></span>
                                          </td>
                                          <td>
                                                   <?php 
                                                   if($value->status_value == 1 || $value->status_value == 2){ ?>
                                                       <span class="label label-success">Pagado</span>
                                                   <?php }else{ ?>
                                                       <span class="label label-danger">Salida</span>
                                                   <?php } ?>
                                           </td>
                                          <td>Concepto &nbsp;<?php echo $value->bonus;?></td>  
                                          <td><?php echo formato_fecha($value->date);?></td>
                                       </tr>
                                  <?php } ?>
                                     <tr>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                 </tbody>
                              </table>
                           </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>  

               
            </div>
            
         </div>
      </section>
</body>
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
<script src="<?php echo site_url().'static/backoffice/js/commission.js';?>"></script>
</html>