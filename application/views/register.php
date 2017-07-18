<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("head"); ?>
<body>
<!-- PRELOADER -->
<img id="preloader" src="<?php echo site_url().'static/page_front/white/gif/preloader.gif'?>" alt="preloader" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
		<!-- HEADER -->
                <?php $this->load->view("header_secundary"); ?>
		<!-- //HEADER -->
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>Registro</b></h2>
				<p>Bienvenido a BITSHARE</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- BLOG -->
		<section id="blog">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- BLOG BLOCK -->
					<div class="blog_block col-lg-10 col-md-10 padbot50 col-md-offset-2">
						<!-- BLOG POST -->
						<div class="blog_post margbot100 clearfix" data-animated="fadeInUp">
							<div class="blog_post_descr">
                                                            <div id="fields">
                                                                    <form>
                                                                       <?php if(isset($obj_customer)){ ?>
                                                                                <a class="blog_post_title" style="font-size: 22px !important;">Patrocinador</a>
                                                                                        <label data-add-placeholder>
                                                                                            <input type="text"  readonly="readonly" value="<?php  
                                                                                            if(isset($obj_customer->username)){
                                                                                                echo $obj_customer->username;
                                                                                            }?>" placeholder="<?php 
                                                                                            if(isset($obj_customer->username)){
                                                                                                echo $obj_customer->username;
                                                                                            }?>"/>
                                                                                            <input type="hidden"  id="customer_id" name="customer_id" value="<?php  
                                                                                            if(isset($obj_customer->customer_id)){
                                                                                                echo $obj_customer->customer_id;
                                                                                            }
                                                                                            ?>" placeholder="<?php 
                                                                                            if(isset($obj_customer->customer_id)){
                                                                                                echo $obj_customer->customer_id;
                                                                                            }?>"/>
                                                                                            <input type="hidden"  id="pierna_customer"  name="pierna_customer" value="<?php  
                                                                                            if(isset($obj_customer->position_temporal)){
                                                                                                echo $obj_customer->position_temporal;
                                                                                            }
                                                                                            ?>" placeholder="<?php 
                                                                                            if(isset($obj_customer->position_temporal)){
                                                                                                echo $obj_customer->position_temporal;
                                                                                            }?>"/>
                                                                                        </label>
                                                                            <?php }else{ ?>
                                                                                <input type="hidden"  readonly="readonly" id="customer_id" value="1"/>
                                                                                <input type="hidden"  readonly="readonly" id="pierna_customer" value="1"/>
                                                                            <?php } ?>
                                                                        
                                                                                <hr>
                                                                        <a class="blog_post_title" style="font-size: 22px !important;">Usuario</a>
                                                                            <input type="text" onblur="validate_username(this.value);" id="usuario" class="password_text" name="usuario" placeholder="Usuario" maxlength="50" data-constraints="@NotEmpty"/>
                                                                            <span class="alert-0"></span>
                                                                            <br>
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Contraseña</a>
                                                                            <input type="password"  id="clave" name="clave" class="password_text" placeholder="<?php echo replace_vocales_voculeshtml("Contraseña")?>" data-constraints="@NotEmpty" maxlength="50"/>
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Repertir Contraseña</a>
                                                                            <input type="password" class="password_text" onblur="validate_2passwordr(this.value);"  id="repita_clave" name="repita_clave" placeholder="Repetir Contrase&ntilde;a" data-constraints="@NotEmpty" maxlength="50"/>
                                                                            <span class="alert-1"></span>
                                                                            <hr>
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Nombres</a>
                                                                            <input type="text" id="name" name="name" placeholder="Nombre" maxlength="50" class="password_text" data-constraints="@NotEmpty"/>
                                                                            
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Apellidos</a>    
                                                                            <input type="text"  id="last_name" name="last_name" placeholder="Apellidos" class="password_text" data-constraints="@NotEmpty" maxlength="150"/>
                                                                            
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Dirección</a> 
                                                                            <textarea placeholder="<?php echo replace_vocales_voculeshtml("Dirección");?>" class="password_text" id="address" name="address" class="form-control" data-constraints="@NotEmpty"></textarea>                    
                                
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Telefono</a> 
                                                                            <input type="text"  id="telefono" name="telefono" placeholder="Telefono" class="password_text" data-constraints="@NotEmpty"/>
                                
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">DNI</a> 
                                                                            <input type="text" onblur="validate_dni(this.value);" id="dni" name="dni" placeholder="DNI  # de identificacion" class="password_text" data-constraints="@NotEmpty" maxlength="150"/>
                                                                            <span class="alert-2"></span>
                                
                                    
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Correo Electronico</a> 
                                                                            <input type="text"  id="email" name="email" placeholder="Correo Electrónico" class="password_text" data-constraints="@NotEmpty @Email" maxlength="150"/>
                                    
                                                                            <hr>
                                                                            <a class="blog_post_title" style="font-size: 22px !important;">Fecha de Nacimiento</a> 
                                                                             <select class="password_text" name="dia" id="dia">
                                                                                <option value=""><?php echo replace_vocales_voculeshtml("Día")?></option>
                                                                                    <?php  for ($x = 1; $x <= 31; $x++) {  ?>
                                                                                        <option value="<?php echo $x?>"><?php echo $x;?></option>
                                                                                    <?php } ?>
                                                                            </select>
                                    
                                                                            <select name="mes" id="mes" class="password_text" >
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
                                                                        <select  name="ano" id="ano" class="password_text" >
                                                                                    <option selected="selected" value="">A&ntilde;o</option>
                                                                                        <?php  for ($x = 1950; $x <= 2016; $x++) {  ?>
                                                                                            <option value="<?php echo $x?>"><?php echo $x;?></option>
                                                                                        <?php } ?>
                                                                        </select> 
                            
                                                                        <br>
                                                                        <hr>
                                                                    <select class="password_text" onchange="validate_region(this.value);" name="pais" id="pais" class="ui dropdown">
                                                                        <option  selected value=""><?php echo replace_vocales_voculeshtml("País");?></option>
                                                                            <?php  foreach ($obj_paises as $key => $value) { ?>
                                                                                   <option  value="<?php echo $value->id;?>"><?php echo $value->nombre;?></option>
                                                                            <?php } ?>
                                                                    </select>
                                                                    <select  name="region" id="region" class="password_text">
                                                                    </select>
                                    
                                                            <a class="blog_post_title" style="font-size: 22px !important;">Ciudad</a> 
                                                            <input type="text"  id="city" name="city" class="password_text" placeholder="Ciudad" data-constraints="@NotEmpty" maxlength="150"/>
                                                                <br><br>
                                                                    

                                
                                <a style="color: blue;" href="<?php echo site_url().'static/plan/document/Contrato_de_Dsitribuidor_BITSHARE.docx';?>" download="Contrato_de_Dsitribuidor_BITSHARE.docx"><?php echo replace_vocales_voculeshtml("Contrato Bitshare (descargar)");?></a>
                           
                           
                           
                                <h6 class="password_text" style="font-size: 16px !important; color: skyblue;"><?php echo replace_vocales_voculeshtml("¿Está de acuerdo?  al dar click en el boton crear cuenta indico que conozco, he leído y acepto las cláusulas y condiciones del contrato bitshare.");?></h6>
                                                                            
                                <hr>
                                <a><input class="contact_btn" onclick="crear_registro();" value="<?php echo replace_vocales_voculeshtml("Crear Cuenta");?>" /></a>
                                <span class="alert-4"></span>
                                                                    </form>
                                                                
                                                                </div>
                                                            </div>
								<hr>
							</div>
						</div><!-- //BLOG POST -->
					</div><!-- //BLOG BLOCK -->
				</div><!-- //ROW -->
			<!--</div> //CONTAINER -->
		</section><!-- //BLOG -->
                <div id="spinner"></div>
	</div><!-- //PAGE -->
        <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
        <script src="<?php echo site_url().'static/page_front/js/register.js';?>"></script>
        <script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>
        <!-- CONTACTS -->
	<section id="contacts">
            
        </section><!-- //CONTACTS -->
	<!-- FOOTER -->
        <?php $this->load->view("footer");?>
	<!-- //FOOTER -->
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.930880417326!2d-77.0350244846066!3d-12.116881791420631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c817d1ae2fd3%3A0x6979887ef7b081b5!2sCalle+Enrique+Palacios+420%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1500097903604" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div><!-- //MAP -->
</div>
</body>
</html>