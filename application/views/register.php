
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <!--========================================================
                              HEAD
    =========================================================-->
    <?php $this->load->view("head"); ?>
<body>
<!-- The Main Wrapper -->
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
     <?php $this->load->view("header_secundary"); ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
          <section class="well-xs text-center">
            <div class="container wow fadeInUp">
                <h1>REGISTRO</h1>
                <!-- RD Mailform -->
                <form class='rd-mailform'>
                    <fieldset>
                        <div class="row">
                            <h4>Login</h4>
                            <div class="col-xs-12">
                                <label></label>
                            </div>
                            <!--<label for="usuario" class="col-lg-3 control-label">Usuario</label>-->
                            <div class="col-xs-12">
                                <label data-add-placeholder>
                                    <input type="text" onblur="validate_username(this.value);" id="usuario" name="usuario" placeholder="Usuario" maxlength="50" data-constraints="@NotEmpty"/>
                                    <span class="alert-0"></span>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label>
                                    <input type="password"  id="clave" name="clave" placeholder="Contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label>
                                    <input type="password" onblur="validate_2passwordr(this.value);"  id="repita_clave" name="repita_clave" placeholder="Repetir contraseña" data-constraints="@NotEmpty" maxlength="50"/>
                                    <span class="alert-1"></span>
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <h4>Datos Personales</h4>
                            <div class="col-xs-12">
                                <label></label>
                            </div>
                            <div class="col-xs-12">
                                <label data-add-placeholder>
                                    <input type="text" id="name" name="name" placeholder="Nombre" maxlength="50" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label data-add-placeholder>
                                    <input type="text"  id="last_name" name="last_name" placeholder="Apellidos" data-constraints="@NotEmpty" maxlength="150"/>
                                </label>
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label data-add-placeholder>
                                    <textarea placeholder="Dirección" id="address" name="address" class="form-control" data-constraints="@NotEmpty"></textarea>        
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label>
                                    <input type="text"  id="telefono" name="telefono" placeholder="Telefono" data-constraints="@NotEmpty"/>
                                </label>
                            </div>
                            
                            <div class="col-sm-12">
                                <label></label>
                                <label data-add-placeholder>
                                    <input type="text" onblur="validate_dni(this.value);" id="dni" name="dni" placeholder="DNI  # de identificacion" data-constraints="@NotEmpty" maxlength="150"/>
                                    <span class="alert-2"></span>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label></label>
                                <label data-add-placeholder>
                                    <input type="text"  id="email" name="email" placeholder="Correo Electrónico" data-constraints="@NotEmpty @Email" maxlength="150"/>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <form style="text-align: left;">
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                            </div>
                            <div class="col-xs-4">
                                <br/><br/>
                                <label for="Día" class="control-label">Fecha de Nacimiento</label>
                                    <select  name="dia" id="dia" class="ui dropdown">
                                        <option value="">Día</option>
                                            <?php  for ($x = 1; $x <= 31; $x++) {  ?>
                                                <option value="<?php echo $x?>"><?php echo $x;?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            <br/>
                            <div class="col-xs-4">
                                <br/><br/>
				<label for="Mes" class="col-lg-3 control-label">Mes</label>
                                    <select name="mes" id="mes" class="ui dropdown">
                                        <option value="">Mes</option>
                                                <option value="01">Enero</option>
                                                <option value="02">Febrero</option>
                                                <option value="03">Marzo</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Mayo</option>
                                                <option value="06">Junio</option>
                                                <option value="07">Julio</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Setiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                </select>
                            </div>
                            <div class="col-xs-4">
                                <br/><br/>
				<label for="Año" class="col-lg-3 control-label">Año</label>
                                    <select  name="ano" id="ano" class="ui dropdown">
                                        <option selected="selected" value="">Año</option>
                                            <?php  for ($x = 1950; $x <= 2016; $x++) {  ?>
                                                <option value="<?php echo $x?>"><?php echo $x;?></option>
                                            <?php } ?>
                                    </select>                            
                            </div> 
                            <div class="col-xs-12">
                                <br><br>
                                    <select onchange="validate_region(this.value);" name="pais" id="pais" class="ui dropdown">
                                        <option  selected value="">País</option>
                                            <?php  foreach ($obj_paises as $key => $value) { ?>
                                                   <option  value="<?php echo $value->id;?>"><?php echo $value->nombre;?></option>
                                            <?php } ?>
                                </select>
                            </div>
                            <div class="col-xs-12">
                                <br><br>
                                    <select  name="region" id="region" class="ui dropdown">
                                    </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <form class='rd-mailform' style="margin-top: 0px !important;">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-12">
                                <label></label>
                                <label data-add-placeholder>
                                    <input type="text"  id="city" name="city" placeholder="Ciudad" data-constraints="@NotEmpty" maxlength="150"/>
                                </label>
                            </div>
                            <
                            <h4>Selección de Pierna</h4>
                            <div class="col-xs-12">
                                <label></label>
                            </div>
                            <div class="col-xs-6">
                                <label data-add-placeholder>
                                    <input name="pierna" type="radio" value="1"/><h6 style="margin-top: -40px;">Izquierda</h6>
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <label data-add-placeholder>
                                     <input name="pierna" type="radio" value="2"/><h6  style="margin-top: -40px;">Derecha</h6>
                                </label>
                            </div>
                            <label data-add-placeholder>
                                    <input type="text" readonly="readonly"/>
                                </label>
                            <div class="col-sm-6">
                                <label></label>
                                <label data-add-placeholder>
                                    <input type="checkbox" id='terminos' name="terminos" value="1" data-constraints="@NotEmpty"><h6 style="margin-top: -40px;"><a style="color: blue;" href="<?php echo site_url().'static/plan/document/terminos-y-condiciones.docx';?>" download="download">Términos y Condiciones</a></h6>
                                </label>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-xs-12 text-left">
                                <label></label>
                                <h6 style="font-size: 16px !important; color: skyblue;">¿Está de acuerdo?  Al marcar esta casilla, indico que conozco, he leído y acepto las cláusulas y condiciones.</h6>
                                </div>
                            </div>
                            <label></label>
                            <div class="col-xs-12 text-center">
                                <div class="mfControls">
                                    <button onclick="crear_registro();" class="btn btn-md btn-primary" type="button">Crear Cuenta</button>
                                    <span class="alert-4"></span>
                                </div>
                            </div>
                     </fieldset>   
                 </form>      
            </div>
        </section>
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
<?php $this->load->view("footer");?>
</div>
<!--import register.js-->
<script src="<?php echo site_url().'';?>static/page_front/js/register.js"></script>
<!-- Core Scripts -->
<script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
<!-- import Js contact -->
<script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
<!-- import bootbox.min -->
<script src="<?php echo site_url().'static/page_front/core/js/dropdown.js';?>"></script>
<link href='<?php echo site_url().'static/page_front/core/css/dropdown.min.css';?>' rel='stylesheet' type='text/css'>

      
</body>
</html>