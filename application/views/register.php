<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Millenium</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/font-awesome.min.css';?>">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/simple-line-icons.css';?>">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo site_url().'static/bootstrap/css/bootstrap.css';?>" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="app/css/app.css" id="maincss">
   <!-- SWEET ALERT-->
   <link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/sweetalert.css';?>">
</head>
<body>
   <div class="wrapper">
      <div class="row">
         <div class="col-md-6  col-xs-12 col-md-offset-3 col-sm-offset-0 ">
            <div class="panel panel-dark panel-flat">
               <div class="panel-heading text-center">
                  FORMULARIO DE REGISTRO 
                  <h5>El nombre de su patrocinador es: Elizabeth  Huidobro Torres  (lidermillon)</h5>
               </div>
               <div class="panel-body">
                  <!-- Condicion usuario consumidor-->
                     <form name="FormRegistrarUsuario" method="post" action="" class="form-horizontal" data-parsley-validate>
                     <legend>Login</legend>      
                     <div class="form-group">
                        <label for="usuario" class="col-lg-3 control-label">Usuario</label>
                        <div class="col-lg-9">
                           <input onblur="validate_username(this.value);" type="text" placeholder="Usuario" id="usuario" name="usuario" class="form-control" data-parsley-maxlength="50" required>                
                           <span class="alert-0"></span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="clave" class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-9">
                           <input type="password" placeholder="Contraseña" id="clave" name="clave" class="form-control" data-parsley-maxlength="50" required>                
                           <span class="alert-1"></span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="repita_clave" class="col-lg-3 control-label">Repetir el Password</label>
                        <div class="col-lg-9">
                           <input onblur="validate_2passwordr(this.value);" type="password" placeholder="Repita Contraseña" id="repita_clave" name="repita_clave" class="form-control" data-parsley-maxlength="50" required>                
                           <span class="alert-2"></span>
                        </div>
                     </div>
                     <legend>Datos Personales</legend>

                     
			<div class="form-group">
				<label for="nombre" class="col-lg-3 control-label">Nombre</label>
				<div class="col-lg-9">
					<input type="text" placeholder="Nombre" id="nombre" name="nombre" class="form-control" data-parsley-maxlength="50" required>                
                </div>
            </div>
			<div class="form-group">
				<label for="apellido" class="col-lg-3 control-label">Apellido</label>
				<div class="col-lg-9">
					<input type="text" placeholder="Apellido" id="apellido" name="apellido" class="form-control" data-parsley-maxlength="50" required>                
                </div>
            </div>
			<div class="form-group">
				<label for="direccion" class="col-lg-3 control-label">Direccion</label>
				<div class="col-lg-9">
					<textarea placeholder="Direccion" id="direccion" name="direccion" class="form-control" required></textarea>               
                </div>
            </div>
			<div class="form-group">
				<label for="telefono" class="col-lg-3 control-label">Telefono</label>
				<div class="col-lg-9">
					<input type="text" placeholder="Telefono" id="telefono" name="telefono" class="form-control" required>          
                </div>
            </div>
			<div class="form-group">
				<label for="pais" class="col-lg-3 control-label">Pais</label>
				<div class="col-lg-9">
					<select onchange="validate_region(this.value);" name="pais" id="pais" class="form-control">
                                            <option value="">Seleccionar</option>
                                                <?php  foreach ($obj_paises as $key => $value) { ?>
                                                     <option value="<?php echo $value->id;?>"><?php echo $value->nombre;?></option>
                                                <?php } ?>
                                        </select>
                </div>
            </div>
				<div class="form-group">
	                <label for="estado_pais" class="col-lg-3 control-label">Estado</label>
	                <div class="col-lg-9 ajax_estado_pais">
	                    <select id="estado_pais" name="estado_pais" class="form-control" required>
							<option value="">***Seleccione un pais***</option>
						</select>
	                </div>
	            </div>
				
			<div class="form-group">
				<label for="ciudad" class="col-lg-3 control-label">Ciudad</label>
				<div class="col-lg-9">
					<input type="text" placeholder="Ciudad" id="ciudad" name="ciudad" class="form-control" required>          
                </div>
            </div>
                     <div class="form-group">
                        <label for="identidad" class="col-lg-3 control-label">RFC / DNI  # de identificacion</label>
                        <div class="col-lg-9">
                           <input onblur="validate_dni(this.value);" type="text" placeholder="Identificación" id="identidad" name="identidad" class="form-control" data-parsley-maxlength="50" required>                
                           <span class="alert-3"></span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="email" class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-9">
                           <input type="email" placeholder="Email" id="email" name="email" class="form-control" data-parsley-maxlength="50" required>                
                        </div>
                     </div>
    	    </div>
		<legend>Selección de Pierna</legend>
			<div class="form-group">
	            <div class="col-lg-9">
	            	<label class="radio-inline c-radio">
	            		<input id="origen_pierna" type="radio" name="origen_pierna" value="1" required>
	                    <span class="fa"></span>Pierna Izquierda
	                </label>
	                <label class="radio-inline c-radio">
	            		<input id="origen_pierna2" type="radio" name="origen_pierna" value="2">
	                    <span class="fa"></span>Pierna Derecha
	                </label>
	            </div>
	        </div>
			
		<legend>Politicas</legend>
		<div class="form-group">
			<div class="col-lg-12">
				<textarea class="form-control" style="height:150px;">CONTRATO DE DISTRIBUCIÓN MERCANTIL NO EXCLUSIVO QUE CELEBRAN “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.”,  Y POR OTRA PARTE, EL CAPACITADOR INDEPENDIENTE__________________________________________ , A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ EL “EMPRESARIO INDEPENDIENTE, TAMBIEN CAPACITADOR Y/O DISTRIBUIDOR”, QUIENES MANIFIESTAN ESTAR DE ACUERDO EN SUJETARSE A LAS DECLARACIONES.
