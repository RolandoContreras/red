<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<!--======================================================== HEAD =========================================================-->
<?php $this->load->view("head"); ?>

<body>
  <!-- The Main Wrapper -->
  <div class="page">
    <!--======================================================== HEADER =========================================================-->
    <?php $this->load->view("header_secundary"); ?>
    <!--======================================================== CONTENT =========================================================-->
    <main class="page-content">
      <!-- Contact info -->
      <!-- <section class="well-sm well-sm-inset-1 text-center text-md-left bg-primary"> <div class="container"> <h1>Contact info</h1> <div class="row"> <div class="col-md-4"> Contact Info <address class="contact-info offset-4"> <div class="heading-4">8901 Marmora Road,<br>Glasgow, D04 89GR.</div> <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl> <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl> <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl> <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl> </address> END Contact Info </div> <div class="col-md-4"> Contact Info <address class="contact-info offset-4"> <div class="heading-4">9863 - 9867 Mill Road,<br>Cambridge, MG09 99HT.</div> <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl> <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl> <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl> <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl> </address> END Contact Info </div> <div class="col-md-4"> Contact Info <address class="contact-info offset-4"> <div class="heading-4">9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.</div> <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl> <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl> <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl> <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl> </address> END Contact Info </div> </div> </div> </section>-->
      <!-- END Contact info-->
      <!-- Get in touch -->
      <section class="well-xs text-center">
        <div class="container wow fadeInUp">
          <h1>Mantente en contacto</h1>
          <!-- RD Mailform -->
          <form class='rd-mailform'>
            <fieldset>
              <div class="row">
                <div class="col-sm-6"> <label data-add-placeholder> <input type="text" id="name" name="name" placeholder="Nombre" data-constraints="@NotEmpty @LettersOnly"/> </label>                  </div>
                <div class="col-sm-6"> <label data-add-placeholder> <input type="text" id="email" name="email" placeholder="Email" data-constraints="@NotEmpty @Email"/> </label>                  </div>
                <div class="col-xs-12"> <label data-add-placeholder class="wide"> <textarea id="message" name="message" placeholder="Mensaje" data-constraints="@NotEmpty"></textarea> </label>                  </div>
                <div class="col-sm-6"> </div>
                <div class="col-xs-12 text-center">
                  <div class="mfControls"> <button onclick="send_messages();" class="btn btn-md btn-primary" type="button">Enviar</button> </div>
                </div>
              </div>
            </fieldset>
          </form> <span class="alert-0"></span>
          <!-- END RD Mailform -->
          <!--<address>8901 Marmora Road, Glasgow, D04 89GR</address>--></div>
      </section>
      <!-- END Get in touch-->
      <!-- RD Google Map -->
      <!-- <section class="rd-google-map"> <div id="google-map" class="rd-google-map__model"></div> <ul class="rd-google-map__locations"> <li data-x="-73.9874068" data-y="40.643180"> <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p> </li> </ul> </section>-->
      <!-- END RD Google Map -->
    </main>
    <!--======================================================== FOOTER ==========================================================-->
    <?php $this->load->view("footer");?>
  </div>
  <!-- Core Scripts -->
  <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
  <!-- Additional Functionality Scripts -->
  <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  <!-- import Js contact -->
  <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
  <!-- import bootbox.min -->
  <script src="<?php echo site_url().'static/page_front/js/bootbox.min.js';?>"></script>
  <!-- Login Backoffice-->
  <script src="static/page_front/js/login.js"></script>
  <!-- End Login-->
</body>

</html>