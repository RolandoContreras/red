<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_pay extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("pay_commission_model","obj_pay_commission");
        $this->load->model("pay_model","obj_pay");
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
            $params = array(
                        "select" =>"pay.date,
                                    pay.amount,
                                    pay.status_value",
               "join" => array('customer, pay.customer_id = customer.customer_id'),
                "where" => "pay.customer_id = $customer_id",
                "order" => "pay.date DESC",
                "limit" => "40");
           //GET DATA FROM CUSTOMER
        $obj_commissions= $this->obj_pay->search($params);
        
        //GET TOTAL AMOUNT
                $params_total = array(
                        "select" =>"sum(mandatory_account) as mandatory_account,
                                    sum(normal_account) as normal_account,
                                    (select sum(amount) FROM commissions WHERE status_value <= 2 and customer_id = $customer_id) as balance",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2",
                    );
                
           $obj_data = $this->obj_commissions->get_search_row($params_total);              
        
           $mandatory_account = $obj_data->mandatory_account;
           $normal_account = $obj_data->normal_account;
           
           $obj_balance_disponible = $obj_data->balance - $mandatory_account;
           $obj_balance_disponible = number_format($obj_balance_disponible, 2);
           
           $obj_balance_red = $obj_data->balance - ($mandatory_account + $normal_account);
           //GET PRICE BTC
            $params_price_btc = array(
                    "select" =>"",
                     "where" => "otros_id = 1",
            );
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = number_format($obj_otros->precio_btc,8);  
           
            
        $this->tmp_backoffice->set("price_btc",$price_btc);  

        $this->tmp_backoffice->set("obj_balance_red",$obj_balance_red);   
        $this->tmp_backoffice->set("obj_balance_disponible",$obj_balance_disponible);   
        $this->tmp_backoffice->set("normal_account",$normal_account);
        $this->tmp_backoffice->set("mandatory_account",$mandatory_account);
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->render("backoffice/b_pay");
	}
        
        public function validate(){
        
        if($this->input->is_ajax_request()){   
            //GET MONTO
            $monto = trim($this->input->post('monto'));
            //GET CUSTOMER_ID FROM $_SESSION
            $customer_id = $_SESSION['customer']['customer_id'];
            
            //1 RED
            $params_total = array(
                        "select" =>"sum(mandatory_account) as mandatory_account,      
                                    sum(amount) as total",
                         "where" => "commissions.customer_id = $customer_id and status_value <= 2",
                    );
           $obj_commission_total = $this->obj_commissions->get_search_row($params_total);
           //SELECT AMOUNT - MANDAROTY ACCOUNT
           $obj_total_validate = $obj_commission_total->total - $obj_commission_total->mandatory_account;
            
         if($obj_total_validate >= 15){
            if($monto == 1){
                //GET TOTAL AMOUNT
                $params = array(
                        "select" =>"commissions_id,
                                    bonus_id,
                                    date,
                                    status_value,",
                         "where" => "commissions.customer_id = $customer_id and status_value <= 2 and bonus_id != 3",
                    );
                
           $obj_commission = $this->obj_commissions->search($params); 
           
           //SELECT PARAM TO TOTAL
           $params_total = array(
                        "select" =>"sum(amount) as total",
                         "where" => "commissions.customer_id = $customer_id and status_value <= 2 and bonus_id != 3",
                    );
           $obj_total = $this->obj_commissions->get_search_row($params_total);
           
           //CREATE DATA IN PAY
                $data = array(
                    'status_value' => 3,
                    'amount' => $obj_total->total,
                    'customer_id' => $_SESSION['customer']['customer_id'],
                    'date' => date("Y-m-d H:i:s"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $_SESSION['customer']['customer_id'],
                ); 
                $pay_id = $this->obj_pay->insert($data);
           
                
           foreach ($obj_commission as $value) {
                    //UPDATE TABLE COMMISSIONS
                    $data = array(
                        'status_value' => 3,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_commissions->update($value->commissions_id,$data);
                    
                    //CREATE DATA IN PAY_COMMISSION
                    $data_pay_commission = array(
                        'pay_id' => $pay_id,
                        'commissions_id' => $value->commissions_id,
                        'status_value' => 3,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_pay_commission->insert($data_pay_commission);
           }
                    echo json_encode($data);   
                    exit();   
            }elseif($monto == 2){
                
                //GET TOTAL AMOUNT AND TO BE PAGOS DIARIOS "3"
                $params = array(
                        "select" =>"commissions_id,
                                    bonus_id,
                                    date,
                                    status_value,",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2 and bonus_id = 3",
                    );
                
           $obj_commission = $this->obj_commissions->search($params); 
           
           //SELECT PARAM TO TOTAL
           $params_total = array(
                        "select" =>"sum(normal_account) as normal_account",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2",
                    );
           $obj_total = $this->obj_commissions->get_search_row($params_total);
           
           //CREATE DATA IN PAY
                $data = array(
                    'status_value' => 3,
                    'amount' => $obj_total->normal_account,
                    'customer_id' => $_SESSION['customer']['customer_id'],
                    'date' => date("Y-m-d H:i:s"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $_SESSION['customer']['customer_id'],
                ); 
                $pay_id = $this->obj_pay->insert($data);
           
                
           foreach ($obj_commission as $value) {
                    //UPDATE TABLE COMMISSIONS
                    $data = array(
                        'status_value' => 3,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_commissions->update($value->commissions_id,$data);
                    
                    //CREATE DATA IN PAY_COMMISSION
                    $data_pay_commission = array(
                        'pay_id' => $pay_id,
                        'commissions_id' => $value->commissions_id,
                        'status_value' => 3,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_pay_commission->insert($data_pay_commission);
           }
                    echo json_encode($data);   
                    exit();   
                
                
                
            }elseif($monto == 3){
                
                  //GET TOTAL AMOUNT AND TO BE PAGOS DIARIOS "3"
                $params = array(
                        "select" =>"commissions_id,
                                    bonus_id,
                                    date,
                                    status_value,",
                         "where" => "commissions.customer_id = $customer_id and status_value <= 2",
                    );
                
           $obj_commission = $this->obj_commissions->search($params); 
           
           //SELECT PARAM TO TOTAL
           $params_total = array(
                        "select" =>"sum(mandatory_account) as mandatory_account,      
                                    sum(amount) as total",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2",
                    );
           $obj_commission_total = $this->obj_commissions->get_search_row($params_total);
           $obj_total = $obj_commission_total->total - $obj_commission_total->mandatory_account;
           
           //CREATE DATA IN PAY
                $data = array(
                    'status_value' => 3,
                    'amount' => $obj_total,
                    'customer_id' => $_SESSION['customer']['customer_id'],
                    'date' => date("Y-m-d H:i:s"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $_SESSION['customer']['customer_id'],
                ); 
                $pay_id = $this->obj_pay->insert($data);
           
                
           foreach ($obj_commission as $value) {
                    //UPDATE TABLE COMMISSIONS
                    $data = array(
                        'status_value' => 3,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_commissions->update($value->commissions_id,$data);
                    
                    //CREATE DATA IN PAY_COMMISSION
                    $data_pay_commission = array(
                        'pay_id' => $pay_id,
                        'commissions_id' => $value->commissions_id,
                        'status_value' => 3,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['customer']['customer_id'],
                    ); 
                    $this->obj_pay_commission->insert($data_pay_commission);
           }
                    echo json_encode($data);   
                    exit();   
                    
            }
        }
      } 
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
