<!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
              <div class="pull-right text-success">
                Precio bitcoin: $<?php echo $price_btc;?>
              </div>
                              <div class="col-lg-3">
                <img src="<?php echo site_url().'static/backoffice/images/logo-btc2.png';?>" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>           
            </div>
          
            <div class="row">
               <div class="col-lg-12">
                    
                     <div class="panel panel-info">
                        <div class="panel-heading">
                           Moviemientos
                        </div>
                        <div class="panel-body">
                            <div role="alert" class="alert alert-info">
                            <strong>Nota:</strong>
                            El monto minimo para solicitar el pago es de $25.
                            </div>
                            
                            <div class="form-inline" >
                                <p class="lead">
                                Saldo Disponible en Billetera:
                                <b><?php if(count($obj_balance_disponible)>0){echo "$".$obj_balance_disponible;}else{echo "$0.00";}?></b>
                                </p>
                                <div class="form-group">
                                <label for="monto">Monto que Solicita:</label>
                                <select id="monto" name="monto" class="form-control">
                                    <option value="">***Seleccionar***</option>
                                    <option value="1"><?php if(count($obj_balance_red)>0){echo "$".$obj_balance_red." - "."Balance en Red";}else{echo "$0.00";}?></option>
                                    <option value="2"><?php if(count($normal_account)>0){echo "$".$normal_account." - "."Balance Pagos Diarios";}else{echo "$0.00";}?></option>
                                    <option value="3"><?php if(count($obj_balance_disponible)>0){echo "$".$obj_balance_disponible." - "."Ambos";}else{echo "$0.00";}?></option>
                                </select>
                                
                                </div>
                                <input class="form-inline" type="hidden" name="SolicitarPago" value="1"/>
                                <button onclick="enviar_pago();" class="btn btn-sm btn-primary bg-danger-dark">Enviar Solicitud</button>
                                </div>
                            <br/>
                            <br/>
                            <legend>Movimientos de Solicitudes</legend>
                           <div class="proceso_1 col-lg-12">
                           <div class="proceso_2 col-lg-12">
                              <table id="table" class="display table table-striped table-hover responsive">
                                 <thead>
                                    <tr>
                                         <th class="all">Fecha</th>
                                         <th>Concepto</th>
                                         <th>Monto Enviado</th>
                                         <th>Estado</th>
                                    </tr>
                                 </thead>
                                 <tbody >
                                     <?php foreach ($obj_commissions as $value) { ?>
                                      <tr role="row" class="odd">
                                          <td><?php echo $value->date;?></td>
                                          <td class="sorting_1">Pagos por comisiones</td>
                                          <td>
                                            <span class="text-success"><?php echo "$".$value->amount;?></span>
                                          </td>
                                          <td>
                                                   <?php 
                                                   if($value->status_value == 1 || $value->status_value == 2){ ?>
                                                       <span class="label label-success">Pagado</span>
                                                   <?php }else{ ?>
                                                       <span class="label label-warning">En espera de procesar</span>
                                                   <?php } ?>
                                           </td>
                                       </tr>
                                  <?php } ?>
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
<script src="<?php echo site_url().'static/backoffice/js/pay.js';?>"></script>
</html>