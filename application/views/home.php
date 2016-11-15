<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <!--========================================================
                              HEAD
    =========================================================-->
    <?php $this->load->view("head"); ?>
<!-- The Main Wrapper -->
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <?php $this->load->view("header");?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!-- Hello -->
        <section class="well-md well-md-inset-2 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>¿QUÉ ES EL BITCOIN?</h1>
                <div class="row">
                    <div class="col-md-10 col-md-preffix-1">
                        <p>Primera criptodivisa creada en el 2009 que destaca por su eficiencia, seguridad y facilidad de intercambio. Es una moneda descentralizada ya que no necesita un repositorio central o administrador individual, no necesita de un tercero para transaccionar. EL BITCOIN ES EL FUTURO<br><br><br><img src="<?php echo site_url().'static/page_front/images/logo-btc2.png';?>" alt="logo_bitcoin"/></p>
                    </div>
                </div>
                <a href="#" class="btn btn-md btn-contrast">Explorar Más</a>
            </div>
        </section>
        <!-- END Hello-->

        <!-- Pricing table -->
        <section>
            <div class="row row-no-gutter pricing-table text-center">
                <div class="col-md-4 wow fadeInLeft bg-grayscale-lightest" data-wow-duration="0.4s" data-wow-delay="0s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">30</div>
                        <h1 class="pricing-table__plan-name">START</h1>
                        <div class="pricing-table__price">30 puntos para <p>binario</p></div>
                        <p>Genera una rentabilidad del (30%) <br>de la compra del paquete en 75 días.</p>
                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4 accented wow fadeInLeft bg-grayscale-lighten-3" data-wow-duration="0.4s" data-wow-delay="0.5s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">50</div>
                        <h1 class="pricing-table__plan-name">BASIC</h1>
                        <div class="pricing-table__price">50 puntos para <p>binario</p></div>
                        <p>Genera una rentabilidad del (40%) <br>de la compra del paquete en 75 días.</p>
                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInLeft bg-grayscale-lighten-2" data-wow-duration="0.4s" data-wow-delay="1s">
                    <div class="pricing-table__item well-sm">
                        <div class="pricing-table__title">100</div>
                        <h1 class="pricing-table__plan-name">PLATINIUM</h1>
                        <div class="pricing-table__price">100 puntos para <p>binario</p></div>
                       <p>Genera una rentabilidad del (50%) <br>de la compra del paquete en 75 días.</p>
                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing table two -->
        <section>
            <div class="row row-no-gutter pricing-table text-center">
                
                <div class="col-md-6 wow fadeInLeft bg-grayscale-lighten-2" data-wow-duration="0.8s" data-wow-delay="0s">
                    <div class="pricing-table__item">
                        <div class="pricing-table__title">250</div>
                        <h1 class="pricing-table__plan-name">GOLD</h1>
                        <div class="pricing-table__price">250 puntos para <p>binario</p></div>
                        <p>Genera una rentabilidad del (60%) <br>de la compra del paquete en 75 días.</p>
                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInLeft bg-grayscale-lighten-3" data-wow-duration="1.2s" data-wow-delay="0s">
                    <div class="pricing-table__item">
                        <div class="pricing-table__title">500</div>
                        <h1 class="pricing-table__plan-name">VIP</h1>
                        <div class="pricing-table__price">500 puntos para <p>binario</p></div>
                       <p>Genera una rentabilidad del (70%) <br>de la compra del paquete en 75 días.</p>
                        <a href="#" class="btn btn-md btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Pricing table -->

        <!-- About -->
        <section class="relative well-xl">
            <div class="absolute wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-6 col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-01_img01.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInRight">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Acerca</h1>
                        <p class="inset-2">BitShare (compartir Bitcoin) es una plataforma financiera con el fin de ayudar a capitalizar y dar herramientas para un crecimiento económico y personal a las personas en este nuevo cambio de era.</p>
                        <a href="<?php echo site_url().'acerca';?>" class="btn btn-primary btn-md">Explorar Más</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END About-->

        <!-- Testimonials -->
