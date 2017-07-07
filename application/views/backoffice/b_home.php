<section>
    <?php
        switch ($_SESSION['customer']['franchise_id']) {
                case 2:
                    $images = "basic.png";
                    $text = "Basic";
                    break;
                case 3:
                    $images = "platinium.png";
                    $text = "Platinium";
                    break;
                case 4:
                    $images = "gold.png";
                    $text = "Gold";
                    break;
                case 5:
                    $images = "vip.png";
                    $text = "Vip";
                    break;
                case 6:
                    $text = "Membership";
                    $images = "default.png";
                    break;
                case 7:
                    $text = "Elite";
                    $images = "elite.png";
                    break;
                case 8:
                    $text = "Start";
                    $images = "start.png";
                    break;
            }
        ?>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">Tablero</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white"><?php echo "Precio del BITCOIN: "?><?php echo $price_btc;?></a>
        </div>
    </div> 
         <!-- Page content-->
    <div class="content-wrapper">
        <div class="row fix-box-height package-box-fix mt-30">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">TOTAL PAGADO</h5>
                            <p class="title"><?php if(count($obj_total)>0){echo "$".number_format($obj_total,'2','.',',');}else{echo "$0.00";}?></p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url().'static/backoffice/images/one/assets/money.png';?>" alt="total ganado" height="90"/>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">BALANCE POR DISPONER</h5>
                            <p class="title"><?php if(count($obj_balance)>0){echo "$".number_format($obj_balance,'2','.',',');}else{echo "$0.00";}?></p>
                            <div class="mt-10">
                            </div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url().'static/backoffice/images/one/assets/wallet-icon.png';?>" alt="Balance Por Disponer" height="90"/>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="well media media-badges box box-height">
                <div class="row">
                    <div class="col-sm-8">
                        
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">PAQUETE ACTUAL</h5>
                            <p class="title"><?php echo $text;?></p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/$images";?>" alt="Paquete Actual" height="100" width="120"/>
                        </div>
                        </div>
                    
                </div>
                </div>
            </div>
             
             
    <div class="row">
        <div class="col-sm-12 mb-25">
            <div class="panel panel-default panel-tab-box">
                <div class="panel-body">
                    <div class="flex-container fix-box-height">
                        <a href="<?php echo site_url('backoffice/binario');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Calificación Binario")?></h5>
                                <strong><?php if($obj_customer->calification==1){echo "Calificado";}else{echo "No Calificado";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-tree fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        
                        <a href="<?php echo site_url('backoffice/binario');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos de Calificación Izquierda");?></h5>
                                <strong><?php if($obj_customer->point_calification_left==0){echo "Calificado";}else{echo $obj_customer->point_calification_left." "."PTS";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i>
                                   
                                </div>
                            </div>
                        </a>
                            
                        <a href="<?php echo site_url('backoffice/binario');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos de Calificación Derecha");?></h5>
                                <strong><?php if($obj_customer->point_calification_rigth==0){echo "Calificado";}else{echo $obj_customer->point_calification_rigth." "."PTS";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-arrow-right fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        
                        <a href="<?php echo site_url('backoffice/binario');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Puntos Izquierda</h5>
                                <strong><?php echo $points_left." "."PTS";?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        
                        <a href="<?php echo site_url('backoffice/binario');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Puntos Derecha</h5>
                                <strong><?php echo $points_rigth." "."PTS";?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i>
                                    
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo site_url('backoffice/unilevel');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Patrocinios Directos</h5>
                                <strong><?php echo $obj_customer->direct;?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                         <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Tope de Ganancia</h5>
                                <strong><?php echo $max_gain." "."USD";?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="fa fa-usd fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo site_url('backoffice/misdatos');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Activación");?></h5>
                                    <strong><?php if(formato_fecha_barras($obj_customer->date_start)== '00/00/0000'){ echo "-----";}else{echo formato_fecha_barras($obj_customer->date_start);}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                   <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo site_url('backoffice/misdatos');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Termino");?></h5>
                                <strong><?php if(formato_fecha_barras($obj_customer->date_end)== '00/00/0000'){ echo "-----";}else{echo formato_fecha_barras($obj_customer->date_end);}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-stop fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo site_url('backoffice/misdatos');?>" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Creación");?></h5>
                                <strong><?php echo formato_fecha_barras($obj_customer->created_at);?></strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-area-chart fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Promoción Viaje Cusco");?></h5>
                                <strong>5,000 PTS</strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-suitcase fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha Inicio");?></h5>
                                <strong>01/06/17</strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-plane fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha Termino");?></h5>
                                <strong>30/06/17</strong>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-pause fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>    

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos de Viaje");?></h5>
                                <strong>Pronto</strong>
                                </div>
                                <div class="media-right media-middle">
                                   <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>  

                        <div class="col-flex box-height box-shadow-inset-coming-soon">
                        <div class="media">
                        <div class="media-body media-middle uppercase text-center">
                        <h3 class="media-heading"><strong>Muy Pronto</strong></h3>
                        </div>
                        <div class="media-right media-middle">
                        </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
            
            
        <?php if($obj_customer->active == 0){ ?>
            
            <div class="media-body media-middle">
             <h4 class="media-heading text-uppercase">Selecciona tu Paquete</h4>
             </div>
             <div class="row fix-box-height package-box-fix mt-30">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">BASIC</h5>
                            <p class="title">$100.00</p>
                            <p>100 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/basic.png";?>" alt="Paquete Basic" height="70" width="80"/>
                        </div>
                        </div>
                        <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('2');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">PLATINIUM</h5>
                            <p class="title">$250.00</p>
                            <p>250 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/platinium.png";?>" alt="Paquete Platinium" height="70" width="80"/>
                        </div>
                        </div>
                           <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('3');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div>                        

                    </div>
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">GOLD</h5>
                            <p class="title">$500.00</p>
                            <p>500 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/gold.png";?>" alt="Paquete Gold" height="70" width="80"/>
                        </div>
                        </div>
                        <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('4');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div> 
                    </div>
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">VIP</h5>
                            <p class="title">$1,000.00</p>
                            <p>1000 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/vip.png";?>" alt="Paquete Vip" height="70" width="80"/>
                        </div>
                        </div>
                        <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('5');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div> 
                    </div>
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">ELITE</h5>
                            <p class="title">$5,000.00</p>
                            <p>5000 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/elite.png";?>" alt="Paquete Elite" height="70" width="80"/>
                        </div>
                        </div>
                        <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('7');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div> 
                    </div>
                    <div class="col-sm-2">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">SUPER VIP</h5>
                            <p class="title">$12,000.00</p>
                            <p>12000 PTS</p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url()."static/backoffice/images/super_vip.png";?>" alt="Paquete Super Vip" height="70"  width="80"/>
                        </div>
                        </div>
                        <div class="media-body media-middle">
                            <button type="button" onclick="make_pedido('9');" class="btn btn-sm btn-primary bg-gray">Seleccionar</button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    <br/><br/>
             
    <div class="row fix-box-height-byrow">
        <div class="col-lg-12">
            <div class="well media media-badges">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 box-height-byrow text-center-md flex-items-center mb-xs-30">
                        <div class="row">
                            <div class="col-md-4 col-xs-12 pull-right-lg text-center">
                                <div class="media-middle">
                                <div class="status-frozen"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-8 col-xs-12 pull-left">
                                <div class="media-body media-middle">
                                    <div class="mb-20">
                                    <p class="uppercase ralewaybold22px lh-1 mb-15">CUENTA SELECCIONADA</p>
                                    </div>
                                    <?php
                                    switch ($obj_customer->franchise_id) {
                                        case 2: 
                                            $amount = "100 USD";?>
                                             <img src="<?php echo site_url()."static/backoffice/images/basic.png";?>" alt="Cuenta Basic" height="120" width="130"/>
                                          <?php  break;
                                        case 3: 
                                            $amount = "250 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/platinium.png";?>" alt="Cuenta Platinium" height="120" width="130"/>
                                          <?php  break;
                                        case 4: 
                                            $amount = "500 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/gold.png";?>" alt="Cuenta Gold" height="120" width="130"/>
                                        <?php break;
                                        case 5: 
                                            $amount = "1,000 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/vip.png";?>" alt="Cuenta Vip" height="120" width="130"/>
                                        <?php break;
                                        case 6: 
                                            $amount = "15 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/default.png";?>" alt="Cuenta Membership" height="120" width="130"/>
                                        <?php break;
                                        case 7: 
                                            $amount = "5,000 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/elite.png";?>" alt="Cuenta Elite" height="120" width="130"/>
                                        <?php break;
                                        case 9: 
                                            $amount = "12,000 USD"?>
                                            <img src="<?php echo site_url()."static/backoffice/images/super_vip.png";?>" alt="Cuenta Super Vip" height="120" width="130"/>
                                        <?php break; 
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="spinner"></div>
                    <div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
                        <p class="uppercase ralewaybold22px"><?php echo replace_vocales_voculeshtml("MODO DE ACTIVACIÓN");?></p>
                        <div class="small">
                            <p>Estimado usuario tiene 15 días para hacer la activación de la cuenta que ha seleccionado, de lo contrario será tomada por el sistema y no tendrá opción a recuperarla.<br><strong>1) Activación a través de bitcoin:</strong> enviar el monto de <b><a><?php echo $amount;?></a></b> a la siguiente dirección de bitcoin: 188EDdynmC6AWMdiHjsgM4pLF4fvX36LbN  enviando un mensaje de correo electrónico a accounts@yourbitshares.com indicando el usuario, el tipo de cuenta pagada y el comprobante o el código de identificación de la transacción realizada.<br><strong>2)	Activación a través de cuenta bancaria (solo Perú):</strong> enviar monto de <b><a><?php echo $amount;?></a></b> a la siguiente cuenta bancaria de Inversiones BITSHARE S.A.C.; Cuenta Corriente Dólares Interbank, <b>009-300132221-0</b> luego enviar un mensaje al correo electrónico accounts@yourbitshares.com indicando el usuario, el tipo de cuenta pagada y el comprobante del envio.
