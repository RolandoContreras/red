<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
    }

    public function index()
    {
        /// VISTA
//        $customer_id = $_SESSION['customer']['customer_id'];
//        $params = array(
//                        "select" =>"*",
//                         "where" => "customer_id = $customer_id",
//                        );
//        $obj_customer = $this->obj_customer->get_search_row($params);
        $this->load->view("register");
    }
}


    
