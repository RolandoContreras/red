<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("backoffice/b_head");?>
<body>
   <div class="wrapper">
		<!-- top navbar-->
	    <header class="topnavbar-wrapper">
	        <!-- START Top Navbar-->
	        <nav role="navigation" class="navbar topnavbar">
	            <!-- START navbar header-->
	            <div class="navbar-header">
	               	<a href="#" class="navbar-brand">
	                  	<div class="brand-logo">
	                  		<img src="<?php echo site_url().'static/backoffice/images/logo.png';?>" alt="Logo" class="img-responsive">
	                  	</div>
	                  	<div class="brand-logo-collapsed">
	                     	<img src="<?php echo site_url().'static/backoffice/images/logo.png';?>" style="max-height: 40;" alt="App Logo" class="img-responsive">
	                  	</div>
	               	</a>
	            </div>
	            <div class="nav-wrapper">
	               <!-- START Left navbar-->
	               	<ul class="nav navbar-nav">
	                  	<li>
	                     	<!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
	                     	<a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
	                        	<em class="icon-list"></em>
	                     	</a>
	                     	<!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
	                     	<a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
	                        	<em class="icon-list"></em>
	                     	</a>
	                  	</li>
	            </ul>
	            <!-- START Right Navbar-->
	               	<ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="archivos-download" title="Listado de archivos para descargar">
                                    <em class="icon-cloud-download"></em>
                                </a>
                            </li>
	                  	<!-- START Alert menu-->
                            <li class="dropdown dropdown-list">
                                <a href="mi-mensajes">
                                    <em class="icon-envelope-open"></em>
                                    <div class="count-mensajes label label-danger"></div>
                                </a>
                            </li>
                            <li>
                                <a href="logout" title="Salir">
                                   <em class="icon-logout"></em>
                                </a>
                            </li>
	                  <!-- END Offsidebar menu-->
	               </ul>
	               <!-- END Right Navbar-->
	            </div>
	            <!-- END Nav wrapper-->
	            <!-- START Search form-->
	            <form role="search" action="mi-red-buscar" method="post" class="navbar-form">
	               <div class="form-group has-feedback">
	                  <input type="text" name="buscarNavBar" id="buscarNavBar" placeholder="Busqueda rapida de afiliados" class="form-control">
	                  <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
	               </div>
	               <button type="submit" class="hidden btn btn-default">Submit</button>
	            </form>
	            <!-- END Search form-->
	         </nav>
	         <!-- END Top Navbar-->
	      </header>
		
		<!-- sidebar-->
	      	<aside class="aside">
	         	<!-- START Sidebar (left)-->
	         	<div class="aside-inner">
	            	<nav data-sidebar-anyclick-close="" class="sidebar">
	               	<!-- START sidebar nav-->
	               		<ul class="nav">
                                    <!-- START user info-->
                                    <li class="has-user-block">
                                        <div id="user-block" class="">
                                            <div class="item user-block">
                                            <!-- User picture-->
                                                <div class="user-block-picture">
                                                <div class="user-block-status">
                                                        <a href="mi-perfil"><img src="<?php echo site_url().'static/backoffice/images/default.jpg';?>" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle"></a>
                                                        <div class="circle circle-success circle-lg"></div>
                                                </div>
                                                </div>
                                                    <!-- Name and Job-->
                                                <div class="user-block-info">
                                                <span class="user-block-name">Hola, Elizabeth </span>
                                                <span class="user-block-name">Click en la foto para ver su perfil.</span>
                                                <span class="user-block-role"><span class="label label-success"><em class="icon-star"></em> Activo</span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
	                  		<!-- END user info-->
	                  		<!-- Iterates over all sidebar items-->
                                    <li class="nav-heading">
                                    <span>Menu de Navegación</span>
                                    </li>
	              
	                  		<li class="active">
	                     		<a href="principal" title="Inicio">
                                            <em class="icon-home"></em>
                                            <span>Inicio</span>
	                     		</a>
                                            
	                  		</li>
                                        <li >
	                     		<a href="principal" title="Mi Datos">
                                            <em class="icon-home"></em>
                                            <span>Mis Datos</span>
	                     		</a>
	                  		</li>
                                        
	                  		<li class=" ">
	                     		<a href="#forms" title="Facturación" data-toggle="collapse">
                                            <em class="icon-docs"></em>
                                            <span>Facturación</span>
	                     		</a>
                                            
	                     		<ul id="forms" class="nav sidebar-subnav collapse">
                                            <li class="sidebar-subnav-header">Facturación</li>
                                                <li class="">
                                                        <a href="afiliados-tienda-7r1pLS-3pGMJKKk7UDSJpd9TzlZuhKvMA7N-VSjaS8c&1" title="Mis Compras">
                                                        <span>Realizar Compra</span>
                                                        </a>
                                                </li>
			                        <li class="">
			                           	<a href="mis-compras" title="Mis Compras">
			                              	<span>Mis Compras</span>
			                           	</a>
			                        </li>
			                        <li class="">
			                           	<a href="mis-ordenes" title="Mis Ordenes">
			                              	<span>Mis Ordenes</span>
			                           	</a>
			                        </li>
	                     		</ul>
	                  		</li>
	                  		<li class="">
	                     		<a href="mi-red" title="Mi Red">
                                            <em class="icon-organization"></em>
                                            <span>Mi Red</span>
	                     		</a>
	                  		</li>
                                        
	                  		<li class="">
	                     		<a href="mi-billetera" title="Mi Billetera">
	                        		<em class="icon-wallet"></em>
	                        		<span>Mi Billetera</span>
	                     		</a>
	                  		</li>
                                        
	                  		<li class=" ">
                                            <a href="#comisiones" title="Comisiones" data-toggle="collapse">
                                                    <em class="icon-grid"></em>
                                                    <span>Comisiones</span>
                                            </a>

                                            <ul id="comisiones" class="nav sidebar-subnav collapse">
                                                <li class="sidebar-subnav-header">Comisiones</li>
                                                <li class="">
                                                        <a href="mis-calculos" title="Mis Comisiones">
                                                        <span>Mis Comisiones</span>
                                                        </a>
                                                </li>
                                                <li class="">
                                                        <a href="mi-balance" title="Mi Balance">
                                                        <span>Mi Balance</span>
                                                        </a>
                                                </li>
                                                <li class="">
                                                        <a href="mi-paks" title="Packs">
                                                        <span>Mis Packs</span>
                                                        </a>
                                                </li>
                                            </ul>
	                  		</li>

	                  		<li class="">
                                            <a href="incentivos-ganados" title="Incentivos">
                                                <em class="icon-trophy"></em>
                                                <span>Incentivos</span>
                                            </a>
	                  		</li>

	                  		<li class=" ">
			                    <a href="#solicitudes" title="Solicitudes" data-toggle="collapse">
			                        <em class="icon-note"></em>
			                        <span>Solicitudes</span>
			                    </a>
                                            <ul id="solicitudes" class="nav sidebar-subnav collapse">
                                                    <li class="sidebar-subnav-header">Solicitudes</li>
                                                    <li class="">
                                                            <a href="solicitud-pago" title="Solicitar Pagos">
                                                            <span>Solicitar Pagos</span>
                                                            </a>
                                                    </li>
                                                    <li class="">
                                                            <a href="solicitud-saldo" title="Solicitar a Billetera">
                                                            <span>Solicitar a Billetera</span>
                                                            </a>
                                                    </li>
                                            </ul>
	                  		</li>
                                        
	                  		<li class="">
	                     		<a href="mi-direcciones" title="Mis Direcciones">
	                        		<em class="icon-directions"></em>
	                        		<span>Mis Direcciones</span>
	                     		</a>
	                  		</li>
	               		</ul>
	               	<!-- END sidebar nav-->
	            	</nav>
	         	</div>
	         	<!-- END Sidebar (left)-->
	      	</aside>
      		<!-- offsidebar-->
		      
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
              <div class="pull-right text-danger">
                Ethereum: $10.71000000              </div>
                              <div class="col-lg-3">
                <img src="<?php echo site_url().'static/backoffice/images/logo.jpg';?>" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>           
            </div>
            
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-primary">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                           <em class="icon-credit-card fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">$2.00</div>
                           <div class="text-uppercase">Por Cobrar</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-sm-6">
                  <!-- START widget-->
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                           <em class="icon-wallet fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">$11.70</div>
                           <div class="text-uppercase">Saldo Billetera</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-green">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-green-dark pv-lg">
                           <em class="icon-diamond fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">$177.50</div>
                           <div class="text-uppercase">Total Pagado</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-success">
                     <div class="row row-table">
                        <div class="col-xs-4 text-center bg-success-dark pv-lg">
                           <em class="icon-badge fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                           <div class="h2 mt0">Distribuidor</div>
                           <div class="text-uppercase">Calificación</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <strong>Tu links para referir: </strong><a href="http://alliancesystemclub.com/lidermillon" class="alert-link">http://alliancesystemclub.com/lidermillon</a><br>
                <strong>Aqui esta la liga para pago con bitcoins:</strong> 3QnoVEdfWfMC796gyeWCJcTm4KpoWMJAmX<br><br>

                
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

               <div class="col-lg-6">
                  <div id="panelChart2" class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Compras Realizadas en Mi Red</div>
                     </div>
                     <div class="panel-body">
                        <div class="chart-bar2 flot-chart"></div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; 2015 - Software Millenium</span>
      </footer>
   </div>
   
		<!-- =============== VENDOR SCRIPTS ===============-->
		   <!-- MODERNIZR-->
		   <script src="<?php echo site_url().'static/backoffice/js/modernizr.js';?>"></script>
		   <!-- JQUERY-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.js';?>"></script>
		   <!-- BOOTSTRAP-->
		   <script src="<?php echo site_url().'static/backoffice/js/bootstrap.js';?>"></script>
		   <!-- STORAGE API-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.storageapi.js';?>"></script>
		   <!-- JQUERY EASING-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.easing.js';?>"></script>
		   <!-- ANIMO-->
		   <script src="<?php echo site_url().'static/backoffice/js/animo.js';?>"></script>
		   <!-- SLIMSCROLL-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.slimscroll.min.js';?>"></script>
