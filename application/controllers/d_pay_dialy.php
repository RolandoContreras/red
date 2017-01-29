<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_pay_dialy extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
                "where" =>"bonus.bonus_id = 3 and commissions.status_value = 2",
               "join" => array('customer, commissions.customer_id = customer.customer_id',
                                'bonus, commissions.bonus_id = bonus.bonus_id'),
                "group" =>  "commissions.date, commissions.status_value, bonus.name",
                "order" => "commissions.date DESC");
           //GET DATA FROM CUSTOMER
           $obj_commissions= $this->obj_commissions->search($params);
      
           /// PAGINADO
            $modulos ='pagos_diarios'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/pagos_diarios'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_commissions",$obj_commissions);
            $this->tmp_mastercms->render("dashboard/pay_dialy/pay_dialy");
    }
    
    public function hacer_pago(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
                //GET TODAY DATE
                $today = date("Y-m-d");
                
                //SELECT PARAM
                $params = array(
                        "select" =>"customer.customer_id,
                                    customer.first_name,
                                    customer.username,
                                    customer.date_start,
                                    customer.date_end,
                                    customer.last_name,
                                    customer.franchise_id",
                "where" =>"customer.active = 1 and franchise.franchise_id in (1,2,3,4,5,7,8)",
               "join" => array('franchise, customer.franchise_id = franchise.franchise_id'),
                         );
                //GET DATA FROM CUSTOMER
                $obj_customer= $this->obj_customer->search($params);
                
                foreach ($obj_customer as $value) {
                    if($value->date_end >= $today){
                        if($value->date_start >= '2017-01-10'){
                            
                            switch ($value->franchise_id) {
                            case 2:
                                $amount= 0.95;
                                break;
                            case 3:
                                $amount= 2.50;
                                break;
                            case 4:
                                $amount= 5.20;
                                break;
                            case 5:
                                $amount= 10.83;
                                break;
                            case 7:
                                $amount= 56.25;
                                break;
                            case 8:
                                $amount= 0.47;
                                break;
                            }
                            $data = array(
                                'customer_id' => $value->customer_id,
                                'bonus_id' => 3,
                                'name' => "Rentabilidad Diaria",
                                'amount' => $amount,
                                'normal_account' => $amount,
                                'date' => date("Y-m-d H:i:s"),
                                'status_value' => 2,
                                'created_at' => date("Y-m-d H:i:s"),
                                'created_by' => $_SESSION['usercms']['user_id']
                                );
                            $this->obj_commissions->insert($data);
                            
                        }elseif($value->date_start < '2017-01-10'){
                            switch ($value->franchise_id) {
                            case 2:
                                $amount= 1.86;
                                break;
                            case 3:
                                $amount= 5.00;
                                break;
                            case 4:
                                $amount= 10.60;
                                break;
                            case 5:
                                $amount= 22.60;
                                break;
                            }
                            
                        $mandatory_account = $amount*0.3;
                        $normal_account = $amount*0.7;
                        
                        $data = array(
                            'customer_id' => $value->customer_id,
                            'bonus_id' => 3,
                            'name' => "Rentabilidad Diaria",
                            'amount' => $amount,
                            'mandatory_account' => $mandatory_account,
                            'normal_account' => $normal_account,
                            'date' => date("Y-m-d H:i:s"),
                            'status_value' => 2,
                            'created_at' => date("Y-m-d H:i:s"),
                            'created_by' => $_SESSION['usercms']['user_id']
                        );
                        $this->obj_commissions->insert($data);
                     }
                } 
            }
                $data['message'] = "true";
                echo json_encode($data);            
        exit();
            }
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>