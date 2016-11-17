      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               
		<!-- START Language list-->
<!--        <div class="pull-right">
            <div class="btn-group">
                <button type="button" data-toggle="dropdown" class="btn btn-default">Spanish</button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                	<li><a href="#" class="LenguageSystem" onclick="LenguajeSystem('English');" >English</a></li><li><a href="#" class="LenguageSystem" onclick="LenguajeSystem('Spanish');" >Spanish</a></li>
                </ul>
            </div>
        </div>-->
        <!-- END Language list    -->
<!--            <div class="col-lg-3">
                <img src="../perfiles_img/logo.jpg" class="responsive" height="100px;" id="LogoClienteMill">
              </div>-->
              <div class="clearfix"></div>            
            </div>
            
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-info">
                     <div class="panel-heading">Edición del Afiliado lidermillon</div>
                     <div class="panel-body">
                        <form name="FormEditarAfiliados" method="post" action="" class="form-horizontal" data-parsley-validate>
                           <div class="col-lg-4">
                              <legend>Datos Principales</legend>

                              <div class="form-group">
                                 <label for="usuario" class="col-lg-3 control-label">Usuario</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="usuario" disabled value="lidermillon">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="email" class="col-lg-3 control-label">Email</label>
                                 <div class="col-lg-9">
                                    <input type="email" class="form-control" disabled required data-parsley-type="email" value="elizabeth_shoes@hotmail.com">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="identidad" class="col-lg-3 control-label">RFC / DNI  # de identificacion</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled required value="25565869">
                                    <input type="hidden" name="identidad_o" value="25565869">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="padre" class="col-lg-3 control-label">Patrocinador</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="padre" disabled value="etheriumglobal">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="fecha_registro" class="col-lg-3 control-label">Fecha de Registro</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" id="fecha_registro" disabled value="2016-08-07 12:04:43">
                                 </div>
                              </div>

                                                            <div class="form-group">
                                 <label for="inlineradio1" class="col-sm-3 control-label">Lado Binario</label>
                                 <div class="col-sm-9">
                                    <label class="radio-inline c-radio">
                                       <input id="inlineradio1" type="radio" name="lado_pierna" value="0" checked>
                                       <span class="fa fa-circle"></span>P. Libre</label>
                                    <label class="radio-inline c-radio">
                                       <input id="inlineradio2" type="radio" name="lado_pierna" value="1" >
                                       <span class="fa fa-circle"></span>P. Izq.</label>
                                    <label class="radio-inline c-radio">
                                       <input id="inlineradio3" type="radio" name="lado_pierna" value="2" >
                                       <span class="fa fa-circle"></span>P. Der.</label>
                                 </div>
                              </div>
                              
                              <div class="form-group">
                                 <div class="col-lg-offset-3 col-lg-9">
                                    <input type="hidden" name="GuardarEdicionAfiliado" value="">
                                    <button type="submit" class="btn btn-sm btn-primary bg-danger-dark"><em class="fa fa-save"></em> Guardar Cambios</button>
                                 </div>
                              </div>  
                           </div>

                           <div class="col-lg-4">
                              <legend>Datos Secundarios</legend>

                              <div class="form-group">
                                 <label for="nombre" class="col-lg-3 control-label">Nombre</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled placeholder="Nombre" value="Elizabeth ">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="apellido" class="col-lg-3 control-label">Apellido</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled placeholder="Apellido" value="Huidobro Torres ">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="direccion" class="col-lg-3 control-label">Direccion</label>
                                 <div class="col-lg-9">
                                    <textarea class="form-control" name="direccion" id="direccion" placeholder="Direccion">Av Guzman 513 San Juan De Miraflores</textarea>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="telefono" class="col-lg-3 control-label">Telefono</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="+51 964207734">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="cod_postal" class="col-lg-3 control-label">Codigo Postal</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" name="cod_postal" id="cod_postal" placeholder="Codigo Postal" value="lima29">
                                 </div>
                              </div>
                                       
                              <div class="form-group">
                                 <label for="pais" class="col-lg-3 control-label">Pais</label>
                                 <div class="col-lg-9">
                                    <select id="pais" class="form-control" disabled>
                                       <option value="">***Seleccione Pais***</option>
                                       
		<option value="1" >Afganistan</option>
		<option value="2" >Albania</option>
		<option value="3" >Alemania</option>
		<option value="4" >American Samoa</option>
		<option value="5" >Andorra</option>
		<option value="6" >Angola</option>
		<option value="7" >Anguila</option>
		<option value="10" >Antartida</option>
		<option value="8" >Antigua and Barbuda</option>
		<option value="9" >Antillas Holandesas</option>
		<option value="11" >Arabia Saudita</option>
		<option value="12" >Argelia</option>
		<option value="13" >Argentina</option>
		<option value="14" >Armenia</option>
		<option value="15" >Aruba</option>
		<option value="17" >Australia</option>
		<option value="18" >Austria</option>
		<option value="19" >Azerbaijan</option>
		<option value="20" >Bahamas</option>
		<option value="21" >Bahrein</option>
		<option value="22" >Bangladesh</option>
		<option value="23" >Barbados</option>
		<option value="39" >Bélgica</option>
		<option value="24" >Belice</option>
		<option value="25" >Benin</option>
		<option value="26" >Bermuda</option>
		<option value="27" >Bielorrusia</option>
		<option value="28" >Bolivia</option>
		<option value="29" >Bosnia y Herzegovina</option>
		<option value="30" >Botsuana</option>
		<option value="31" >Bouvet Island</option>
		<option value="32" >Brasil</option>
		<option value="33" >British Indian Ocean Territory</option>
		<option value="34" >Brunei Darussalam</option>
		<option value="35" >Bulgaria</option>
		<option value="36" >Burkina Faso</option>
		<option value="37" >Burundi</option>
		<option value="38" >Bután</option>
		<option value="40" >Cabo Verda</option>
		<option value="41" >Camboya</option>
		<option value="42" >Camerún</option>
		<option value="44" >Canadá</option>
		<option value="45" >Chad</option>
		<option value="46" >Chile</option>
		<option value="47" >China</option>
		<option value="48" >Chipre</option>
		<option value="49" >Colombia</option>
		<option value="50" >Comores</option>
		<option value="51" >Congo</option>
		<option value="52" >Corea del Norte</option>
		<option value="53" >Corea del Sur</option>
		<option value="54" >Costa Rica</option>
		<option value="55" >Cote D Ivoire</option>
		<option value="56" >Croacia</option>
		<option value="57" >Cuba</option>
		<option value="58" >Dinamarca</option>
		<option value="59" >Djibouti</option>
		<option value="60" >Dominica</option>
		<option value="61" >East Timor</option>
		<option value="62" >Ecuador</option>
		<option value="63" >Egipto</option>
		<option value="64" >El Salvador</option>
		<option value="65" >El Vaticano</option>
		<option value="66" >Emiratos Arabes Unidos</option>
		<option value="67" >Eritrea</option>
		<option value="68" >Eslovaquia</option>
		<option value="69" >Eslovenia</option>
		<option value="70" >España</option>
		<option value="71" >Estados Unidos</option>
		<option value="72" >Estonia</option>
		<option value="73" >Etiopí­a</option>
		<option value="74" >Fiji</option>
		<option value="75" >Filipinas</option>
		<option value="76" >Finlandia</option>
		<option value="77" >Francia</option>
		<option value="78" >French Guiana</option>
		<option value="79" >French Polynesia</option>
		<option value="80" >French Southern Territories</option>
		<option value="81" >Gabán</option>
		<option value="82" >Gambia</option>
		<option value="83" >Georgia</option>
		<option value="84" >Ghana</option>
		<option value="85" >Gibraltar</option>
		<option value="86" >Granada</option>
		<option value="87" >Grecia</option>
		<option value="88" >Groenlandia</option>
		<option value="89" >Guadalupe</option>
		<option value="90" >Guam</option>
		<option value="91" >Guatemala</option>
		<option value="92" >Guinea</option>
		<option value="93" >Guinea Ecuatorial</option>
		<option value="94" >Guinea-Bissau</option>
		<option value="95" >Guyana</option>
		<option value="96" >Haití</option>
		<option value="97" >Heard Island and McDonald Isla</option>
		<option value="98" >Holanda</option>
		<option value="99" >Honduras</option>
		<option value="100" >Hong Kong</option>
		<option value="101" >Hungrí­a</option>
		<option value="102" >India</option>
		<option value="103" >Indonesia</option>
		<option value="104" >Iraq</option>
		<option value="105" >Irlanda</option>
		<option value="106" >Isalas Cocos</option>
		<option value="107" >Isla Christmas</option>
		<option value="108" >Islandia</option>
		<option value="109" >Islas Caimán</option>
		<option value="110" >Islas Cook</option>
		<option value="111" >Islas Feroe</option>
		<option value="112" >Islas Malvinas</option>
		<option value="113" >Islas Marshall</option>
		<option value="114" >Islas Mauricio</option>
		<option value="115" >Islas SalomÃ³n</option>
		<option value="116" >Islas Sandwhich</option>
		<option value="117" >Islas Turks y Caicos</option>
		<option value="118" >Islas Wallis y Futuna</option>
		<option value="119" >Israel</option>
		<option value="120" >Italia</option>
		<option value="121" >Jamaica</option>
		<option value="122" >Japón</option>
		<option value="123" >Jordania</option>
		<option value="124" >Kazakhstán</option>
		<option value="125" >Kenia</option>
		<option value="126" >Kiribati</option>
		<option value="127" >Kuwait</option>
		<option value="128" >Kyrgyzstán</option>
		<option value="129" >Laos</option>
		<option value="130" >Latvia</option>
		<option value="131" >Lesoto</option>
		<option value="132" >Liberia</option>
		<option value="133" >Libia</option>
		<option value="134" >Liechtenstein</option>
		<option value="135" >Lituania</option>
		<option value="137" >Lí­bano</option>
		<option value="136" >Luxemburgo</option>
		<option value="138" >Macao</option>
		<option value="139" >Macedonia</option>
		<option value="140" >Madagascar</option>
		<option value="141" >Malasia</option>
		<option value="142" >Malaui</option>
		<option value="143" >Maldivas</option>
		<option value="145" >Malí</option>
		<option value="144" >Malta</option>
		<option value="146" >Marruecos</option>
		<option value="147" >Martinique</option>
		<option value="148" >Mauritania</option>
		<option value="149" >Mayotte</option>
		<option value="156" >México</option>
		<option value="150" >Micronesia</option>
		<option value="151" >Moldavia</option>
		<option value="157" >Mónaco</option>
		<option value="152" >Mongolia</option>
		<option value="153" >Montserrat</option>
		<option value="154" >Mozambique</option>
		<option value="155" >Myanmar</option>
		<option value="158" >Namibia</option>
		<option value="159" >Nauru</option>
		<option value="160" >Nepal</option>
		<option value="161" >Nicaragua</option>
		<option value="162" >Nigeria</option>
		<option value="163" >Niue</option>
		<option value="169" >Ní­ger</option>
		<option value="164" >Norfolk Island</option>
		<option value="165" >Northern Mariana Islands</option>
		<option value="166" >Noruega</option>
		<option value="167" >Nueva Caledonia</option>
		<option value="168" >Nueva Zelanda</option>
		<option value="170" >Omán</option>
		<option value="171" >Pakistán</option>
		<option value="172" >Palau</option>
		<option value="173" >Palestinian Territory</option>
		<option value="174" >Panamá</option>
		<option value="175" >Papí­a Nueva Guinea</option>
		<option value="176" >Paraguay</option>
		<option value="177" selected>Perú</option>
		<option value="178" >Pitcairn</option>
		<option value="179" >Polonia</option>
		<option value="180" >Portugal</option>
		<option value="181" >Puerto Rico</option>
		<option value="182" >Qatar</option>
		<option value="183" >Reino Unido</option>
		<option value="184" >República Centroafricana</option>
		<option value="185" >República Checa</option>
		<option value="186" >República Democrática del Con</option>
		<option value="187" >República Dominicana</option>
		<option value="188" >República Islámica de Irán</option>
		<option value="189" >Ruanda</option>
		<option value="190" >Rumania</option>
		<option value="191" >Rusian</option>
		<option value="192" >Saint Kitts and Nevis</option>
		<option value="193" >Saint Pierre y Miquelon</option>
		<option value="194" >Samoa</option>
		<option value="195" >San Marino</option>
		<option value="196" >San Vicente y Las Granadinas</option>
		<option value="197" >Santa Elena</option>
		<option value="198" >Santa Lucí­a</option>
		<option value="199" >Sao Tome and Principe</option>
		<option value="200" >Senegal</option>
		<option value="201" >Serbia y Montenegro</option>
		<option value="202" >Seychelles</option>
		<option value="203" >Sierra Leona</option>
		<option value="204" >Singapur</option>
		<option value="205" >Siria</option>
		<option value="206" >Somalí­a</option>
		<option value="207" >Sri Lanka</option>
		<option value="208" >Suazilandia</option>
		<option value="209" >Sudáfrica</option>
		<option value="210" >Sudán</option>
		<option value="211" >Suecia</option>
		<option value="212" >Suiza</option>
		<option value="213" >Surinam</option>
		<option value="214" >Svalbard and Jan Mayen</option>
		<option value="215" >Tailandia</option>
		<option value="216" >Taiwan</option>
		<option value="217" >Tajikistán</option>
		<option value="218" >Tanzania</option>
		<option value="219" >Togo</option>
		<option value="220" >Tonga</option>
		<option value="221" >Toquelau</option>
		<option value="222" >Trinidad y Tobago</option>
		<option value="226" >Túnez</option>
		<option value="223" >Turkmenistán</option>
		<option value="224" >Turquí­a</option>
		<option value="225" >Tuvalu</option>
		<option value="227" >Ucrania</option>
		<option value="228" >Uganda</option>
		<option value="229" >United States Minor Outlying I</option>
		<option value="230" >Uruguay</option>
		<option value="231" >Uzbekistan</option>
		<option value="232" >Vanuatu</option>
		<option value="233" >Venezuela</option>
		<option value="234" >Vietnam</option>
		<option value="235" >Virgin Islands British</option>
		<option value="236" >Virgin Islands U.S.</option>
		<option value="237" >Western Sahara</option>
		<option value="238" >Yemen</option>
		<option value="239" >Zaire</option>
		<option value="240" >Zambia</option>
		<option value="241" >Zimbabue</option>                                    </select>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="estado_pais" class="col-lg-3 control-label">Estado</label>
                                 <div class="col-lg-9 ajax_estado_pais">
                                    <select id="estado_pais" class="form-control" disabled>
                                       <option value="">***Seleccione Estado***</option>
                                       
		<option value="2897" >Amazonas</option>
		<option value="2898" >Ancash</option>
		<option value="2899" >Apurimac</option>
		<option value="2900" >Arequipa</option>
		<option value="2901" >Ayacucho</option>
		<option value="2902" >Cajamarca</option>
		<option value="2903" >Callao</option>
		<option value="2904" >Cusco</option>
		<option value="2905" >Huancavelica</option>
		<option value="2906" >Huanuco</option>
		<option value="2907" >Ica</option>
		<option value="2908" >Junin</option>
		<option value="2909" >La Libertad</option>
		<option value="2910" >Lambayeque</option>
		<option value="2911" selected>Lima</option>
		<option value="2912" >Loreto</option>
		<option value="2913" >Madre de Dios</option>
		<option value="2914" >Moquegua</option>
		<option value="2915" >Pasco</option>
		<option value="2916" >Piura</option>
		<option value="2917" >Puno</option>
		<option value="2918" >San Martin</option>
		<option value="2919" >Tacna</option>
		<option value="2920" >Tumbes</option>
		<option value="2921" >Ucayali</option>                                    </select>
                                    </div>
                              </div>

                              <div class="form-group">
                                 <label for="ciudad" class="col-lg-3 control-label">Ciudad</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled placeholder="Ciudad" value="San Juan de Miraflores">
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4">
                              <legend>Campos Adicionales</legend>

                              <div class="form-group">
                                 <label for="campo1" class="col-lg-3 control-label">Beneficiario</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled placeholder="Beneficiario" value="">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="campo2" class="col-lg-3 control-label">Link del monedero en ETHEREUMS</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" name="campo2" id="campo2" placeholder="Link del monedero en ETHEREUMS" value="0xa0bf92b06a005054b00d15ec6363d9ced4293508">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="campo3" class="col-lg-3 control-label">Facebook</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" name="campo3" id="campo3" placeholder="Facebook" value="">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="campo4" class="col-lg-3 control-label">Skype</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" name="campo4" id="campo4" placeholder="Skype" value="">
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="campo5" class="col-lg-3 control-label">Campo5</label>
                                 <div class="col-lg-9">
                                    <input type="text" class="form-control" disabled placeholder="Campo5" value="">
                                 </div>
                              </div>
                           </div>

                           <div class="clearfix"></div>
                        </form>
                     </div>
                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>