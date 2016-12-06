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
                            <div class="h2 mt0"><?php if(count($obj_total)>0){echo "$".$obj_total;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Total Pagado</div>
                        </div>
                     </div>
                  </div>
               </div>

                
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-primary">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                           <em class="icon-credit-card fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></div>
                           <div class="text-uppercase">Balance por disponer</div>
                        </div>
                     </div>
                  </div>
               </div>

<!--               <div class="col-lg-3 col-sm-6">
                   START widget
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">0</div>
                           <div class="text-uppercase">Cuenta Mandatoria</div>
                        </div>
                     </div>
                  </div>
               </div>-->

               

               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-success">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-success-dark pv-lg">
                           <em class="icon-badge fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0"><?php echo $obj_customer->franchise;?></div>
                           <div class="text-uppercase">Calificaci&oacute;n</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <strong>Tu links para referir: </strong><a href="<?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?>" class="alert-link"><?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?></a><br>
                <strong>Aqui esta la liga para pago con bitcoins:</strong>188EDdynmC6AWMdiHjsgM4pLF4fvX36LbN<br>
                <strong>Para la activación: </strong><a class="alert-link">Paquete + $15.00 (Membership)</a><br><br>
                
              </div>
            </div>

            <div class="row">
               <div class="col-lg-6">
                  <div id="panelChart2" class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Afiliados Registrados en Mi Red</div>
                     </div>
                     <div class="panel-body">
                        <div class="chart-bar flot-chart"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>