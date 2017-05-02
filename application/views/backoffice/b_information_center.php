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
          <div id="panelDemo14" class="panel panel-info">
                <div class="panel-heading">Archivos para Descargar</div>
                <div class="panel-body">
                    <div id="archivos_subidos">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px;">Tipo</th>
                                                <th style="width: 250px;">Archivo</th>
                                                <th style="width: 50px;" class="text-center">Acción</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <em class="fa fa-file-pdf-o fa-2x"/>
                                                </td>
                                                <td>Plan de Compensación (PDF)</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url().'static/plan/document/presentacion-bitshares.pptx';?>" download="presentacion_ppt_es" class="btn btn-info" title="Descargar Presentación">Descargar</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <em class="fa fa-file-powerpoint-o fa-2x"/>
                                                </td>
                                                <td>Plan de Compensación (PPT)</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url().'static/plan/document/presentacion-bitshares.pptx';?>" download="presentacion_ppt_es" class="btn btn-info" title="Descargar Presentación">Descargar</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <em class="fa fa-file-archive-o fa-2x"/>
                                                </td>
                                                <td>Plan de Compensación (RAR)</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url().'static/plan/files/imagenes_bitshare.rar';?>" download="imagenes_presetacion" class="btn btn-info" title="Descargar Imagenes Presentación">Descargar</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <em class="fa fa-file-word-o fa-2x"/>
                                                </td>
                                                <td>Contrato Bitshare (DOCX)</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url().'static/plan/document/Contrato_de_Dsitribuidor_BITSHARE.docx';?>" download="contrato_distribuidor_bitshare" class="btn btn-info" title="Descargar Contrato Bitshare">Descargar</a>
                                                </td>
                                            </tr>
<!--                                            <tr>
                                                <td>
                                                    <em class="fa fa-file-image-o fa-2x"/>
                                                </td>
                                                <td>1 horarios.jpg</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url().'static/plan/document/presentacion-bitshares.pptx';?>" class="btn btn-info" title="Descargar 1 horarios.jpg">Descargar</a>
                                                </td>
                                            </tr>-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
 </div>
    </div>           
</section>