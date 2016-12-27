<section>
    <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/arbol.css';?>" id="maincss">
 <!-- Page content-->
 <div class="content-wrapper">
    <div class="content-heading">
              <div class="pull-right text-danger">
                Bitcoin: $737.00000000              
              </div>
                              <div class="col-lg-3">
                <img src="<?php echo site_url().'static/backoffice/images/logo-btc2.png';?>" class="responsive" height="100px;" id="LogoClienteMill">
              </div>
              <div class="clearfix"></div>           
            </div>
     <h3>Árbol Genealógico Binario</h3>
                    
    <div class="container-fluid">
       <!-- START DATATABLE 1 -->
       <div class="row">
                        <div role="alert" class="alert alert-info">
                                    <strong>Puntaje para calificar y binario:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Nota: 1 punto = 1 USD)
                        </div>
                        <div class="form-group">
                                <div class="col-sm-9">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>IZQUIERDA: </b> <span class="label label-warning"><?php echo $obj_customer->point_calification_left;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>DERECHA: </b><span class="label label-warning"><?php echo $obj_customer->point_calification_rigth;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>P. IZQUIERDA: </b> <span class="label label-info"><?php echo $obj_customer->point_left / 0.12;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>P. DERECHA: </b><span class="label label-info"><?php echo $obj_customer->point_rigth / 0.12;?></span> &nbsp;&nbsp;&nbsp;
                                        | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>$. IZQUIERDA : </b> <span class="label label-inverse"><?php echo $obj_customer->point_left;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <b>$. DERECHA : </b><span class="label label-inverse"><?php echo $obj_customer->point_rigth;?></span> &nbsp;&nbsp;&nbsp;
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
                                        <?php if(isset($n4_iz)){ ?>
                                                <ul>
                                                <li>
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
                                                </li>
                                                <!--4_2NIVEL IZQUIERDA-->
                                                <?php if(isset($n4_2_iz)){ ?>
                                                            <li>
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
                                                            </li>
                                                <?php }?>
                                            </ul>
                                        <?php } ?>
                                        </li>
                                        <!--3NIVEL IZQUIERDA-->
                                        <?php if(isset($n3_2_iz[0])){?>
                                        <li>
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
                                                  <?php if(isset($n4_3_iz)){?> 
                                                                <li>
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
                                                                </li>
                                                  <?php } ?>
                                                       
                                                    <!--3_4NIVEL IZQUIERDA-->
                                                  <?php if(isset($n4_4_iz)){?>
                                                            <li>
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
                                                            </li> 
                                                    <?php } ?>
                                                </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                 <?php } ?>
                                </li>
    <!------------------------------------------------------------->                            
    <!------------------------2NIVEL DERECHA----------------------->
    <!------------------------------------------------------------->
                             <?php if(isset($n2_de[0])){ ?>
                                <li>
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
                                        <?php if(isset($n3_2_de)){?>
                                         <li>
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
                                                            <?php if(isset($n4_4_de)){ ?>
                                                                <li>
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
                                                                </li>
                                                            <?php } ?>
                                                            
                                                            <!--4_3_NIVEL DERECHA-->
                                                            <?php if(isset($n4_3_de)){ ?>
                                                                    <li>
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
                                                                        </li>
                                                            <?php } ?>
                                                        </ul>
                                         
                                         </li>
                                         <?php } ?>
                                         <!--3NIVEL DERECHA-->
                                         <?php if(isset($n3_de)){?>
                                            <li>
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
                                            <?php  if(isset($n4_2_de)){?>  
                                              <li>
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
                                                </li>  
                                            <?php } ?>
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
                                        </li>
                                      <?php } ?>
                                    </ul>
                                </li>
                                
                             <?php } ?>                                           

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