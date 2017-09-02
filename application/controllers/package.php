<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {
    public function __construct() {
        parent::__construct();     
//        $this->load->model('comments_model','obj_comments');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   
            
        //SELECT URL    
        $url = explode("/",uri_string());
            
        if(isset($url[1])){
             $package = trim($url[1]);
        }    
        
        if($package == "basic"){
            $data['title'] = "BASIC";
            $data['title_content'] = "";
            $data['content'] = "<b>PRECIO: $125</b><br><b>RECIBES</b><br>+93 PUNTOS<br><b>DESARROLLO PERSONAL</b><br>+¿Qué es MIND HACKING? (E- book)<br> +Introducción al MIND HACKING (Webinar)<br>+AUTO COACHING (Audios de Entrenamiento)<br>+ANCLAS<br>+¿CÓMO ENTENDER?";
            $data['image'] = "static/page_front/white/images/front/packet/basic.jpg";
            
        }elseif($package == "executive"){
            $data['title'] = "EXECUTIVE";
            $data['title_content'] = "ECO - CRUCERO (VIAJE EN YATE)";
            $data['content'] = "<b>PRECIO: $250</b><br>LA PUNTA, EL CAMOTAL , SAN LORENZO, EL FRONTON, ISLAS CABINZAS, INCLUYE NADO CON LOBOS MARINOS Y SEGURO DE VIAJE<br><b>RECIBES</b><br>+187 PUNTOS<br><b>DESARROLLO PERSONAL</b><br>+TODO EL PAQUETE BASIC<br>+COMO ENTRAR EN LA MENTE DE LOS DEMÁS (E- book)<br>+SECCIONES DE PREGUNTAS CON PÚBLICO EN VIVO  (Webinar)<br>+COMO COMERSE A UN ELEFANTE (Audios)<br>+PUNTOS DE QUIEBRE<br><b>CURSOS FOREX</b><br>+BITSHARE ACADEMY Básico<br>+BITSHARE Signal<br>+BITSHARE Forex New<br>+BITSHARE TV";
            $data['image'] = "static/page_front/white/images/front/packet/executive.jpg";
        }elseif($package == "investor"){
            $data['title'] = "INVESTOR";
            $data['title_content'] = "VIAJE EXCLUSIVO SORPRESA";
            $data['content'] = "<b>PRECIO: $500</b><br><b>RECIBES</b><br>+375 PUNTOS<br><b>DESARROLLO PERSONAL</b><br>+TODO EL PAQUETE EXECUTIVE<br>+PROGRAMA DE PNL Y PERSUASIÓN (E- book)<br>+LA VENTAJA DE VENDER EN 7 SEGUNDOS (Webinar)<br>+COMO CONSEGUIR ALIADOS (Audios)<br>+MULTIPLICA<br><b>CURSOS FOREX</b><br>+TODO EL PAQUETE EXECUTIVE<br>+BITSHARE ACADEMY Completo<br>+BITSHARE Graphics y Strategies";
            $data['image'] = "static/page_front/white/images/front/packet/investor.jpg";
        }elseif($package == "business"){
            $data['title'] = "SENIOR EXECUTIVE";
            $data['title_content'] = "VIAJE AL INTERIOR DE TU PAÍS";
            $data['content'] = "<b>PRECIO: $1000</b><br>TICKET AEREO<br>TRASLADO ENTRADA / SALIDA<br>ESTADIA<br>COMIDA<br>INCLUYE TOUR<b><br>RECIBES</b><br>+750 PUNTOS<br><b>DESARROLLO PERSONAL</b><br>+TODO EL PAQUETE INVESTOR<br>+COMO HACER DINERO EN TIEMPO DE CRISIS (E- book)<br>+LA VENTAJA DE VENDER EN 7 SEGUNDOS (Webinar)<br>+MULTIPLICA (Audios)<br>+COMO CONSEGUIR ALIADOS <br><b>CURSOS FOREX</b><br>+TODO EL PAQUETE INVESTOR<br>+CURSO INTENSIVO DE FOREX (Conviértete en in trade profesional en 3 días)";
            $data['image'] = "static/page_front/white/images/front/packet/business.jpg";
        }else{
            $data['title'] = "MASTER";
            $data['title_content'] = "VIAJE INTERNACIONAL";
            $data['content'] = "<b>PRECIO: $3000</b><br>TICKET AEREO<br>TRASLADO ENTRADA / SALIDA<br>ALL INCLUDE (TODO INCLUIDO)<br>INCLUYE TOUR<b><br>RECIBES</b><br>+2250 PUNTOS<br><b>DESARROLLO PERSONAL</b><br>+TODO EL PAQUETE BUSINESS<br>+PROGRAMA DE ADOCTRINAMIENTO (E- book)<br>+¿QUIÉN SOY REALMENTE?<br>+HIPNOSIS CONVERSACIONAL (Webinar)<br>+TU NOMBRE, TU BANDERA  (Audios)<br>+INGENIERÍA SOCIAL<br><b>CURSOS FOREX</b><br>+TODO EL PAQUETE BUSINESS<br>+CONVERSATORIO PRIVADOR CON NUESTRO TRADER EN JEFE SERGIO URBINA";
            $data['image'] = "static/page_front/white/images/front/packet/master.jpg";
        }
        
            
		$this->load->view('package',$data);
                
                
                
                
	}
}
