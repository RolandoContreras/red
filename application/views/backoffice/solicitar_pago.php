
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
              <div class="clearfix"></div>        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">Solicitar Pago</div>
              <div class="panel-body">
                  <div role="alert" class="alert alert-info">
                    <strong>Nota:</strong> El monto que solicita debe ser menor o igual al monto disponible que tenga en su billetera.
                  </div>
                  <form name="SolicitarPago" method="post" action="" class="form-inline" data-parsley-validate>
                    <p class="lead">Saldo Disponible en Billetera: <b>$23.40</b></p>
                    <div class="form-group">
                      <label for="monto">Monto que Solicita: </label>
                      <input id="monto" name="monto" placeholder="Monto" class="form-control" type="text" data-parsley-type="number">
                    </div>
                    <input type="hidden" name="SolicitarPago" value="1">
                    <button type="submit" class="btn btn-sm btn-primary bg-danger-dark">Enviar Solicitud</button>
                    
                  </form>

                  <br><br>
                  <legend>Solicitudes</legend>

                  <table id="example" class="display table table-striped table-hover responsive">
                    <thead>
                      <tr>
                        <th style="width:120px;">Fecha</th>
                        <th class="all">Concepto</th>
                        <th style="width:120px;">Monto a Retirar</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                  </table>
              </div>
              </div>
            </div>
          </div>
        </div>
    

      </section>
      

		<!-- =============== VENDOR SCRIPTS ===============-->
		   <!-- MODERNIZR-->
		   <script src="../vendor/modernizr/modernizr.js"></script>
		   <!-- JQUERY-->
		   <script src="../vendor/jquery/dist/jquery.js"></script>
		   <!-- BOOTSTRAP-->
		   <script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
		   <!-- STORAGE API-->
		   <script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
		   <!-- JQUERY EASING-->
		   <script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
		   <!-- ANIMO-->
		   <script src="../vendor/animo.js/animo.js"></script>
		   <!-- SLIMSCROLL-->
		   <script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
		   <!-- SCREENFULL-->
		   <script src="../vendor/screenfull/dist/screenfull.js"></script>
		   <!-- LOCALIZE-->
		   <script src="../vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
		   <!-- RTL demo
		   <script src="../app/js/demo/demo-rtl.js"></script>-->
		   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
		   <!-- SPARKLINE-->
		   <script src="../vendor/sparklines/jquery.sparkline.min.js"></script>

		   <!-- PARSLEY-->
		   <script src="../vendor/parsleyjs/dist/parsley.min.js"></script>
			
			<!-- SWEET ALERT-->
			<script src="../vendor/sweetalert/dist/sweetalert.min.js"></script>	

		   <!-- FLOT CHART-->
		   <script src="../vendor/Flot/jquery.flot.js"></script>
		   <script src="../vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		   <script src="../vendor/Flot/jquery.flot.resize.js"></script>
		   <script src="../vendor/Flot/jquery.flot.pie.js"></script>
		   <script src="../vendor/Flot/jquery.flot.time.js"></script>
		   <script src="../vendor/Flot/jquery.flot.categories.js"></script>
		   <script src="../vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
		   
		   <!-- CLASSY LOADER-->
		   <script src="../vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
		   <!-- MOMENT JS-->
		   <script src="../vendor/moment/min/moment-with-locales.min.js"></script>
		   <!-- DEMO
		   <script src="../app/js/demo/demo-flot.js"></script>-->

		   <!-- DATATABLES-->
		   <script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		   <script src="../vendor/datatables-colvis/js/dataTables.colVis.js"></script>
		   <script src="../app/vendor/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
		   <script src="../app/vendor/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>   

		   <!-- =============== APP SCRIPTS ===============-->
		   <script src="../app/js/app.js"></script>
		   <script src="../js/afiliados.js"></script>
		   <!-- SONIDO -->
		   <script src="../vendor/ion.sound/js/ion.sound.js"></script>
		<script type="text/javascript" src="../vendor/datatables/media/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      ajax: "../includes/ajax_table.php?tipo=20",
      responsive: true,
      "order": [[0, "desc"]],
      "pageLength": 25
    });

    $("form[name=SolicitarPago]").submit(function(){
      
         //Desactivamos el boton
         $("button[type=submit]").attr('disabled', 'disabled').html('<em class="fa fa-spin fa-spinner"></em> Por favor espere...');
         
         $.ajax({
            type: "POST",
            dataType: "json",
            url: "../includes/ajax_afiliados.php", 
            data: $("form[name=SolicitarPago]").serialize(),
            success: function(result){
              //Desactivamos el boton
              $("button[type=submit]").removeAttr('disabled').html("Enviar Solicitud");

                if(result.rps==1){

                  swal({   
                    title: "Solicitud Enviada",   
                    text: result.mensaje,   
                    type: 'success',   
                    showCancelButton: false,   
                    confirmButtonColor: '#3085d6',   
                    cancelButtonColor: '#d33',   
                    confirmButtonText: 'Ok',   
                    closeOnConfirm: false 
                    }, function() {   
                      location.reload();
                  });


                }else{
                  swal("Disculpe!", result.mensaje, 'warning')
                }
               
            },error: function(){ 
                
            }
         });

         return false;
      });

    

  });

</script>
</body>

</html>