S		   <!-- LOCALIZE-->
		   <script src="<?php echo site_url().'static/backoffice/js/jquery.jquery.localize.js';?>"></script>
		   <!-- RTL demo
		   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
		   <!-- SPARKLINE-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/sparklines/jquery.sparkline.min.js"></script>

		   <!-- PARSLEY-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/parsleyjs/dist/parsley.min.js"></script>
			
			<!-- SWEET ALERT-->
			<script src="../vendor/sweetalert/dist/sweetalert.min.js"></script>	

		   <!-- FLOT CHART-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/Flot/jquery.flot.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/Flot/jquery.flot.resize.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/Flot/jquery.flot.pie.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/Flot/jquery.flot.time.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/Flot/jquery.flot.categories.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
		   <!-- CLASSY LOADER-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
		   <!-- MOMENT JS-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/moment/min/moment-with-locales.min.js"></script>
		   <!-- DATATABLES-->
		   <script src="http://alliancesystemclub.com/millenium/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/app/vendor/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/app/vendor/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>   
		   <!-- =============== APP SCRIPTS ===============-->
		   <script src="http://alliancesystemclub.com/millenium/app/js/app.js"></script>
		   <script src="http://alliancesystemclub.com/millenium/js/afiliados.js"></script>
		   <!-- SONIDO -->
		   <script src="http://alliancesystemclub.com/millenium/vendor/ion.sound/js/ion.sound.js"></script>
		   <script type="text/javascript">
   $(document).ready(function() {
      function grafica_registros_afiliados(){        
         var options = {
            series: {
               bars: {
                  align: 'center',
                  lineWidth: 0,
                  show: true,
                  barWidth: 0.6,
                  fill: 0.9
               }
            },grid: {
               borderColor: '#eee',
               borderWidth: 1,
               hoverable: true,
               backgroundColor: '#fcfcfc'
            },tooltip: true, tooltipOpts: {
               content: function (label, x, y) { return x + ' : ' + y; }
            },xaxis: {
               tickColor: '#fcfcfc',
               mode: 'categories'
            },yaxis: {
               // position: 'right' or 'left'
               tickColor: '#eee'
            },shadowSize: 0
         };

         $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/ajax_afiliados.php", 
            data: {"GraficaRegistrosAfiliados":1},
            success: function(result){
               
               var data = [{
                              "label": "Registros Red",
                              "color": "#1f92fe",
                              "data": [
                                ["Ene", result.ene],
                                ["Feb", result.feb],
                                ["Mar", result.mar],
                                ["Abr", result.abr],
                                ["May", result.may],
                                ["Jun", result.jun],
                                ["Jul", result.jul],
                                ["Ago", result.ago],
                                ["Sep", result.sep],
                                ["Oct", result.oct],
                                ["Nov", result.nov],
                                ["Dic", result.dic]
                              ]
                           },
                           {
                              "label": "Registros Directos",
                              "color": "#f0693a",
                              "data": [
                                ["Ene", result.ene_],
                                ["Feb", result.feb_],
                                ["Mar", result.mar_],
                                ["Abr", result.abr_],
                                ["May", result.may_],
                                ["Jun", result.jun_],
                                ["Jul", result.jul_],
                                ["Ago", result.ago_],
                                ["Sep", result.sep_],
                                ["Oct", result.oct_],
                                ["Nov", result.nov_],
                                ["Dic", result.dic_]
                              ]
                          }];
               
               var chart = $('.chart-bar');
               if(chart.length){
                  $.plot(chart, data, options);
               }
               

            },error: function(){ 
               alert('Se ha producido un error, por favor contacte con soporte. Grafica Registro de Afiliados');     
            }
         });
      }

      function grafica_compras_realizadas(){        
         var options = {
            series: {
               bars: {
                  align: 'center',
                  lineWidth: 0,
                  show: true,
                  barWidth: 0.6,
                  fill: 0.9
               }
            },grid: {
               borderColor: '#eee',
               borderWidth: 1,
               hoverable: true,
               backgroundColor: '#fcfcfc'
            },tooltip: true, tooltipOpts: {
               content: function (label, x, y) { return x + ' : ' + y; }
            },xaxis: {
               tickColor: '#fcfcfc',
               mode: 'categories'
            },yaxis: {
               // position: 'right' or 'left'
               tickColor: '#eee'
            },shadowSize: 0
         };

         $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/ajax_afiliados.php", 
            data: {"GraficaComprasRealizadas":1},
            success: function(result){
               
               var data = [{
                              "label": "Compras",
                              "color": "#1f92fe",
                              "data": [
                                ["Ene", result.ene],
                                ["Feb", result.feb],
                                ["Mar", result.mar],
                                ["Abr", result.abr],
                                ["May", result.may],
                                ["Jun", result.jun],
                                ["Jul", result.jul],
                                ["Ago", result.ago],
                                ["Sep", result.sep],
                                ["Oct", result.oct],
                                ["Nov", result.nov],
                                ["Dic", result.dic]
                              ]
                           },{
                              "label": "Comisionable",
                              "color": "#f0693a",
                              "data": [
                                ["Ene", result.ene_],
                                ["Feb", result.feb_],
                                ["Mar", result.mar_],
                                ["Abr", result.abr_],
                                ["May", result.may_],
                                ["Jun", result.jun_],
                                ["Jul", result.jul_],
                                ["Ago", result.ago_],
                                ["Sep", result.sep_],
                                ["Oct", result.oct_],
                                ["Nov", result.nov_],
                                ["Dic", result.dic_]
                              ]
                          }];
               
               var chart = $('.chart-bar2');
               if(chart.length){
                  $.plot(chart, data, options);
               }
               

            },error: function(){ 
               alert('Se ha producido un error, por favor contacte con soporte. Grafica Registro de Afiliados');     
            }
         });
      }
      grafica_registros_afiliados();
      grafica_compras_realizadas();
   });
    
   </script>
</body>

</html>