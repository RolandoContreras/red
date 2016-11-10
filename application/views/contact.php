
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
        <!-- Contact info -->
        <section class="well-sm well-sm-inset-1 text-center text-md-left bg-primary">
            <div class="container">
                <h1>Contact info</h1>
                <div class="row">
                    <div class="col-md-4">
                        <!-- Contact Info -->
                        <address class="contact-info offset-4">
                            <div class="heading-4">8901 Marmora Road,<br>Glasgow, D04 89GR.</div>
                            <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl>
                            <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl>
                            <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl>
                            <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl>
                        </address>
                        <!-- END Contact Info -->
                    </div>

                    <div class="col-md-4">
                        <!-- Contact Info -->
                        <address class="contact-info offset-4">
                            <div class="heading-4">9863 - 9867 Mill Road,<br>Cambridge, MG09 99HT.</div>
                            <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl>
                            <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl>
                            <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl>
                            <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl>
                        </address>
                        <!-- END Contact Info -->
                    </div>

                    <div class="col-md-4">
                        <!-- Contact Info -->
                        <address class="contact-info offset-4">
                            <div class="heading-4">9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.</div>
                            <dl><dt>Freephone</dt><dd><a href="callto:#">+1 800 559 6580</a></dd></dl>
                            <dl><dt>Telephone</dt><dd><a href="callto:#">+1 800 603 6035</a></dd></dl>
                            <dl><dt>FAX</dt><dd><a href="callto:#">+1 800 889 9898</a></dd></dl>
                            <dl><dt>E-mail</dt><dd><a href="mailto:#"> mail@demolink.org</a></dd></dl>
                        </address>
                        <!-- END Contact Info -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END Contact info-->

        <!-- Get in touch -->
        <section class="well-lg well-lg-inset-2 text-center">
            <div class="container">
                <h1>Get in Touch</h1>
                <!-- RD Mailform -->
                <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                    <!-- RD Mailform Type -->
                    <input type="hidden" name="form-type" value="contact"/>
                    <!-- END RD Mailform Type -->
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <label data-add-placeholder>
                                    <input type="text"
                                           name="name"
                                           placeholder="Name"
                                           data-constraints="@NotEmpty @LettersOnly"/>
                                </label>
                            </div>

                            <div class="col-sm-6">
                                <label data-add-placeholder>
                                    <input type="text"
                                           name="email"
                                           placeholder="Email"
                                           data-constraints="@NotEmpty @Email"/>
                                </label>
                            </div>

                            <div class="col-xs-12">
                                <label data-add-placeholder class="wide">
                                    <textarea name="message" placeholder="Message"
                                              data-constraints="@NotEmpty"></textarea>
                                </label>
                            </div>

                            <div class="col-xs-12 text-center">
                                <div class="mfControls">
                                    <button class="btn btn-md btn-primary" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                        <div class="mfInfo"></div>
                    </fieldset>
                </form>
                <!-- END RD Mailform -->

                <address>8901 Marmora Road, Glasgow, D04 89GR</address>
            </div>
        </section>
        <!-- END Get in touch-->

        <!-- RD Google Map -->
        <section class="rd-google-map">
            <div id="google-map" class="rd-google-map__model"></div>
            <ul class="rd-google-map__locations">
                <li data-x="-73.9874068" data-y="40.643180">
                    <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                </li>
            </ul>
        </section>
        <!-- END RD Google Map -->
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
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('7830-582-10-3714');/*\]\]>*/</script><noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>