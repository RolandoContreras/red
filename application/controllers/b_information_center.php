<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_information_center extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("otros_model","obj_otros");
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
         //GET CUSTOMER_ID $_SESSION   
         $customer_id = $_SESSION['customer']['customer_id'];
         
        //VERIFIRY GET SESSION    
         $this->get_session();
  
        //GET PRICE BTC
            $params_price_btc = array(
                    "select" =>"",
                     "where" => "otros_id = 1",
            );
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = number_format($obj_otros->precio_btc,2);  
           
            
        $this->tmp_backoffice->set("price_btc",$price_btc);      
//        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->render("backoffice/b_information_center");
	}

        public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}
