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
            $data['content'] = "<b>PRECIO: $125</b><br><b>RECIBES</b><br>+182 BIT<br>+MASTERMIND (Entrenamiento)<br> +EBOOK (libro digital)<br>+BLOCK";
            $data['image'] = "static/page_front/white/images/front/packet/basic.jpg";
            
        }elseif($package == "executive"){
            $data['title'] = "EXECUTIVE";
            $data['title_content'] = "ECO - CRUCERO (VIAJE EN YATE)";
            $data['content'] = "<b>PRECIO: $250</b><br>LA PUNTA, EL CAMOTAL , SAN LORENZO, EL FRONTON, ISLAS CABINZAS, INCLUYE NADO CON LOBOS MARINOS Y SEGURO DE VIAJE<br><br><b>RECIBES</b><br>+375 BIT<br>+MASTERMIND (Entrenamiento)<br> +EBOOK (libro digital)<br>+3 AUDIOS<br>+BLOCK<br>+4 WEBINARS";
            $data['image'] = "static/page_front/white/images/front/packet/executive.jpg";
        }elseif($package == "senior_executive"){
            $data['title'] = "SENIOR EXECUTIVE";
            $data['title_content'] = "VIAJE AL INTERIOR DE TU PAÍS";
            $data['content'] = "<b>PRECIO: $1000</b><br>TICKET AEREO<br>TRASLADO ENTRADA / SALIDA<br>ESTADIA<br>COMIDA<br>INCLUYE TOUR<b><br><br>RECIBES</b><br>+1500 BIT<br>+MASTERMIND (Entrenamiento)<br> +EBOOK (libro digital)<br>+3 AUDIOS<br>+BLOCK<br>+4 WEBINARS<br>+FXSHARE Y LEARN&SHARE (B-I)";
            $data['image'] = "static/page_front/white/images/front/packet/senior.jpg";
        }else{
            $data['title'] = "MASTER";
            $data['title_content'] = "VIAJE INTERNACIONAL";
            $data['content'] = "<b>PRECIO: $3000</b><br>TICKET AEREO<br>TRASLADO ENTRADA / SALIDA<br>ALL INCLUDE (TODO INCLUIDO)<br>INCLUYE TOUR<b><br><br>RECIBES</b><br>+4500 BIT<br>+3 MASTERMIND (Entrenamiento)<br> +EBOOK (libro digital)<br>+6 AUDIOS<br>+BLOCK<br>+6 WEBINARS<br>+FXSHARE Y LEARN&SHARE (B-I-A)";
            $data['image'] = "static/page_front/white/images/front/packet/master.jpg";
        }
        
            
		$this->load->view('package',$data);
                
                
                
                
	}
}
