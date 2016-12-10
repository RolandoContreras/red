<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_wallet extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("commissions_model","obj_commissions");
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
            $params = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    commissions.amount,
                                    commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
               "join" => array('customer, commissions.customer_id = customer.customer_id',
                                'bonus, commissions.bonus_id = bonus.bonus_id'),
                "where" => "customer.customer_id = $customer_id",
                "order" => "commissions.date DESC",
                "limit" => "60");
           //GET DATA FROM CUSTOMER
        $obj_commissions= $this->obj_commissions->search($params);  
        
        //GET TOTAL AMOUNT
                $params_total = array(
                        "select" =>"sum(mandatory_account) as mandatory_account,
                                    sum(normal_account) as normal_account,
                                    (select sum(amount) FROM commissions WHERE status_value = 2 and customer_id = $customer_id) as balance",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2",
                    );
                
           $obj_data = $this->obj_commissions->get_search_row($params_total);              
        
           $mandatory_account = $obj_data->mandatory_account;
           $normal_account = $obj_data->normal_account;
           $obj_balance = $obj_data->balance;
           $obj_balance_disponible = $obj_data->balance - $mandatory_account;
           
        $this->tmp_backoffice->set("obj_balance_disponible",$obj_balance_disponible); 
        $this->tmp_backoffice->set("obj_balance",$obj_balance);   
        $this->tmp_backoffice->set("normal_account",$normal_account);
        $this->tmp_backoffice->set("mandatory_account",$mandatory_account);
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->render("backoffice/b_wallet");
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