<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase"><?php echo replace_vocales_voculeshtml("Arbol Binario");?></h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a href="/backend/bonuses/start-up" class="white">until next bonus round.</a>
        </div>
    </div>
    <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/arbol.css';?>" id="maincss">
    
    

<!------------------------------------------->
<div id="page-content-wrapper" class="">
    <main>
        <div class="container-fluid">
            <div class="row ml-custom">
                <div class="col-xs-12">
                    <div class="col-lg-12">
                        <div class="panel panel-default network-tree-panel">
                            <div class="panel-body">
                                <div class="clearfix btn-holder">
                                    <a class="btn btn-success btn-sm pull-left" aria-label="Left Align">
                                        <span class="rotate-top-left"><i class="icon-arrows-5" aria-hidden="true"></i></span>Scroll to top
                                    </a>
                                    <a  class="btn btn-success btn-sm pull-right" aria-label="Right Align"> Go one level up
                                        <span class="rotate-top-right"><i class="icon-arrows-6 in-right" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                                
                                <!--//ESTRUCTURE TREE-->
                                    <div class="network-tree-stucture">
                                        <ul>
                                            <li>
                                                <span class="inline-block relative">
                                                    <a  href="#" title="<?php echo $obj_customer->first_name;?>" data-toggle="popover" data-placement="right" data-content="<?php if($obj_customer->active == 1){ echo "ACTIVO";?><?php }else{ echo "INACTIVO";?><?php } ?>" class="status-1 user-packet">
                                                        <div class="row imagen-profile">
                                                          <div class="col-sm" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                                <div class="div-img">
                                                                    <?php
                                                                    switch ($obj_customer->franchise_id) {
                                                                            case 2:
                                                                                $images = "basic.png";
                                                                                break;
                                                                            case 3:
                                                                                $images = "executive.png";
                                                                                break;
                                                                            case 4:
                                                                                $images = "gold.jpg";
                                                                                break;
                                                                            case 5:
                                                                                $images = "senior_executive.png";
                                                                                break;
                                                                            case 6:
                                                                                $images = "membership.png";
                                                                                break;
                                                                            case 7:
                                                                                $images = "elite.jpg";
                                                                                break;
                                                                        }
                                                                    ?>
                                                                    <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="thumb96">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                  <?php if($obj_customer->active == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                <span class="<?php echo $style;?>"></span>
                                                              </span>
                                                            </div>
                                                        </div>
                                                        <span class="user-name"><?php echo $obj_customer->username;?></span>
                                                    </a>
                                                </span>
                                                
                                        <ul class="">
                                            <!--//------2DO LEVEL LEFT------->
                                            <li>
                                                <span class="inline-block relative">
                                                    <a  href="#" title="<?php echo $n2_iz[0];?>" data-toggle="popover" data-placement="right" data-content="<?php if($n2_iz[7] == 1){ echo "ACTIVO";?><?php }else{ echo "INACTIVO";?><?php } ?>" class="status-1 user-packet">
                                                        <div class="row imagen-profile">
                                                          <div class="col-sm-2" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                                <div class="div-img">
                                                                    <?php
                                                                    switch ($n2_iz[10]) {
                                                                        case 2:
                                                                            $images = "basic.jpg";
                                                                            break;
                                                                        case 3:
                                                                            $images = "platinium.jpg";
                                                                            break;
                                                                        case 4:
                                                                            $images = "gold.jpg";
                                                                            break;
                                                                        case 5:
                                                                            $images = "vip.jpg";
                                                                            break;
                                                                        case 6:
                                                                            $images = "default.jpg";
                                                                            break;
                                                                        case 7:
                                                                            $images = "elite.jpg";
                                                                            break;
                                                                        case 8:
                                                                            $images = "start.jpg";
                                                                            break;
                                                                    }
                                                                    ?>
                                                                    <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                                <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                    <?php if($n2_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                  <span class="<?php echo $style;?>"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <span class="user-name"><?php echo $n2_iz[6];?></span>
                                                    </a>
                                                </span>
                                                <!--//------END 2DO LEVEL LEFT------->
                                            <ul class="">
                                                <!--//-----3ER LEVEL LEFT--------->
                                                <li>
                                                    <span class="inline-block relative">
                                                    <a  href="#" title="<?php echo $n3_iz[0];?>" data-toggle="popover" data-placement="right" data-content="<?php if($n3_iz[7] == 1){ echo "ACTIVO";?><?php }else{ echo "INACTIVO";?><?php } ?>" class="status-1 user-packet">
                                                        <div class="row imagen-profile">
                                                          <div class="col-sm-2" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                                <div class="div-img">
                                                                    <?php
                                                                    switch ($n3_iz[10]) {
                                                                        case 2:
                                                                            $images = "basic.jpg";
                                                                            break;
                                                                        case 3:
                                                                            $images = "platinium.jpg";
                                                                            break;
                                                                        case 4:
                                                                            $images = "gold.jpg";
                                                                            break;
                                                                        case 5:
                                                                            $images = "vip.jpg";
                                                                            break;
                                                                        case 6:
                                                                            $images = "default.jpg";
                                                                            break;
                                                                        case 7:
                                                                            $images = "elite.jpg";
                                                                            break;
                                                                        case 8:
                                                                            $images = "start.jpg";
                                                                            break;
                                                                    }
                                                                    ?>
                                                                    <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                                <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                    <?php if($n3_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                  <span class="<?php echo $style;?>"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <span class="user-name"><?php echo $n3_iz[6];?></span>
                                                    </a>
                                                    </span>
                                                            <!--//-----END 4TO LEVEL LEFT--------->
                                                    <ul class="hidden-xs">
                                                        <li>
                                                            <!--//-----4TO LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                    <a  href="#" title="<?php echo $n4_iz[0];?>" data-toggle="popover" data-placement="right" data-content="<?php if($n4_iz[7] == 1){ echo "ACTIVO";?><?php }else{ echo "INACTIVO";?><?php } ?>" class="status-1 user-packet">
                                                                        <div class="row imagen-profile">
                                                                          <div class="col-sm-2" style="padding: 0;"></div>
                                                                            <div class="col-sm-8" style="padding: 0;">
                                                                                <div class="div-img">
                                                                                    <?php
                                                                                    switch ($n4_iz[10]) {
                                                                                        case 2:
                                                                                            $images = "basic.jpg";
                                                                                            break;
                                                                                        case 3:
                                                                                            $images = "platinium.jpg";
                                                                                            break;
                                                                                        case 4:
                                                                                            $images = "gold.jpg";
                                                                                            break;
                                                                                        case 5:
                                                                                            $images = "vip.jpg";
                                                                                            break;
                                                                                        case 6:
                                                                                            $images = "default.jpg";
                                                                                            break;
                                                                                        case 7:
                                                                                            $images = "elite.jpg";
                                                                                            break;
                                                                                        case 8:
                                                                                            $images = "start.jpg";
                                                                                            break;
                                                                                    }
                                                                                    ?>
                                                                                    <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-2" style="padding: 0;">
                                                                                <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                                    <?php if($n4_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                                  <span class="<?php echo $style;?>"></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <span class="user-name"><?php echo $n4_iz[6];?></span>
                                                                    </a>
                                                                    </span>
                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                        </li>

                                                        <li>
                                                            <a href="/backend/my-network/network-tree/add-customer/kZGJivA8JCXIzbFlKU0d9eT58jbWvaFFxV%252BwoiKxXvc%253D/right" class="user-packet"></a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="/backend/my-network/network-tree/add-customer/vYIJWuF1E8n21bA2wQAqZGmPiQ%252F4m4LMdm0M796f%252BSQ%253D/right" class="user-packet"></a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="/backend/my-network/network-tree/add-customer/UngL27brPkDgI7skzmsazyaAqP6s7KqshWaNRnZHMmU%253D/right" class="user-packet"></a>
                                        </li>
                                     </ul>
                                </li>
                            </ul>
    
                        </div>
                                
                        <div class="clearfix btn-holder">
                            <a class="btn btn-success btn-sm pull-left" aria-label="Left Align" href="/backend/my-network/network-tree/first-available-position/left">
                                <i class="icon-arrows-5" aria-hidden="true"></i>
                                First available position left
                            </a>
                            <a type="button" class="btn btn-success btn-sm pull-right" aria-label="Right Align" href="/backend/my-network/network-tree/first-available-position/right">
                                First available position right
                                <i class="icon-arrows-6 in-right" aria-hidden="true"></i>
                            </a>
                        </div>
                        
                        <hr class="style-4 mb-20">
                            <div class="position-info-list">
                                <div class="frachise_elite"><span class="">Elite</span></div>
                                <div class="frachise_vip"><span class="">Vip</span></div>
                                <div class="frachise_gold"><span class="">Gold</span></div>
                                <div class="frachise_platinium"><span class="">Platinium</span></div>
                                <div class="frachise_basic"><span class="">Basic</span></div>
                                <div class="frachise_membership"><span class="">Membership</span></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </main>
</div>
            

<!---------------------------------->


    
 <!-- Page content-->
 <div class="content-wrapper">
    <div class="container-fluid">
       <!-- START DATATABLE 1 -->
       <div class="row">
                        <div role="alert" class="alert alert-info">
                                    <strong>Puntaje para calificar y binario:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Nota: 1 punto = 1 USD)
                        </div>
                        <div class="form-group">
                                <div class="col-sm-9">
                                    <?php 
                                    if($obj_customer->franchise_id != 6){
                                        if($obj_customer->point_calification_left <= 0 && $obj_customer->point_calification_rigth <= 0){ ?>
                                    <b><span class="label label-success"><?php echo replace_vocales_voculeshtml("CALIFICADO PARA BINARIO")?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                    <?php }else{ ?>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>IZQUIERDA: </b> <span class="label label-warning"><?php if($obj_customer->point_calification_left > 0){echo $obj_customer->point_calification_left;}else{echo "0";}?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>DERECHA: </b><span class="label label-warning"><?php if($obj_customer->point_calification_rigth > 0){echo $obj_customer->point_calification_rigth;}else{echo "0";}?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php } ?>
                                    <?php }else{ ?>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>IZQUIERDA: </b> <span class="label label-warning"><?php if($obj_customer->point_calification_left > 0){echo $obj_customer->point_calification_left;}else{echo "0";}?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>DERECHA: </b><span class="label label-warning"><?php if($obj_customer->point_calification_rigth > 0){echo $obj_customer->point_calification_rigth;}else{echo "0";}?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php } ?>
                                    
                                        | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>P. IZQUIERDA: </b> <span class="label label-info"><?php echo $obj_customer->point_left / 0.12;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>P. DERECHA: </b><span class="label label-info"><?php echo $obj_customer->point_rigth / 0.12;?></span> &nbsp;&nbsp;&nbsp;
                                    <br/><br/>
                                </div>
                          </div>
       </div>
       <div class="row">
           <div role="alert" class="alert alert-info"></div>
          <div class="col-lg-12">
            <div class="col-lg-12">
                
                    <span class="circle circle-success circle-lg"></span>Afiliado Activo
                    <span class="circle circle-danger circle-lg"></span>Afiliado Inactivo 
                    <a href="javascript: history.back(-1)" class="btn btn-primary btn-xs"><em class="icon-action-redo"></em>&nbsp;&nbsp;Atras</a>
                </div>
                
              
             <!--ARBOL GENEALOGICO-->
                <div class="row">
                    <div class="col-sm-12 col-lg-12" style="padding: 0;">
                        <div class="cont-arbol"><div class="tree" style="width: 1000%;">                      
                            <ul id="raiz-arbol">
                                <li id="primario">
                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                          Nombre:<?php echo $obj_customer->first_name." ".$obj_customer->last_name;?>
                                          Fecha Registro:<?php echo $obj_customer->created_at;?>
                                          Estatus:
                                          <?php if($obj_customer->active == 1){ ?>
                                                    Activo
                                                <?php }else{ ?>
                                                    Inactivo
                                                <?php } ?>
                                          
                                                    Calificación:<?php echo $obj_customer->franchise;?>
                                          Pais: <?php echo $obj_customer->pais;?>
                                          <?php 
                                          if(isset($obj_customer_parent->username)){
                                          echo "Padre:"." ".$obj_customer_parent->username;}    
                                          ?>" class="some-popover-link">
                                        
                                    <div class="row imagen-profile">
                                      <div class="col-sm-2" style="padding: 0;"></div>
                                      <div class="col-sm-8" style="padding: 0;">
                                        <div class="div-img">
                                            <?php
                                            switch ($obj_customer->franchise_id) {
                                                    case 2:
                                                        $images = "basic.jpg";
                                                        break;
                                                    case 3:
                                                        $images = "platinium.jpg";
                                                        break;
                                                    case 4:
                                                        $images = "gold.jpg";
                                                        break;
                                                    case 5:
                                                        $images = "vip.jpg";
                                                        break;
                                                    case 6:
                                                        $images = "default.jpg";
                                                        break;
                                                    case 7:
                                                        $images = "elite.jpg";
                                                        break;
                                                    case 8:
                                                        $images = "start.jpg";
                                                        break;
                                                }
                                            ?>
                                            <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                        </div>
                                      </div>
                                      <div class="col-sm-2" style="padding: 0;">
                                        <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                            <?php if($obj_customer->active == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                          <span class="<?php echo $style;?>"></span>
                                        </span>
                                      </div>
                                    </div>
                                        <a><?php echo $obj_customer->username;?></a>
                                    </nodo>
                                
    <!------------------------------------------------------------->                            
    <!------------------------2NIVEL IZQUIERDA----------------------->
    <!-------------------------------------------------------------> 
                            <ul>
                                <li>
                                    <?php if(isset($n2_iz)){ ?>
                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                      Nombre:<?php echo $n2_iz[0]." ".$n2_iz[1];?>
                                      Fecha Registro:<?php echo $n2_iz[3];?>
                                      Estatus:
                                      <?php if($n2_iz[7] == 1){ ?>
                                                Activo
                                            <?php }else{ ?>
                                                Inactivo
                                            <?php } ?>

                                                Calificación:<?php echo $n2_iz[8];?>
                                      <?php 
                                      if(isset($obj_customer_parent->username)){
                                      echo "Padre:"." ".$obj_customer_parent->username;}    
                                      ?>" class="some-popover-link">

                                    <div class="row imagen-profile">
                                      <div class="col-sm-2" style="padding: 0;"></div>
                                      <div class="col-sm-8" style="padding: 0;">
                                        <div class="div-img">
                                            <?php
                                            switch ($n2_iz[10]) {
                                                    case 2:
                                                        $images = "basic.jpg";
                                                        break;
                                                    case 3:
                                                        $images = "platinium.jpg";
                                                        break;
                                                    case 4:
                                                        $images = "gold.jpg";
                                                        break;
                                                    case 5:
                                                        $images = "vip.jpg";
                                                        break;
                                                    case 6:
                                                        $images = "default.jpg";
                                                        break;
                                                    case 7:
                                                        $images = "elite.jpg";
                                                        break;
                                                    case 8:
                                                        $images = "start.jpg";
                                                        break;
                                                }
                                            ?>
                                            <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                        </div>
                                      </div>
                                      <div class="col-sm-2" style="padding: 0;">
                                        <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                            <?php if($n2_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                          <span class="<?php echo $style;?>"></span>
                                        </span>
                                      </div>
                                    </div>
                                        <a href="<?php echo site_url().'backoffice/binario/'.$n2_iz[2];?>"><?php echo $n2_iz[6];?></a>
                                    </nodo> 
                                        <?php } ?>
                                 <!--3NIVEL IZQUIERDA-->
                                 
                                 <?php if(isset($n3_iz)){ ?>
                                       <ul>
                                        <li>
                                            <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                Nombre:<?php echo $n3_iz[0]." ".$n3_iz[1];?>
                                                Fecha Registro:<?php echo $n3_iz[3];?>
                                                Estatus:
                                                <?php if($n3_iz[7] == 1){ ?>
                                                          Activo
                                                      <?php }else{ ?>
                                                          Inactivo
                                                      <?php } ?>
                                                          Calificación:<?php echo $n3_iz[8];?>
                                                " class="some-popover-link">

                                              <div class="row imagen-profile">
                                                <div class="col-sm-2" style="padding: 0;"></div>
                                                <div class="col-sm-8" style="padding: 0;">
                                                  <div class="div-img">
                                                      <?php
                                                        switch ($n3_iz[10]) {
                                                                case 2:
                                                                    $images = "basic.jpg";
                                                                    break;
                                                                case 3:
                                                                    $images = "platinium.jpg";
                                                                    break;
                                                                case 4:
                                                                    $images = "gold.jpg";
                                                                    break;
                                                                case 5:
                                                                    $images = "vip.jpg";
                                                                    break;
                                                                case 6:
                                                                    $images = "default.jpg";
                                                                    break;
                                                                case 7:
                                                                    $images = "elite.jpg";
                                                                    break;
                                                                case 8:
                                                                    $images = "start.jpg";
                                                                    break;
                                                            }
                                                        ?>
                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                  </div>
                                                </div>
                                                <div class="col-sm-2" style="padding: 0;">
                                                  <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                     <?php if($n3_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                    <span class="<?php echo $style;?>"></span>
                                                  </span>
                                                </div>
                                              </div>
                                                  <a href="<?php echo site_url().'backoffice/binario/'.$n3_iz[2];?>"><?php echo $n3_iz[6];?></a>
                                        </nodo>
                                        <!--4NIVEL IZQUIERDA-->
                                        
                                            <ul>
                                                <li>
                                                   <?php if(isset($n4_iz)){ ?>
                                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                            Nombre:<?php echo $n4_iz[0]." ".$n4_iz[1];?>
                                                            Fecha Registro:<?php echo $n4_iz[3];?>
                                                            Estatus:
                                                            <?php if($n4_iz[7] == 1){ ?>
                                                                      Activo
                                                                  <?php }else{ ?>
                                                                      Inactivo
                                                                  <?php } ?>
                                                                      Calificación:<?php echo $n4_iz[8];?>
                                                            " class="some-popover-link">

                                                          <div class="row imagen-profile">
                                                            <div class="col-sm-2" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                              <div class="div-img">
                                                                  <?php
                                                                        switch ($n4_iz[10]) {
                                                                                case 2:
                                                                                    $images = "basic.jpg";
                                                                                    break;
                                                                                case 3:
                                                                                    $images = "platinium.jpg";
                                                                                    break;
                                                                                case 4:
                                                                                    $images = "gold.jpg";
                                                                                    break;
                                                                                case 5:
                                                                                    $images = "vip.jpg";
                                                                                    break;
                                                                                case 6:
                                                                                    $images = "default.jpg";
                                                                                    break;
                                                                                case 7:
                                                                                    $images = "elite.jpg";
                                                                                    break;
                                                                                case 8:
                                                                                    $images = "start.jpg";
                                                                                    break;
                                                                            }
                                                                        ?>
                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                <?php if($n4_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                <span class="<?php echo $style;?>"></span>
                                                              </span>
                                                            </div>
                                                          </div>
                                                              <a href="<?php echo site_url().'backoffice/binario/'.$n4_iz[2];?>"><?php echo $n4_iz[6];?></a>
                                                    </nodo>
                                                <?php } ?>
                                                </li>
                                                <!--4_2NIVEL IZQUIERDA-->
                                                            <li>
                                                                <?php if(isset($n4_2_iz)){ ?>
                                                                <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                                        Nombre:<?php echo $n4_2_iz[0]." ".$n4_2_iz[1];?>
                                                                        Fecha Registro:<?php echo $n4_2_iz[3];?>
                                                                        Estatus:
                                                                        <?php if($n4_2_iz[7] == 1){ ?>
                                                                                  Activo
                                                                              <?php }else{ ?>
                                                                                  Inactivo
                                                                              <?php } ?>
                                                                                  Calificación:<?php echo $n4_2_iz[8];?>
                                                                        " class="some-popover-link">

                                                                      <div class="row imagen-profile">
                                                                        <div class="col-sm-2" style="padding: 0;"></div>
                                                                        <div class="col-sm-8" style="padding: 0;">
                                                                          <div class="div-img">
                                                                              <?php
                                                                                switch ($n4_2_iz[10]) {
                                                                                        case 2:
                                                                                            $images = "basic.jpg";
                                                                                            break;
                                                                                        case 3:
                                                                                            $images = "platinium.jpg";
                                                                                            break;
                                                                                        case 4:
                                                                                            $images = "gold.jpg";
                                                                                            break;
                                                                                        case 5:
                                                                                            $images = "vip.jpg";
                                                                                            break;
                                                                                        case 6:
                                                                                            $images = "default.jpg";
                                                                                            break;
                                                                                        case 7:
                                                                                            $images = "elite.jpg";
                                                                                            break;
                                                                                        case 8:
                                                                                            $images = "start.jpg";
                                                                                            break;
                                                                                    }
                                                                                ?>
                                                                         <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-sm-2" style="padding: 0;">
                                                                          <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                            <?php if($n4_2_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                                 <span class="<?php echo $style;?>"></span>
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                          <a href="<?php echo site_url().'backoffice/binario/'.$n4_2_iz[2];?>"><?php echo $n4_2_iz[6];?></a>
                                                                </nodo>
                                                            <?php }?>
                                                            </li>
                                            </ul>
                                        </li>
                                        <!--3NIVEL IZQUIERDA-->
                                        <li>
                                            <?php if(isset($n3_2_iz[0])){?>
                                                <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                        Nombre:<?php echo $n3_2_iz[0]." ".$n3_2_iz[1];?>
                                                        Fecha Registro:<?php echo $n3_2_iz[3];?>
                                                        Estatus:
                                                        <?php if($n3_2_iz[7] == 1){ ?>
                                                                      Activo
                                                                  <?php }else{ ?>
                                                                      Inactivo
                                                                  <?php } ?>
                                                                      Calificación:<?php echo $n3_2_iz[8];?>
                                                        " class="some-popover-link">

                                                      <div class="row imagen-profile">
                                                        <div class="col-sm-2" style="padding: 0;"></div>
                                                        <div class="col-sm-8" style="padding: 0;">
                                                          <div class="div-img">
                                                              <?php
                                                                                switch ($n3_2_iz[10]) {
                                                                                        case 2:
                                                                                            $images = "basic.jpg";
                                                                                            break;
                                                                                        case 3:
                                                                                            $images = "platinium.jpg";
                                                                                            break;
                                                                                        case 4:
                                                                                            $images = "gold.jpg";
                                                                                            break;
                                                                                        case 5:
                                                                                            $images = "vip.jpg";
                                                                                            break;
                                                                                        case 6:
                                                                                            $images = "default.jpg";
                                                                                            break;
                                                                                        case 7:
                                                                                            $images = "elite.jpg";
                                                                                            break;
                                                                                        case 8:
                                                                                            $images = "start.jpg";
                                                                                            break;
                                                                                    }
                                                                                ?>
                                                                         <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding: 0;">
                                                          <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                            <?php if($n3_2_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                    <span class="<?php echo $style;?>"></span>
                                                          </span>
                                                        </div>
                                                      </div>
                                                          <a href="<?php echo site_url().'backoffice/binario/'.$n3_2_iz[2];?>"><?php echo $n3_2_iz[6];?></a>
                                                </nodo> 
                                                <ul>
                                                    <!--3_3NIVEL IZQUIERDA-->
                                                            <li>
                                                                <?php if(isset($n4_3_iz)){?> 
                                                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                                        Nombre:<?php echo $n4_3_iz[0]." ".$n4_3_iz[1];?>
                                                                        Fecha Registro:<?php echo $n4_3_iz[3];?>
                                                                        Estatus:
                                                                        <?php if($n4_3_iz[7] == 1){ ?>
                                                                                  Activo
                                                                              <?php }else{ ?>
                                                                                  Inactivo
                                                                              <?php } ?>
                                                                                  Calificación:<?php echo $n4_3_iz[8];?>
                                                                        " class="some-popover-link">

                                                                      <div class="row imagen-profile">
                                                                        <div class="col-sm-2" style="padding: 0;"></div>
                                                                        <div class="col-sm-8" style="padding: 0;">
                                                                          <div class="div-img">
                                                                              <?php
                                                                                switch ($n4_3_iz[10]) {
                                                                                        case 2:
                                                                                            $images = "basic.jpg";
                                                                                            break;
                                                                                        case 3:
                                                                                            $images = "platinium.jpg";
                                                                                            break;
                                                                                        case 4:
                                                                                            $images = "gold.jpg";
                                                                                            break;
                                                                                        case 5:
                                                                                            $images = "vip.jpg";
                                                                                            break;
                                                                                        case 6:
                                                                                            $images = "default.jpg";
                                                                                            break;
                                                                                        case 7:
                                                                                            $images = "elite.jpg";
                                                                                            break;
                                                                                        case 8:
                                                                                            $images = "start.jpg";
                                                                                            break;
                                                                                    }
                                                                                ?>
                                                                         <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-sm-2" style="padding: 0;">
                                                                          <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                            <?php if($n4_3_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                                    <span class="<?php echo $style;?>"></span>
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                          <a href="<?php echo site_url().'backoffice/binario/'.$n4_3_iz[2];?>"><?php echo $n4_3_iz[6];?></a>
                                                                    </nodo> 
                                                                <?php } ?>
                                                                </li>
                                                  
                                                       
                                                    <!--3_4NIVEL IZQUIERDA-->
                                                        <li>
                                                            <?php if(isset($n4_4_iz)){?>
                                                                 <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                                    Nombre:<?php echo $n4_4_iz[0]." ".$n4_4_iz[1];?>
                                                                    Fecha Registro:<?php echo $n4_4_iz[3];?>
                                                                    Estatus:
                                                                    <?php if($n4_4_iz[7] == 1){ ?>
                                                                              Activo
                                                                          <?php }else{ ?>
                                                                              Inactivo
                                                                          <?php } ?>
                                                                              Calificación:<?php echo $n4_4_iz[8];?>
                                                                    " class="some-popover-link">

                                                                  <div class="row imagen-profile">
                                                                    <div class="col-sm-2" style="padding: 0;"></div>
                                                                    <div class="col-sm-8" style="padding: 0;">
                                                                      <div class="div-img">
                                                                          <?php
                                                                                switch ($n4_4_iz[10]) {
                                                                                        case 2:
                                                                                            $images = "basic.jpg";
                                                                                            break;
                                                                                        case 3:
                                                                                            $images = "platinium.jpg";
                                                                                            break;
                                                                                        case 4:
                                                                                            $images = "gold.jpg";
                                                                                            break;
                                                                                        case 5:
                                                                                            $images = "vip.jpg";
                                                                                            break;
                                                                                        case 6:
                                                                                            $images = "default.jpg";
                                                                                            break;
                                                                                        case 7:
                                                                                            $images = "elite.jpg";
                                                                                            break;
                                                                                        case 8:
                                                                                            $images = "start.jpg";
                                                                                            break;
                                                                                    }
                                                                                ?>
                                                                         <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-sm-2" style="padding: 0;">
                                                                      <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                        <?php if($n4_4_iz[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                            <span class="<?php echo $style;?>"></span>
                                                                      </span>
                                                                    </div>
                                                                  </div>
                                                                      <a href="<?php echo site_url().'backoffice/binario/'.$n4_4_iz[2];?>"><?php echo $n4_4_iz[6];?></a>
                                                                </nodo> 
                                                            <?php } ?>
                                                            </li> 
                                                    
                                                </ul>
                                            <?php } ?>        
                                       </li>
                                        
                                    </ul>
                                 <?php } ?>
                                </li>
    <!------------------------------------------------------------->                            
    <!------------------------2NIVEL DERECHA----------------------->
    <!------------------------------------------------------------->
                                <li>
                                    <?php if(isset($n2_de[0])){ ?>
                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                            Nombre:<?php echo $n2_de[0]." ".$n2_de[1];?>
                                            Fecha Registro:<?php echo $n2_de[3];?>
                                            Estatus:
                                            <?php if($n2_de[7] == 1){ ?>
                                                      Activo
                                                  <?php }else{ ?>
                                                      Inactivo
                                                  <?php } ?>

                                                      Calificación:<?php echo $n2_de[8];?>
                                            " class="some-popover-link">

                                          <div class="row imagen-profile">
                                            <div class="col-sm-2" style="padding: 0;"></div>
                                            <div class="col-sm-8" style="padding: 0;">
                                              <div class="div-img">
                                                  <?php
                                                        switch ($n2_de[10]) {
                                                                case 2:
                                                                    $images = "basic.jpg";
                                                                    break;
                                                                case 3:
                                                                    $images = "platinium.jpg";
                                                                    break;
                                                                case 4:
                                                                    $images = "gold.jpg";
                                                                    break;
                                                                case 5:
                                                                    $images = "vip.jpg";
                                                                    break;
                                                                case 6:
                                                                    $images = "default.jpg";
                                                                    break;
                                                                case 7:
                                                                    $images = "elite.jpg";
                                                                    break;
                                                                case 8:
                                                                    $images = "start.jpg";
                                                                    break;
                                                            }
                                                        ?>
                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                              </div>
                                            </div>
                                            <div class="col-sm-2" style="padding: 0;">
                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                <?php if($n2_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                    <span class="<?php echo $style;?>"></span>
                                              </span>
                                            </div>
                                          </div>
                                              <a href="<?php echo site_url().'backoffice/binario/'.$n2_de[2];?>"><?php echo $n2_de[6];?></a>
                                    </nodo>
                                    <ul>
                                        <!--3_2NIVEL IZQUIERDA-->
                                         <li>
                                             <?php if(isset($n3_2_de)){?>
                                               <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                    Nombre:<?php echo $n3_2_de[0]." ".$n3_2_de[1];?>
                                                    Fecha Registro:<?php echo $n3_2_de[3];?>
                                                    Estatus:
                                                    <?php if($n3_2_de[7] == 1){ ?>
                                                              Activo
                                                          <?php }else{ ?>
                                                              Inactivo
                                                          <?php } ?>

                                                              Calificación:<?php echo $n3_2_de[8];?>
                                                    " class="some-popover-link">
                                                        <div class="row imagen-profile">
                                                          <div class="col-sm-2" style="padding: 0;"></div>
                                                          <div class="col-sm-8" style="padding: 0;">
                                                            <div class="div-img">
                                                                <?php
                                                        switch ($n3_2_de[10]) {
                                                                case 2:
                                                                    $images = "basic.jpg";
                                                                    break;
                                                                case 3:
                                                                    $images = "platinium.jpg";
                                                                    break;
                                                                case 4:
                                                                    $images = "gold.jpg";
                                                                    break;
                                                                case 5:
                                                                    $images = "vip.jpg";
                                                                    break;
                                                                case 6:
                                                                    $images = "default.jpg";
                                                                    break;
                                                                case 7:
                                                                    $images = "elite.jpg";
                                                                    break;
                                                                case 8:
                                                                    $images = "start.jpg";
                                                                    break;
                                                            }
                                                        ?>
                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                            </div>
                                                          </div>
                                                          <div class="col-sm-2" style="padding: 0;">
                                                            <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                              <?php if($n3_2_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                    <span class="<?php echo $style;?>"></span>
                                                            </span>
                                                          </div>
                                                        </div>
                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n3_2_de[2];?>"><?php echo $n3_2_de[6];?></a>
                                                    </nodo>
                                                        <!--4_4NIVEL DERECHA-->
                                                        <ul>
                                                            <li>
                                                                <?php if(isset($n4_4_de)){ ?>
                                                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                                            Nombre:<?php echo $n4_4_de[0]." ".$n4_4_de[1];?>
                                                                            Fecha Registro:<?php echo $n4_4_de[3];?>
                                                                            Estatus:
                                                                             <?php if($n4_4_de[7] == 1){ ?>
                                                                                Activo
                                                                            <?php }else{ ?>
                                                                                Inactivo
                                                                            <?php } ?>
                                                                            Calificación:<?php echo $n4_4_de[8];?>
                                                                            " class="some-popover-link">

                                                                          <div class="row imagen-profile">
                                                                            <div class="col-sm-2" style="padding: 0;"></div>
                                                                            <div class="col-sm-8" style="padding: 0;">
                                                                              <div class="div-img">
                                                                                   <?php
                                                                                        switch ($n4_4_de[10]) {
                                                                                                case 2:
                                                                                                    $images = "basic.jpg";
                                                                                                    break;
                                                                                                case 3:
                                                                                                    $images = "platinium.jpg";
                                                                                                    break;
                                                                                                case 4:
                                                                                                    $images = "gold.jpg";
                                                                                                    break;
                                                                                                case 5:
                                                                                                    $images = "vip.jpg";
                                                                                                    break;
                                                                                                case 6:
                                                                                                    $images = "default.jpg";
                                                                                                    break;
                                                                                                case 7:
                                                                                                    $images = "elite.jpg";
                                                                                                    break;
                                                                                                case 8:
                                                                                                    $images = "start.jpg";
                                                                                                    break;
                                                                                            }
                                                                                        ?>
                                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-sm-2" style="padding: 0;">
                                                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                                <?php if($n4_4_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                                    <span class="<?php echo $style;?>"></span>
                                                                              </span>
                                                                            </div>
                                                                          </div>
                                                                              <a href="<?php echo site_url().'backoffice/binario/'.$n4_4_de[2];?>"><?php echo $n4_4_de[6];?></a>
                                                                    </nodo>
                                                                <?php } ?>
                                                            </li>
                                                            
                                                            
                                                            <!--4_3_NIVEL DERECHA-->
                                                            <li>
                                                                 <?php if(isset($n4_3_de)){ ?>
                                                                        <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                                                    Nombre:<?php echo $n4_3_de[0]." ".$n4_3_de[1];?>
                                                                                    Fecha Registro:<?php echo $n4_3_de[3];?>
                                                                                    Estatus:
                                                                                    <?php if($n4_3_de[7] == 1){ ?>
                                                                                        Activo
                                                                                    <?php }else{ ?>
                                                                                        Inactivo
                                                                                    <?php } ?>
                                                                                    Calificación:<?php echo $n4_3_de[8];?>
                                                                                    " class="some-popover-link">

                                                                                  <div class="row imagen-profile">
                                                                                    <div class="col-sm-2" style="padding: 0;"></div>
                                                                                    <div class="col-sm-8" style="padding: 0;">
                                                                                      <div class="div-img">
                                                                                           <?php
                                                                                        switch ($n4_3_de[10]) {
                                                                                                case 2:
                                                                                                    $images = "basic.jpg";
                                                                                                    break;
                                                                                                case 3:
                                                                                                    $images = "platinium.jpg";
                                                                                                    break;
                                                                                                case 4:
                                                                                                    $images = "gold.jpg";
                                                                                                    break;
                                                                                                case 5:
                                                                                                    $images = "vip.jpg";
                                                                                                    break;
                                                                                                case 6:
                                                                                                    $images = "default.jpg";
                                                                                                    break;
                                                                                                case 7:
                                                                                                    $images = "elite.jpg";
                                                                                                    break;
                                                                                                case 8:
                                                                                                    $images = "start.jpg";
                                                                                                    break;
                                                                                            }
                                                                                        ?>
                                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                                                      </div>
                                                                                    </div>
                                                                                    <div class="col-sm-2" style="padding: 0;">
                                                                                      <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                                        <?php if($n4_3_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                                                <span class="<?php echo $style;?>"></span>
                                                                                      </span>
                                                                                    </div>
                                                                                  </div>
                                                                                      <a href="<?php echo site_url().'backoffice/binario/'.$n4_3_de[2];?>"><?php echo $n4_3_de[6];?></a>
                                                                            </nodo>
                                                                        <?php } ?>
                                                                    </li>
                                                            
                                                        </ul>
                                         <?php } ?>
                                         </li>
                                         
                                         <!--3NIVEL DERECHA-->
                                         <li>
                                            <?php if(isset($n3_de)){?>
                                                  <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                        Nombre:<?php echo $n3_de[0]." ".$n3_de[1];?>
                                                        Fecha Registro:<?php echo $n3_de[3];?>
                                                        Estatus:
                                                        <?php if($n3_de[7] == 1){ ?>
                                                                  Activo
                                                              <?php }else{ ?>
                                                                  Inactivo
                                                              <?php } ?>

                                                                  Calificación:<?php echo $n3_de[8];?>
                                                        " class="some-popover-link">

                                                      <div class="row imagen-profile">
                                                        <div class="col-sm-2" style="padding: 0;"></div>
                                                        <div class="col-sm-8" style="padding: 0;">
                                                          <div class="div-img">
                                                              <?php
                                                                                        switch ($n3_de[10]) {
                                                                                                case 2:
                                                                                                    $images = "basic.jpg";
                                                                                                    break;
                                                                                                case 3:
                                                                                                    $images = "platinium.jpg";
                                                                                                    break;
                                                                                                case 4:
                                                                                                    $images = "gold.jpg";
                                                                                                    break;
                                                                                                case 5:
                                                                                                    $images = "vip.jpg";
                                                                                                    break;
                                                                                                case 6:
                                                                                                    $images = "default.jpg";
                                                                                                    break;
                                                                                                case 7:
                                                                                                    $images = "elite.jpg";
                                                                                                    break;
                                                                                                case 8:
                                                                                                    $images = "start.jpg";
                                                                                                    break;
                                                                                            }
                                                                                        ?>
                                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                          </div>
                                                        </div>
                                                        <div class="col-sm-2" style="padding: 0;">
                                                          <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                            <?php if($n3_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                <span class="<?php echo $style;?>"></span>
                                                          </span>
                                                        </div>
                                                      </div>
                                                          <a href="<?php echo site_url().'backoffice/binario/'.$n3_de[2];?>"><?php echo $n3_de[6];?></a>
                                                </nodo>                                        
                                        <ul>
                                            <!--4NIVEL DERECHA-->
                                            <li>
                                                <?php  if(isset($n4_2_de)){?>  
                                                    <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                            Nombre:<?php echo $n4_2_de[0]." ".$n4_2_de[1];?>
                                                            Fecha Registro:<?php echo $n4_2_de[3];?>
                                                            Estatus:
                                                            <?php if($n4_2_de[7] == 1){ ?>
                                                                      Activo
                                                                  <?php }else{ ?>
                                                                      Inactivo
                                                                  <?php } ?>
                                                                      Calificación:<?php echo $n4_2_de[8];?>
                                                            " class="some-popover-link">

                                                          <div class="row imagen-profile">
                                                            <div class="col-sm-2" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                              <div class="div-img">
                                                                   <?php
                                                                                        switch ($n4_2_de[10]) {
                                                                                                case 2:
                                                                                                    $images = "basic.jpg";
                                                                                                    break;
                                                                                                case 3:
                                                                                                    $images = "platinium.jpg";
                                                                                                    break;
                                                                                                case 4:
                                                                                                    $images = "gold.jpg";
                                                                                                    break;
                                                                                                case 5:
                                                                                                    $images = "vip.jpg";
                                                                                                    break;
                                                                                                case 6:
                                                                                                    $images = "default.jpg";
                                                                                                    break;
                                                                                                case 7:
                                                                                                    $images = "elite.jpg";
                                                                                                    break;
                                                                                                case 8:
                                                                                                    $images = "start.jpg";
                                                                                                    break;
                                                                                            }
                                                                                        ?>
                                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                <?php if($n4_2_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                        <span class="<?php echo $style;?>"></span>
                                                              </span>
                                                            </div>
                                                          </div>
                                                              <a href="<?php echo site_url().'backoffice/binario/'.$n4_2_de[2];?>"><?php echo $n4_2_de[6];?></a>
                                                    </nodo>
                                                <?php } ?>
                                            </li>  
                                            
                                               <!--4_2NIVEL DERECHA--> 
                                               <?php 
                                               if(isset($n4_de)){?>
                                                  <li>
                                                        <nodo href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                            Nombre:<?php echo $n4_de[0]." ".$n4_de[1];?>
                                                            Fecha Registro:<?php echo $n4_de[3];?>
                                                            Estatus:
                                                            <?php if($n4_de[7] == 1){ ?>
                                                                      Activo
                                                                  <?php }else{ ?>
                                                                      Inactivo
                                                                  <?php } ?>

                                                                      Calificación:<?php echo $n4_de[8];?>
                                                            " class="some-popover-link">

                                                          <div class="row imagen-profile">
                                                            <div class="col-sm-2" style="padding: 0;"></div>
                                                            <div class="col-sm-8" style="padding: 0;">
                                                              <div class="div-img">
                                                                  <?php
                                                                                        switch ($n4_de[10]) {
                                                                                                case 2:
                                                                                                    $images = "basic.jpg";
                                                                                                    break;
                                                                                                case 3:
                                                                                                    $images = "platinium.jpg";
                                                                                                    break;
                                                                                                case 4:
                                                                                                    $images = "gold.jpg";
                                                                                                    break;
                                                                                                case 5:
                                                                                                    $images = "vip.jpg";
                                                                                                    break;
                                                                                                case 6:
                                                                                                    $images = "default.jpg";
                                                                                                    break;
                                                                                                case 7:
                                                                                                    $images = "elite.jpg";
                                                                                                    break;
                                                                                                case 8:
                                                                                                    $images = "start.jpg";
                                                                                                    break;
                                                                                            }
                                                                                        ?>
                                                                                 <img src="<?php echo site_url().'static/backoffice/images/'."$images";?>" alt="" class="img-responsive img-circle thumb48">
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-2" style="padding: 0;">
                                                              <span class="pull-right"style="padding-right: 5px; padding-top: 5px;" >
                                                                <?php if($n4_de[7] == 1 ){$style = 'circle circle-success circle-lg';}else{$style = 'circle circle-danger circle-lg';}?>
                                                                        <span class="<?php echo $style;?>"></span>
                                                              </span>
                                                            </div>
                                                          </div>
                                                              <a href="<?php echo site_url().'backoffice/binario/'.$n4_de[2];?>"><?php echo $n4_de[6];?></a>
                                                        </nodo>  
                                                    </li> 
                                              <?php } ?>
                                                
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                  <?php } ?> 
                                </li>
                            </ul>
                               <?php //} ?>
            </li>
          </ul>
          <br>
          </div>
        </div>
    </div>
</div>                     <!--ARBOL GENEALOGICO END-->   
          </div>
       </div>
       <!-- END DATATABLE 1 -->
    </div>
 </div>
</section>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="popover"]').popover({ html : true });
$('.btn').popover({title: "<h1><strong>HTML</strong> inside <code>the</code> <em>popover</em></h1>", content: "Blabla <br> <h2>Cool stuff!</h2>", html: true, placement: "right"}); 
});
</script>