<br>La activación será hará efectiva en 24 horas luego de hacer el envió del correo a BITSHARE. 
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
      <?php  } ?>            
              
              
    <div class="row fix-box-height-byrow">
        <div class="col-lg-12">
            <div class="well media media-badges">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 box-height-byrow text-center-md flex-items-center mb-xs-30">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 pull-left">
                                <div class="media-body media-middle">
                                    <div class="mb-20">
                                    </div>
                                    <img src="<?php echo site_url()."static/backoffice/images/share.png";?>" alt="Compartir" height="140" width="180" class="text-center"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
                        <p class="uppercase ralewaybold22px"><?php echo replace_vocales_voculeshtml("LINK DE PATROCINIO");?></p>
                        <div class="small">
                            <p>Estimado usuario usted tiene un enlace para patrocinar a nuevos asociados o distribuidores a BITSHARE debajo de su organización. <br>•	Link de patrocinio: <a href="<?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?>" class="alert-link" target="_blank"><?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?></a><br>Compartiendo este enlace podrá patrocinar a más personas.<br><b><?php echo replace_vocales_voculeshtml("¿Cómo activar a sus patrocinados?")?> </b><br>•	Las activaciones para los países afuera de Perú se hacen en btc (bitcoin) y se envía el monto de la cuenta seleccionada a la siguiente dirección de bitcoin: <b>188EDdynmC6AWMdiHjsgM4pLF4fvX36LbN</b><br>•	Si se encuentran en Perú se pueden activar en btc o también con envios a la cuenta bancaria  de Inversiones BITSHARE S.A.C.; <b>Cuenta Corriente Dólares Interbank, 009-300132221-0.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div> 
              
              
    <br><br>          
    <div class="media-body media-middle">
             <h4 class="media-heading text-uppercase">NOTICIAS</h4>
    </div>          
    <br>
       <div class="row fix-box-height-byrow">
        <div class="col-lg-12">
            <div class="well media media-badges">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 box-height-byrow text-center-md flex-items-center mb-xs-30">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 pull-left">
                                <div class="media-body media-middle">
                                    <div class="mb-20">
                                    </div>
                                    <img src="<?php echo site_url()."static/assets/news/images/INVITACION_EVENTOS_2.jpg";?>" alt="invitacion evento" height="140" width="180" class="text-center"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
                        <p class="uppercase ralewaybold22px"><?php echo replace_vocales_voculeshtml("POB (PRESENTACIÓN OPORTUNIDAD BITSHARE)");?></p>
                        <div class="small">
                            <p>Ven y participa de este evento con todos tus invitados y sé parte de los pioneros de BITSHARE.<br><b>Fecha:</b> Viernes 30 de Junio<br><b>Hora:</b> Pre registro 7:30 pm , Inicio 8:00 pm<br><b>Lugar:</b> Hotel Brinatia Miraflores, Calle Independencia #211 - Miraflores<br><b>Referencia:</b> a 3 cuadras del parque kenedy, paralela a la av. pardo.<br><b>¡TE ESPERAMOS!</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    
    <div class="row fix-box-height-byrow">
        <div class="col-lg-12">
            <div class="well media media-badges">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 box-height-byrow text-center-md flex-items-center mb-xs-30">
                        <div class="row">
                            <div class="col-md-8 col-xs-12 pull-left">
                                <div class="media-body media-middle">
                                    <div class="mb-20">
                                    </div>
                                    <img src="<?php echo site_url()."static/assets/news/images/inversiones.jpg";?>" alt="inversiones" height="140" width="180" class="text-center"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
                        <p class="uppercase ralewaybold22px"><?php echo replace_vocales_voculeshtml("SEMINARIO DE INVERSIONES - CRIPTOMONEDA Y ORO");?></p>
                        <div class="small">
                            <p>Ven y participa de este seminario con todos tus invitados y capacitate en inversiones.<br><b>Fecha:</b> Viernes 30 de Junio<br><b>Hora:</b> Pre registro 6:00 pm , Inicio 6:15 pm<br><b>Lugar:</b> Hotel Brinatia Miraflores, Calle Independencia #211 - Miraflores<br><b>Referencia:</b> a 3 cuadras del parque kenedy, paralela a la av. pardo.<br><b>¡TE ESPERAMOS!</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
              
    </div>
    </div>
      </section>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>
<script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>