1.- Declara “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.”: Que se dedica, entre otras actividades, a la comercialización de diversos productos y servicios que, en lo sucesivo, se les denominará “Cursos, productos y servicios”.
II.- Declara el Distribuidor (1): 
a)	Que ha solicitado a “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.” ser aceptado como capacitador  y/o distribuidor independiente no exclusivo.
b)	Que realizará sus actividades como  capacitador y/o distribuidor en forma independiente, no subordinada, no exclusiva, sin perjuicio de otras actividades comerciales que ya realiza hoy en día.
c)	Que se encuentra inscrito en el padrón del Registro Federal de Contribuyentes del Servicio de Administración Tributaria, (SAT) órgano de la Secretaria de Hacienda y Crédito Público o, en su defecto, se obliga a darse de alta y proporcionar a “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.” su clave del citado Registro Federal de Contribuyentes.
d)	Que cuenta con la experiencia y elementos propios para dedicarse al comercio de los Productos y servicios materia del presente contrato y que no tiene limitación alguna para realizar actos de comercio.
e)	Que previo a la celebración del presente CONTRATO DE DISTRIBUCIÓN MERCANTIL NO EXCLUSIVO se le ha explicado el contenido de los “Productos y servicios” y la forma de su operación y desarrollo por lo que tiene conocimiento de las ventajas, oportunidades y retos que implica capacitar y difundir en forma independiente.
f)	Que está de acuerdo con los cambios que realice “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.” de la línea de Productos y servicios de capacitación, su formulación o contenido así como de lo establecido en el Manual de Políticas y Procedimientos, siendo aplicable a la presente relación contractual el último manual emitido por “La Empresa” y/o actualizado en la página web. 

