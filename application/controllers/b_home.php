<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.parents_id,
                                    customer.username,
                                    customer.email,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.address,
                                    customer.status_value,
                                    franchise.name as franchise,
                                    ",
                         "where" => "customer.customer_id = $customer_id",
                         "join" => array('franchise, customer.franchise_id = franchise.franchise_id',)
                                        );
           $obj_customer = $this->obj_customer->get_search_row($params);
           
           //GET TOTAL AMOUNT
                $params_total = array(
                        "select" =>"sum(amount) as total,
                                    (select sum(amount) FROM commissions WHERE status_value = 2 and customer_id = $customer_id) as balance",
                         "where" => "commissions.customer_id = $customer_id",
                    );
                
           $obj_commissions = $this->obj_commissions->get_search_row($params_total);              
        
           $obj_total = $obj_commissions->total;
           $obj_balance = $obj_commissions->balance;
        
        $this->tmp_backoffice->set("obj_total",$obj_total);
        $this->tmp_backoffice->set("obj_balance",$obj_balance);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_home");
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


    
