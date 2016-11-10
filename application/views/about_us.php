
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
                <h1>Our Mission</h1>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="<?php echo site_url().'static/page_front/images/page-02_img01.jpg';?>" alt="" width="370" height="279">
                    </div>
                    <div class="col-md-8">
                        <p>Our company presents the classical business in the sphere of high technologies. We know how to appreciate our clients and improve our services.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="marked-list">
                                    <li><a href="#">Inbound Call Centre</a></li>
                                    <li><a href="#">Telemarketing Services</a></li>
                                    <li><a href="#">Lead Capture Services</a></li>
                                    <li><a href="#">Advertising Campaign</a></li>
                                    <li><a href="#">Sales Lead Conversion</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="marked-list">
                                    <li><a href="#">Web Enabled Call Centre</a></li>
                                    <li><a href="#">Real Estate Lead Collection</a></li>
                                    <li><a href="#">Customer Service Call Centre</a></li>
                                    <li><a href="#">Technical translation</a></li>
                                    <li><a href="#">Financial translation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Our mission-->

        <!-- Work team -->
        <section class="well-md well-md-inset-1 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Work Team</h1>
                <div class="row flow-offset-1">
                    <div class="col-xs-6 col-md-3">
                        <img src="<?php echo site_url().'static/page_front/images/page-02_img02.jpg';?>" alt="" width="270" height="242">
                        <h4><a href="#">Eva Adamson</a></h4>
                        <p>Support Lead, Account</p>
                        <p>Executive</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="<?php echo site_url().'static/page_front/images/page-02_img03.jpg';?>" alt="" width="270" height="242">
                        <h4><a href="#">David Austin</a></h4>
                        <p>Marketing and Thought</p>
                        <p>Leadership</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="<?php echo site_url().'static/page_front/images/page-02_img04.jpg';?>" alt="" width="270" height="242">
                        <h4><a href="#">Natalie Barnes</a></h4>
                        <p>Programming and Systems</p>
                        <p>Manager</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="<?php echo site_url().'static/page_front/images/page-02_img05.jpg';?>" alt="" width="270" height="242">
                        <h4><a href="#">Eva Adamson</a></h4>
                        <p>Marketing, Project</p>
                        <p>Manager</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Work team-->

        <!-- Why Us -->
        <section class="relative well-lg well-lg-inset-1">
            <div class="absolute wow fadeInRight">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-wrap"><img src="<?php echo site_url().'static/page_front/images/page-02_img06.jpg';?>" width="1010" height="1125" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeInLeft">
                <div class="row">
                    <div class="col-md-preffix-7 col-md-5">
                        <h1>Why Us</h1>
                        <p class="inset-2">Our company is your one stop solution for all needs. <br>There is no doubt that we are the leaders and you don’t have to worry about our image because it is perfect. A great number of different grateful clients is the best prove of the previous statement.</p>
                        <a href="#" class="btn btn-primary btn-md">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Why Us-->

        <!-- Products -->
        <section class="well-md well-md-inset-1 bg-primary text-center">
            <div class="container wow fadeInUp">
                <h1>Products</h1>
                <ul class="index-list row">
                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Internet</a></h4>
                                <p>You get the fastest, most reliable, unlimited Internet in the area.</p>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Digital TV</a></h4>
                                <p>You want a wide selction of Digital TV choices and we deliver!</p>
                            </div>
                        </div>
                    </li>

                    <li class="col-md-4">
                        <div class="box">
                            <div class="box__left">
                                <div class="icon icon-sm icon-secondary-1 index-list__counter"></div>
                            </div>
                            <div class="box__body">
                                <h4><a href="#">Telephone</a></h4>
                                <p>Voice communications have certainly changed over the years.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </section>
        <!-- END Products-->
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