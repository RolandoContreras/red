<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<link href="<?php echo site_url();?>static/cms/plugins/tags/chosen.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/plugins/tags/chosen.jquery.js"></script>
<script src="<?php echo site_url();?>static/cms/js/customer.js"></script>
<script src="<?php echo site_url();?>static/cms/plugins/ckeditor/ckeditor.js"></script>
<!-- main content -->

<form id="customer-form" name="customer-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/clientes/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Clientes</a>
                                </div>
                        </div>
                </div>
                <!--GET CUSTOMER ID-->
                <input type="hidden" name="customer_id" id="customer_id" value="<?php echo isset($obj_customer)?$obj_customer->customer_id:"";?>">
              
                <div class="well nomargin" style="width: 800px;">
                    <div class="inner">
                    <strong>País:</strong>
                        <select name="pais" id="pais">
                        <option value="">[ Seleccionar ]</option>
                            <?php foreach ($obj_paises as $value ): ?>
                        <option value="<?php echo $value->id;?>"
                            <?php 
                                    if(isset($obj_customer->country)){
                                            if($obj_customer->country==$value->id){
                                                echo "selected";
                                            }
                                    }else{
                                              echo "";
                                    }

                            ?>><?php echo $value->nombre;?>
                        </option>
                            <?php endforeach; ?>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <strong>Región:</strong>
                            <select name="region" id="region">
                            <option value="">[ Seleccionar ]</option>
                                <?php foreach ($obj_regiones as $value ): ?>
                            <option value="<?php echo $value->id;?>"
                                <?php 
                                        if(isset($obj_customer->region)){
                                                if($obj_customer->region==$value->id){
                                                    echo "selected";
                                                }
                                        }else{
                                                  echo "";
                                        }

                                ?>><?php echo $value->nombre;?>
                            </option>
                                <?php endforeach; ?>
                            </select>
                    </div>
                    <br/>
                    <div class="inner">
                        <strong>Paquete:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="franchise" id="franchise">
                                <option value="">[ Seleccionar ]</option>
                                    <?php foreach ($obj_franchise as $value ): ?>
                                <option value="<?php echo $value->franchise_id;?>"
                                    <?php 
                                            if(isset($obj_customer->franchise_id)){
                                                    if($obj_customer->franchise_id==$value->franchise_id){
                                                        echo "selected";
                                                    }
                                            }else{
                                                      echo "";
                                            }

                                    ?>><?php echo $value->name;?>
                                </option>
                                    <?php endforeach; ?>
                            </select>
                    </div>
                </div>
              <br><br>
              <input type="text" id="username" name="username" value="<?php echo isset($obj_customer->username)?$obj_customer->username:"";?>" class="input-xlarge-fluid" placeholder="Username">
              <br><br>
              <input type="password" id="password" name="password" value="<?php echo isset($obj_customer->password)?$obj_customer->password:"";?>" class="input-xlarge-fluid" placeholder="Contraseña">
              <br><br>
              <input type="text" id="first_name" name="first_name" value="<?php echo isset($obj_customer->first_name)?$obj_customer->first_name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>
              <input type="text" id="last_name" name="last_name" value="<?php echo isset($obj_customer->last_name)?$obj_customer->last_name:"";?>" class="input-xlarge-fluid" placeholder="Apellidos">
              <br><br>
              <input type="text" id="email" name="email" value="<?php echo isset($obj_customer->email)?$obj_customer->email:"";?>" class="input-xlarge-fluid" placeholder="Correo Electrónico">
              <br><br>
              <input type="text" id="dni" name="dni" value="<?php echo isset($obj_customer->dni)?$obj_customer->dni:"";?>" class="input-xlarge-fluid" placeholder="DNI">
              <br><br>
              <input type="text" id="fecha_de_nacimiento" name="fecha_de_nacimiento" value="<?php echo isset($obj_customer->birth_date)?$obj_customer->birth_date:"";?>" class="input-xlarge-fluid" placeholder="Fecha de Nacimiento">
              <br><br>
              <input type="text" id="phone" name="phone" class="input-small-fluid" placeholder="Telefono" value="<?php echo isset($obj_customer->phone)?$obj_customer->phone:"";?>">
              <br><br>
              <div class="inner">
                        <strong>Posición:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="position" id="position">
                                    <option value="">[ Seleccionar ]</option>
                                    <option value="1" <?php if(isset($obj_customer)){
                                        if($obj_customer->position == 1){ echo "selected";}
                                    }else{echo "";} ?>>Izquierda</option>
                                    <option value="2" <?php if(isset($obj_customer)){
                                        if($obj_customer->position == 2){ echo "selected";}
                                    }else{echo "";} ?>>Derecha</option>
                        </select>
                    </div>
                <br><br>
              
              
              <textarea name="address" id="address" placeholder="Dirección ..." style="width: 90%; height: 100px;"><?php echo isset($obj_customer->address)?$obj_customer->address:"";?></textarea>
              <script type="text/javascript">CKEDITOR.replace("adress")</script> 
              <br><br>
              <input type="text" id="city" name="city" class="input-small-fluid" placeholder="Ciudad" value="<?php echo isset($obj_customer->city)?$obj_customer->city:"";?>">
              <br><br>
              <input type="text" id="btc_address" name="btc_address" class="input-xlarge-fluid" placeholder="Direccion de BitCoin" value="<?php echo isset($obj_customer->btc_address)?$obj_customer->btc_address:"";?>">
                <br><br>
                <div class="well nomargin" style="width: 200px;">
                    <div class="inner">
                        <strong>Calificado para Binario:</strong>
                        <select name="calification" id="calification">
                                    <option value="">[ Seleccionar ]</option>
                                    <option value="1" <?php if(isset($obj_customer)){
                                        if($obj_customer->calification == 0){ echo "selected";}
                                    }else{echo "";} ?>>Inactivo</option>
                                    <option value="2" <?php if(isset($obj_customer)){
                                        if($obj_customer->calification == 1){ echo "selected";}
                                    }else{echo "";} ?>>Activo</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="well nomargin" style="width: 200px;">
                      <div class="inner">
                          <strong>Estado para el sistema:</strong>
                          <select name="status_value" id="status_value">
                                      <option value="">[ Seleccionar ]</option>
                                      <option value="1" <?php if(isset($obj_customer)){
                                          if($obj_customer->status_value == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                      <option value="2" <?php if(isset($obj_customer)){
                                          if($obj_customer->status_value == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                          </select>
                      </div>
                  </div>
                <br><br>
                <br><br>
            
                 
                <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancelar_customer();">Cancelar</button>                    
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
<script type="text/javascript">
    var show = '<?php echo $modulos?>';
    $(".chzn-select").chosen();
    
    $("#tags").chosen().change( function(e){
        $("#tag").val($(this).val());
    });         
    
    $('#timepicker1').timepicker({
        minuteStep: 1,    
        showSeconds: true,
        showMeridian: false,
        showInputs: true
    });
        
    $('#timepicker1').on('change', function() {                
        $("#time").val($(this).val());        
    });
</script>