<!--        <section class="well-md well-md-inset-1 bg-primary text-center">
            <h1 class="wow fadeInUp">Testimonials</h1>
            <div class="row wow fadeInUp">
                 Owl Carousel 
                <div class="owl-carousel" data-nav="true" data-loop="true" data-items="1">
                    <div class="owl-item inset-5">
                        <p>I just don't know how to describe your services... They are extraordinary! I am quite happy with them! Just keep up going this way!</p>
                        <hr class="devider">
                        <h4><a href="#">Marie Hoffman</a></h4>
                        <p>Female from United States</p>
                    </div>
                    <div class="owl-item inset-5">
                        <p>Wow, I'm so happy with your service. You managed to exceed my expectations! You guys are very efficient and I will refer more people to your company!</p>
                        <hr class="devider">
                        <h4><a href="#">Tom Brown</a></h4>
                        <p>Male from United States</p>
                    </div>
                </div>
                 END Owl Carousel 
            </div>
        </section>-->
        <!-- END Testimonials-->

        <!-- Quality -->
        <section class="relative well-lg">
            <div class="absolute wow fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-01_img02.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-7 col-md-5">
                        <h1>Quality</h1>
                        <p class="inset-2">We believe that old marketing rules, such as quality and perfect servicing, must be kept and realized in our policy instantly. Our solutions are aimed at creating values and quality in our activity. Our perfect reputation and many positive testimonials prove that quality solution is an effective part of our business.</p>
                        <a href="#" class="btn btn-primary btn-md">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Quality-->

        <!-- Partners -->
        <section class="well-sm bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Pasarelas de BitCoin</h1>
                <div class="row row-xs-center">
                    <p class="inset-1">A nivel mundial existen más de 200 pasarelas de pago que aceptan la primera criptomenda “el bitcoin”, negocios y grandes marcas han invertidos más de $927 millones de dólares americanos en infraestructura de esta criptomoneda tales como: visa, citi ventures, goldman sachs, bbva, nyse (new york stock exchanger), overstock, entre otras.</p>
                        <!-- Flex list -->
                        <ul class="flex-list">
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/blockchain.png';?>" alt="" width="117" height="86"></li>
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/bitinka.png';?>" alt="" width="117" height="86"></li>
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/xapo.png';?>" alt="" width="117" height="86"></li>
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/coinbase.png';?>" alt="" width="117" height="86"></li>
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/uphold.png';?>" alt="" width="117" height="86"></li>
                            <li><img src="<?php echo site_url().'static/page_front/images/pasarelas/bitcointoyou.png';?>" alt="" width="117" height="86"></li>
                        </ul>
                        <!-- END Flex list -->
                    <!--<a href="#" class="btn btn-md btn-contrast">Explore More</a>-->
                </div>
            </div>
        </section>
        <!-- END Partners-->

        <!-- Get in touch -->
        <section class="well-xs text-center">
            <div class="container wow fadeInUp">
                <h1>Mantente en contacto</h1>
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
                                           placeholder="Nombre"
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
                                    <textarea name="message" placeholder="Mensaje"
                                              data-constraints="@NotEmpty"></textarea>
                                </label>
                            </div>

                            <div class="col-xs-12 text-center">
                                <div class="mfControls">
                                    <button class="btn btn-md btn-primary" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                        <div class="mfInfo"></div>
                    </fieldset>
                </form>
                <!-- END RD Mailform -->

                <!--<address>8901 Marmora Road, Glasgow, D04 89GR</address>-->
            </div>
        </section>
        <!-- END Get in touch-->

        <!-- Map -->
<!--        <section>
             RD Google Map 
            <div class="rd-google-map wow fadeInUp">
                <div id="google-map" class="rd-google-map__model"></div>
                <ul class="rd-google-map__locations">
                    <li data-x="-73.9994068" data-y="40.643180" data-basic="images/gmap_park.png"
                        data-active="http://livedemo00.template-help.com/wt_58243/images/gmap_park_active.png">
                        <p> Lorem ipsum dolor sit amet, consectetur. <span>800-2345-6789</span></p>
                    </li>
                    <li data-x="-73.9874068" data-y="40.643180">
                        <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800-2345-6789</span></p>
                    </li>
                    <li data-x="-73.9854068" data-y="40.647180" data-basic="images/gmap_cart.png"
                        data-active="http://livedemo00.template-help.com/wt_58243/images/gmap_cart_active.png">
                        <p> 2734 Marmora Road, Glasgow, DC 41 Fr 45. <span>800-5732-6189</span></p>
                    </li>
                </ul>
            </div>
             END RD Google Map 
        </section>-->
        <!-- END Map-->

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
loader: "http://livedemo00.template-help.com/wt_58243/static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('7830-582-10-3714');/*\]\]>*/</script><noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>