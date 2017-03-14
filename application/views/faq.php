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
        <!-- Our mission -->
        <section class="well-sm well-sm-inset-1">
            <div class="container">
                <h1><?php echo replace_vocales_voculeshtml("Preguntas Frecuentes - Bitshare FAQs");?></h1>
                <div class="row">
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Bitshare es una empresa de Multinivel?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("-Sí, bitshare es una tienda Online que trabaja bajo el sistema de multinivel con un concepto revolucionario de negocio donde comercializamos oro en pequeñas cantidades.");?></p><br>
                    </div>
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Bitshare es una empresa legal?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("-Sí, bitshare es una empresa legal registrada en la república del Perú con la siguiente denominación:");?></p>
                         <p><?php echo replace_vocales_voculeshtml("Razón Social: INVERSIONES BITSHARE S.A.C    .");?></p>
                         <p><?php echo replace_vocales_voculeshtml("Número de Ruc: 20601940087");?></p><br>
                    </div>
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Quiénes son los dueños de bitshare?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("-Son 3 dueños quienes están al frente de compañía bitshare:");?></p>
                         <p><i><?php echo replace_vocales_voculeshtml("1) Dr. Carlos Gómez: Presidente de la cooperativa de los más importante mineros independiente del Perú. Empresario de minas de oro, plata y cobre.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("2) Silene Carrasco: Networker de la industria por más de 10 años de experiencia con grandes resultados y a la vez ejecutiva de administración y negocios internacionales.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("3) Rolando Contreras: Experto en informática y desarrollador de software para grandes empresas a nivel internacional y a la vez networker de la industria MLM.");?></p><br>
                    </div>
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Por qué bitshare no es una pirámide financiera o un esquema ponzi?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("1) Bitshare no trabaja dinero por dinero.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("2) Tenemos un producto físico y tangible que vendemos.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("3) No es necesario reclutar nuevos miembros para mantener o sostener la compañía; bitshare tiene una ganancia por la comercialización de la compra y venta del oro.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("4) Todas las personas tienen las mismas opciones de ganancia y no tan solo los primeros.");?></p>
                         <p><?php echo replace_vocales_voculeshtml("5) Para cobrar las comisiones no es necesario traer a nuevos socios a la compañía para venderlas, etc.");?></p><br>
                    </div>
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Cuánto es la comisión por sacar nuestro dinero a otros monederos externos de bitcoin?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("-El 7% del monto enviado por gastos administrativos y operacionales.");?></p><br>
                    </div>                        
                    <div class="col-md-12 text-left" style="padding-bottom: 10px !important;">
                        <p><strong><?php echo replace_vocales_voculeshtml("¿Cuánto es la comisión por sacar nuestro dinero a otros monederos externos de bitcoin?");?></strong></p>  
                         <p><?php echo replace_vocales_voculeshtml("-El 7% del monto enviado por gastos administrativos y operacionales.");?></p><br>
                    </div>                        
                    
                </div>
            </div>
        </section>
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
   <?php $this->load->view("footer");?>
</div>
<!-- Core Scripts -->
<script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
<!-- Additional Functionality Scripts -->
<script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
<!-- Login Backoffice-->
<script src="static/page_front/js/login.js"></script>
<!-- End Login-->
</body><!-- Google Tag Manager -->
</html>