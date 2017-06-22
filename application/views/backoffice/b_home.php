<section>
    <?php 
    
//    var_dump($obj_customer);
//    die();
    ?>
    <?php
        switch ($_SESSION['customer']['franchise_id']) {
                case 2:
                    $images = "basic.jpg";
                    $text = "Basic";
                    break;
                case 3:
                    $images = "platinium.jpg";
                    $text = "Platinium";
                    break;
                case 4:
                    $images = "gold.jpg";
                    $text = "Gold";
                    break;
                case 5:
                    $images = "vip.jpg";
                    $text = "Vip";
                    break;
                case 6:
                    $text = "Membership";
                    $images = "default.jpg";
                    break;
                case 7:
                    $text = "Elite";
                    $images = "elite.jpg";
                    break;
                case 8:
                    $text = "Start";
                    $images = "start.jpg";
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
                            <p class="title"><?php if(count($obj_total)>0){echo "$".$obj_total;}else{echo "$0.00";}?></p>
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
                            <p class="title"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></p>
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
                            <img src="<?php echo site_url()."static/backoffice/images/$images";?>" alt="Paquete Actual" height="90" class="img-circle"/>
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
                        <a href="/backend/my-accounts/onecoin-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Calificación Binario")?></h5>
                                <strong><?php if($obj_customer->calification==1){echo "Calificado";}else{echo "No Calificado";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-onecoin fa-3x"></i>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/backend/my-accounts/tokens-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos de Calificación Izquierda");?></h5>
                                <strong><?php if($obj_customer->point_calification_left==0){echo "Calificado";}else{echo "No Calificado";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money-3 fa-3x"></i>
                                </div>
                            </div>
                        <span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The tokens account shows the total amount of promotional tokens available for mining.">?</span>
                        </a>
                            
                        <a href="/backend/my-accounts/cash-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos de Calificación Derecha");?></h5>
                                <strong><?php if($obj_customer->point_calification_rigth==0){echo "Calificado";}else{echo "No Calificado";}?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-euro fa-3x"></i>
                                </div>
                            </div>
                        <span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The cash account shows the available amount funds for purchases or withdrawals.">?</span>
                        </a>
                        
                        <a href="/backend/my-accounts/trading-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Puntos Izquierda</h5>
                                <strong><?php echo $points_left." "."PTS";?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-clock fa-3x"></i>
                                </div>
                            </div>
                        <span class="read-more-icon" data-tooltip data-tooltip-class="tooltip-info" title="The trading account shows how much funds you have to use for trading purchases.">?</span>
                        </a>
                        
                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Puntos Derecha</h5>
                                <strong><?php echo $points_rigth." "."PTS";?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                <h5 class="media-heading">Patrocinios Directos</h5>
                                <strong><?php echo $obj_customer->direct;?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
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
                                <i class="icon-money fa-3x"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Activación");?></h5>
                                    <strong><?php echo formato_fecha_barras($obj_customer->date_start);?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Termino");?></h5>
                                <strong><?php echo formato_fecha_barras($obj_customer->date_end);?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
                                </div>
                            </div>
                        </a>

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Fecha de Creación");?></h5>
                                <strong><?php echo formato_fecha_barras($obj_customer->created_at);?></strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
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
                                <i class="icon-money fa-3x"></i>
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
                                <i class="icon-money fa-3x"></i>
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
                                <i class="icon-money fa-3x"></i>
                                </div>
                            </div>
                        </a>    

                        <a href="/backend/my-accounts/coinsafe-account" class="col-flex box-height">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h5 class="media-heading"><?php echo replace_vocales_voculeshtml("Puntos");?></h5>
                                <strong>Pronto</strong>
                                </div>
                                <div class="media-right media-middle">
                                <i class="icon-money fa-3x"></i>
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
             
             <h5><p class="title uppercase" >Selecciona tu Paquete</p></h5>
             <div class="row fix-box-height package-box-fix mt-30">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">TOTAL PAGADO</h5>
                            <p class="title"><?php if(count($obj_total)>0){echo "$".$obj_total;}else{echo "$0.00";}?></p>
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
                            <p class="title"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></p>
                            <div class="mt-10">
                            </div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url().'static/backoffice/images/one/assets/wallet-icon.png';?>" alt="total ganado" height="90"/>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
                  <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">TOTAL PAGADO</h5>
                            <p class="title"><?php if(count($obj_total)>0){echo "$".$obj_total;}else{echo "$0.00";}?></p>
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
                            <p class="title"><?php if(count($obj_balance)>0){echo "$".$obj_balance;}else{echo "$0.00";}?></p>
                            <div class="mt-10">
                            </div>
                            </div>
                        <div class="media-right media-middle">
                            <img src="<?php echo site_url().'static/backoffice/images/one/assets/wallet-icon.png';?>" alt="total ganado" height="90"/>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

             <?php if($obj_customer->active == 0){ ?>
                    <div class="row">
                        <div role="alert" class="alert alert-info">
                                    <strong>Seleccion tu paquete:</strong>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-9">
                                    <?php 
                                    if($_SESSION['customer']['country'] == 95){ ?>
                                        <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="8" 
                                        <?php if($obj_customer->franchise_id == 8){ ?> checked="" <?php } ?> >
                                        <span class=""></span><b>START</b> $50.00 &nbsp;&nbsp;&nbsp;</label>
                                    <?php } ?>
                                    <img src="<?php echo site_url().'static/backoffice/images/basic.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="2" 
                                        <?php if($obj_customer->franchise_id == 2){ ?> checked="" <?php } ?> >
                                        <span class=""></span><b>BASIC</b> $100.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/platinium.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input type="radio" name="kit" id="kit" value="3"
                                        <?php if($obj_customer->franchise_id == 3){ ?> checked="" <?php } ?> >
                                       <span class=""></span><b>PLATINIUM</b> $250.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/gold.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="4"
                                        <?php if($obj_customer->franchise_id == 4){ ?> checked="" <?php } ?> >
                                       <span class=""></span><b>GOLD</b> $500.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/vip.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="5"
                                        <?php if($obj_customer->franchise_id == 5){ ?> checked="" <?php } ?> >        
                                       <span class=""></span><b>VIP</b> $1000.00 &nbsp;&nbsp;&nbsp;</label>
                                    <img src="<?php echo site_url().'static/backoffice/images/elite.jpg';?>" alt="" class="img-responsive img-circle thumb48" style="display: inline !important;">
                                    <label class="radio-inline">
                                        <input  type="radio" name="kit" id="kit" value="7"
                                        <?php if($obj_customer->franchise_id == 7){ ?> checked="" <?php } ?> >        
                                       <span class=""></span><b>ELITE</b> $5000.00
                                    </label>
                                    <br/><br/>
                                    <button type="button" onclick="make_pedido();" class="btn btn-sm btn-primary bg-danger-dark"><?php echo replace_vocales_voculeshtml("Hacer Pedido");?></button>
                                </div>
                          </div>
                     </div>
            <?php  } ?>
             
              <br/><br/>
            <div class="row">
              <div class="col-lg-12">
                <strong>Tu links para referir: </strong><a href="<?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?>" class="alert-link" target="_blank"><?php echo site_url().'registro/afiliate/'.str_to_minuscula($obj_customer->username);?></a><br>
                <strong>Aqui esta la dirección para pago con bitcoin:</strong><a>188EDdynmC6AWMdiHjsgM4pLF4fvX36LbN</a><br>
                <?php 
                if($obj_customer->active != "1"){ ?>
                    <strong>Para la activación debe enviar a nuestra dirección de bitcoin: </strong>
                    <a class="alert-link">
                        <?php if($obj_customer->franchise_id != 6){echo "$".number_format($obj_customer->price,2)."($obj_customer->franchise)";}
                        if($obj_customer->franchise_id == 1 || $obj_customer->franchise_id == 3 || $obj_customer->franchise_id == 4 || $obj_customer->franchise_id == 5 || $obj_customer->franchise_id == 6 || $obj_customer->franchise_id == 7){
                            echo " + $15.00 (Membership)";}?>
                    </a>
                <?php } ?>
                
                
                <br><br>
                
              </div>
            </div>
             
             
             
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
<p class="uppercase ralewaybold22px lh-1 mb-15">Frozen
Accounts</p>
<p class="">
<span class="uppercase arial14px bold">x</span> <span class="uppercase ariabold22px">1299</span>
</p>
</div>
<p class="small">
Based on statistics for the last calendar month. </p>
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-sm-8 pull-right box-height-byrow border">
<p class="uppercase ralewaybold22px">AN IMPORTANT NOTE</p>
<div class="small">
<p>Here, at OneLife we take our company&rsquo;s policy and regulations very seriously. Complying with the corporate rules ensures our mutual success and the sustainable growth of the Network. Please make sure you read the corporate Terms and Conditions and the OneLife Brandbook carefully before initiating any actions as an Independent Marketing Associate (IMA) to avoid any misconduct. All reported cases are escalated to the OneLife compliance team and ran through a case evaluation. Note, that every violation of the T&amp;C jeopardizes the entire Network&rsquo;s development and is extremely damaging to the company&rsquo;s good name and reputation. Therefore members, proven to be acting against the regulations will &nbsp;have their accounts frozen. We strongly believe in the power of the Network and encourage you to report any violation you notice at <a href="/cdn-cgi/l/email-protection#6c0f03011c00050d020f092c03020900050a09420919" target="_blank"><span class="__cf_email__" data-cfemail="54373b3924383d353a3731143b3a31383d32317a3121">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>&nbsp;Lead by example and advocate the rules among your teams, helping us to bring the number of frozen accounts to 0. Promote the healthy growth of our entire ecosystem. We rely on your cooperation and support!</p>
</div>
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