Expuesto lo anterior, las partes se sujetan a las siguientes.
CLAUSULAS
1) Objeto del contrato: El presente contrato tiene por objeto regular la relación entre  ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V. dedicada a la implementación de cursos  en manejo de criptomonedas y que en cada momento se especifiquen en su web http://alliancesystemclub.com   que se integra en la red de comercialización creada por aquella, con arreglo a las condiciones expresadas en el mismo y en los anexos igualmente descritos. 
PRIMERA.- El Capacitador y/o distribuidor independiente podrá emitir información y promocionar los cursos, servicios además se le otorgarán los  bonos e incentivos previstos en las campañas y promociones, los bonos se determinarán en base a las compras directas efectuadas a “ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.”, así como por las compras de los capacitadores y/o distribuidores incorporados a su red.
SEGUNDA.- Los cursos  y servicios podrán distribuirse a nivel internacional salvo las indicaciones que la empresa determine de acuerdo a los tratados y normas internacionales que estén señaladas en el Manual de Políticas y Procedimientos.
“LA EMPRESA” no reconoce territorios o plazas de capacitación y/o distribución exclusiva de los Empresarios independientes.
TERCEERA.- En virtud de que el Capacitador cuenta con negocio propio, así como con medios comerciales y personal propias, únicamente a petición del Capacitador, ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.   Le sugerirá planes de mercadotecnia de los Productos y servicios.
CUARTA.- El derecho a ciertos beneficios de comisiones de su red de distribución, es personal, por lo tanto no podrá cederse a ninguna otra persona sin el consentimiento por escrito de ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V. 
QUINTA.- El Capacitador y/o distribuidor deberá de ser su actuar conforme al aviso de privacidad y manual de políticas y procedimientos de “LA EMPRESA”
SEXTA.- El  Capacitador y/o distribuidor deberá respetar todos los derechos de propiedad industrial y derechos de autor de ALLIANCE SYSTEM CLUB” S.A.P.I. DE C.V.  y de sus filiales. El Distribuidor no podrá utilizar el nombre comercial de “LA EMPRESA” o de sus marcas registradas, bajo las cuales se presentan comercialmente los Cursos, Productos y Servicios en ningún medio de publicidad, tarjetas de presentación, carteles, folletos, vehículos, chequeras o papelería, sin el previo consentimiento por escrito de “LA EMPRESA”, y dicho material de publicidad solo pueden ser provistos por la misma.
El Distribuidor por ningún motivo podrá reproducir total o parcialmente los materiales, manuales, cursos etc. Proporcionados por ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V. al Capacitador y/o distribuidor  por cualquier título y no podrá utilizarlos sin autorización expresa de la primera, por lo que el Empresario Independiente reconoce que no tiene derecho alguno sobre las marcas, fórmulas de los Productos y servicios, nombres comerciales, patentes, derechos  de autor que utilice “LA EMPRESA” por cuenta propia o de terceros.

El Empresario Independiente también conocido como “Capacitador y/o distribuidor” se obliga a no divulgar la información y documentación que obtenga de ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.  con motivo del presente Contrato y del ejercicio y operación al amparo del mismo, quedando prohibido divulgar cualquier tipo de información incluyendo nombres, domicilios, teléfonos  o cualquier otra información de otros Distribuidores incluyendo los de sus líneas ascendentes y descendentes a terceros ajenos a la presente relación contractual.  La presente cláusula obliga a considerar dicha información como confidencial por un término de diez años a partir de que el presente contrato se dé por terminado, cencido o rescindido por cualquier cláusula, respondiendo el Distribuidor por los daños y perjuicios que cause con la divulgación de los mismos.
SEPTIMA.-  El Empresario Independiente también conocido como  “Capacitador y/o distribuidor” por ningún motivo podrá presentarse como empleado, o atribuirse facultades de representación de ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.    Por lo que queda excluida la posibilidad de considerar al Capacitador y/o distribuidor como apoderado, mandatario o comisionista de “LA EMPRESA”. En consecuencia, ninguna de las partes tendrá obligación alguna por cuenta y nombre de la otra, ni como representante o agente de la otra. Lo anterior ya que las partes reconocen que en el presente contrato se establece una relación exclusivamente mercantil por lo que renuncian a cualquier laudo o juicio de carácter laboral que alguna de las partes tuviera la intención o promoviera el uno contra el otro o de sus empleados, directivos o representantes.
OCTAVA.- ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V. Se compromete a emitir la información y/o en línea en los medios sociales o sistema interno que la empresa determine, salvo alguna contingencia natural lo impida. 
NOVENA.- Todos los gastos que se generen por la Capacitación  y difusión de los servicios tales como pagos de impuestos, gastos de transportación, representación, comisiones, papelería, etcétera, son por cuenta única del Capacitador y/o distribuidor. 
DÉCIMA.- El distribuidor acepta que ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.      tiene el derecho a modificar en cualquier momento el Manual de Políticas y Procedimientos así como el plan de compensación. En caso de que el Capacitador y/o distribuidor no esté de acuerdo con alguna modificación tendrá derecho a dar por terminado este contrato, mediante aviso notificado a “LA EMPRESA” dentro de los 5 días naturales siguientes a su emisión, en caso de no ejercer tal derecho se considerara para todos los efectos que está de acuerdo con los cambios efectuados.
DÉCIMA PRIMERA.- El presente contrato podrá darse por vencido y terminado anticipadamente, a petición de cualquiera de las partes y en cualquier momento, mediante aviso por escrito dado con 5 días naturales de anticipación, sin responsabilidad para la parte que haya solicitado la terminación, incluyendo los beneficios de las operaciones pendientes se quedaran finalizadas. Además de lo anterior las partes acuerdan que se podrá dar por terminado el presente contrato de manera anticipada, y sin declaración judicial si:
a)	Cualquier violación a lo señalado en el presente contrato
b)	Cualquier violación a lo señalado en el Manual de Políticas y Procedimientos vigente al momento de la violación.
c)	Sea sujeto a declaración de Concurso Mercantil o embargo.
d)	Haya aportado el Capacitador y/o distribuidor datos falsos en su solicitud de inscripción, en la de algunos de sus distribuidores de línea descendiente o en general en cualquier documento relacionado con que ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.     
e)	Deje de ser Capacitador y/o distribuidor en un plazo mayor a 12 meses incurra en alguna violación a este contrato.
f)	Divulgue información o realice actividades contrarias a los intereses de y/o de otros Distribuidores y sus redes.  Actos de violencia, falsedad,  irrespetuosos, no éticos hacia la empresa o los distribuidores.   Promueva que un Distribuidor independiente se incorpore a su red cuando ya hubiere sido incorporado por otro y se sancionaran por la empresa y conforme a las leyes códigos y Procedimientos  señalados en la legislación mercantil  civil y en si caso penal federal.
DÉCIMA SEGUNDA.- Para lo no previsto en el presente contrato, las partes se sujetan al Manual de Políticas y Procedimientos, o, en su efecto, al Código de Comercio y al comité de ética de la empresa.
DÉCIMA TERCERA.- En caso de incumplimiento del Capacitador y/o distribuidor a cualquiera de sus obligaciones derivadas de este contrato o del Manual de Políticas y Procedimientos, ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.  Podrá rescindir este contrato en forma inmediata, sin necesidad de declaración judicial. 
DÉCIMA CUARTA.- El ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.  No se encuentra obligado a comprar determinados Productos o servicios, ni con determinada frecuencia, así como tampoco estará sujeto a horario alguno para la distribución de los mismos, ni estará subordinada a instrucciones u órdenes del personal dependiente de “LA EMPRESA”, ni deberá rendir cuentas de sus actividades a los mismos, excepto de aquellos que se requieran por la naturaleza del presente contrato, así mismo no tendrá un espacio físico para realizar su actividad comercial dentro de “LA EMPRESA” o sus oficinas en los países que se encuentre.
DECIMA QUINTA.- Si el Capacitador y/o distribuidor al promover la venta o el consumo de los Cursos, y si fuera el caso Productos y servicios entre sus clientes encuentra que alguno de ellos se interesa también en difundirlos, podrá presentarlo a ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.  Para que solicite ser aceptado como  Capacitador y/o distribuidor  y llene el Contrato de  Mercantil respectivo, En caso de ser aceptado, pasará a formar parte de la línea descendiente del  Capacitador y/o distribuidor y en tal virtud de los paquetes de cursos que efectúe esta persona formarán parte también del volumen base de cálculo según el plan de recompensas del Capacitador y/o distribuidor, de acuerdo a lo establecido en el  Plan de Compensación y bonos vigentes.
DÉCIMA SEXTA.- Cualquier notificación, aviso o emplazamiento que se deba efectuar al Distribuidor se podrá llevar a cabo en el domicilio o vía electrónica a través de los datos que proporciono al ser registrado en ese momento de su incorporación.
DÉCIMA SÉPTIMA.- Para todo lo relacionado con la interpretación  y complimiento del presente contrato, las partes se someten a la jurisdicción de los tribunales competentes de la ciudad de México, D.F., por lo que renuncian a cualquier fuero que con motivo de su domicilio actual o futuro, pudiera corresponderles.

                                 LA EMPRESA.   




        El ALLIANCE SYSTEM CLUB  S.A.P.I. DE C.V.                                


EL CAPACITADOR Y/O DISTRIBUIDOR INDEPENDIENTE

</textarea>
				<span class="help-block m-b-none">Para poder registrarse, usted debe aceptar que conoce y está de acuerdo con las condiciones aquí contenidas.<br>
				</span>
			</div>
			<div class="col-lg-12">
				<div class="checkbox c-checkbox">
					<label>
					<input type="checkbox" name="politica" id="politica" value="1" required>
					<span class="fa"></span>Estoy de acuerdo</label>
	        	</div>
	        	<span class="help-block m-b-none">¿Está de acuerdo?  Al marcar esta casilla, indico que conozco, he leído y acepto las cláusulas y condiciones.</span>
			
			</div>
		</div>
                     <legend>Captcha</legend>
                     <div class="form-group">
                        <div class="col-lg-12 text-center">
                           <div class="g-recaptcha" data-sitekey="6LcTSwsTAAAAAGQValz9rm6ub3IRN4DoiP8JKyyy"></div>
                        </div>
                     </div>
                     <hr>

                     <div class="form-group">
                        <div class="col-lg-12">
                           <input type="hidden" name="RegistrarUsuario" value="1">
                           <input type="hidden" name="ValCaptcha" value="">
                           <button type="submit" class="btn btn-block btn-primary mt-lg">Crear cuenta</button>
                        </div>
                     </div>
                  </form>
                                 </div>
            </div>

         </div>
      </div>
      
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?php echo site_url().'static/page_front/js/modernizr.js'?>"></script>
   <!-- JQUERY-->
   <script src="<?php echo site_url().'static/page_front/js/jquery.js'?>"></script>
   <!-- BOOTSTRAP-->
   <script src="<?php echo site_url().'static/bootstrap/js/bootstrap.js'?>"></script>
   <!-- STORAGE API-->
   <script src="<?php echo site_url().'static/page_front/js/jquery.storageapi.js'?>"></script>
   <!-- PARSLEY-->
   <script src="<?php echo site_url().'static/page_front/js/parsley.min.js'?>"></script>
   <!-- SWEET ALERT-->
   <script src="<?php echo site_url().'static/page_front/js/sweetalert.min.js'?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="app/js/app.js"></script>

   <script src='https://www.google.com/recaptcha/api.js'></script>
   <script src="<?php echo site_url().'';?>static/page_front/js/register.js"></script>
</body>
</html>