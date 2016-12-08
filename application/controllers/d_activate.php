<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_activate extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("paises_model","obj_paises");
        $this->load->model("regiones_model","obj_regiones");
        $this->load->model("franchise_model","obj_franchise");
        $this->load->model("bonus_model","obj_bonus");
    }   
                
    public function index(){  
        
           $this->get_session();
           
           $params = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.active,
                                    customer.parents_id,
                                    customer.created_at,
                                    franchise.price as price,
                                    franchise.name as franchise,
                                    customer.status_value",
                        "join" => array('franchise, franchise.franchise_id = customer.franchise_id'),
                        "where" => "customer.status_value = 1"
               );
           //GET DATA FROM CUSTOMER
           $obj_customer= $this->obj_customer->search($params);
           
           /// PAGINADO
            $modulos ='activaciones'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/activaciones'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_customer",$obj_customer);
            $this->tmp_mastercms->render("dashboard/activate/activate_list");
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $customer_id = $this->input->post("customer_id");
        $data = array(
               'first_name' => $this->input->post('first_name'),
               'last_name   ' => $this->input->post('last_name'),
               'username' => $this->input->post('username'),
               'password' => $this->input->post('password'),
               'email' => $this->input->post('email'),
               'dni' => $this->input->post('dni'),  
               'birth_date' => $this->input->post('fecha_de_nacimiento'),  
               'phone' => $this->input->post('phone'),
               'country' => $this->input->post('pais'),
               'region' => $this->input->post('region'),
               'franchise_id' => $this->input->post('franchise'),
               'position' => $this->input->post('position'),
               'address' => $this->input->post('address'),
               'btc_address' => $this->input->post('btc_address'),
               'city' => $this->input->post('city'),
               'calification' => $this->input->post('calification'),
               'status_value' => $this->input->post('status_value'),
               'updated_at' => date("Y-m-d H:i:s"),
               'updated_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_customer->update($customer_id, $data);
            
        redirect(site_url()."dashboard/clientes");
    }
    
    public function active_customer(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
                //SELECT CUSTOMER_ID
                $customer_id = $this->input->post("customer_id");
                
                //SELECT PARAM TO GET PRICE
                $params = array(
                        "select" =>"franchise.name as franchise,
                                    franchise.price as price,
                                    customer.status_value",
                        "join" => array('franchise, franchise.franchise_id = customer.franchise_id'),
                        "where" => "customer_id = $customer_id and customer.status_value = 1"
               );
                //GET DATA FROM CUSTOMER
                $obj_customer= $this->obj_customer->get_search_row($params);
                //GET PRICE TO CREATE NEGATIVE
                $price = 0 - $obj_customer->price;
                
                //SELECT TOY AND TODAY+76
                $today = date('Y-m-j');
                $today_76 = strtotime ( '+76 day' , strtotime ( $today ) ) ;
                $today_76 = date ( 'Y-m-j' , $today_76 );
                
                if(count($customer_id) > 0){
                    $data = array(
                        'active' => 1,
                        'date_start' => $today,
                        'date_end' => $today_76,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                    
                    //CREATE REGISTER UN COMMISSION
                    $data_comission = array(
                        'customer_id' => $customer_id,
                        'bonus_id' => 2,
                        'name' => "Financiado",
                        'amount' => $price,
                        'date' => $today,
                        'status_value' => 4,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_commissions->insert($data_comission);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function active(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
                //SELECT CUSTOMER_ID
                $customer_id = $this->input->post("customer_id");
                $price = $this->input->post("price");
                $parents_id = $this->input->post("parents_id");
                
                //GET BONUS DIRECT
//                $this->pay_directo($customer_id,$price,$parents_id);
                
                //GET BONUS BINARY
                $this->pay_binario($customer_id);
                
                
                echo json_encode($data);            
        exit();
            }
    }
    
    public function pay_directo($customer_id,$price,$parents_id){
                //GET PERCENT FROM BONUS
                $params = array(
                        "select" =>"percent",
                        "where" => "bonus_id = 1 and status_value = 1"
               );
                //GET DATA FROM BONUS
                $obj_bonus= $this->obj_bonus->get_search_row($params);
                $percet = $obj_bonus->percent;
                
                //CALCULE AMOUNT
                $amount = ($price  * $percet) / 100;
                
                //INSERT COMMISSION TABLE
                if(count($customer_id) > 0){
                    $data = array(
                        'customer_id' => $parents_id,
                        'bonus_id' => 1,
                        'name' => "Pago por referido Directo",
                        'amount' => $amount,
                        'status_value' => 1,
                        'date' => date("Y-m-d H:i:s"),
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_commissions->insert($data);
                }
        }
        
    public function pay_binario($customer_id){
            //GET IDENTIFICATOR FROM CUSTOMER
        
            $params = array(
                    "select" =>"identificador,
                                created_at",
                    "where" => "customer_id = $customer_id and status_value = 1"
           );
            $obj_customer = $this->obj_customer->get_search_row($params); 
            $identificator = $obj_customer->identificador;
            $creacion = $obj_customer->created_at;
            $explo_identificator =  explode(",", $identificator);
            
            
            
            $str = "";
            $str_texto = "";
            foreach ($explo_identificator as $key => $value) {
                $pos = strpos($identificator, $value);
                    $encontrar_post = strpos($identificator, $value);
                    $texto =  substr($identificator, $encontrar_post);
                    $str .= "or customer.identificador like '$texto%' ";
                }
                //ELIMINAR OR DE INICIO
                $str = substr($str, 3);  
                
            if(count($customer_id) > 0){
                
                //SELECT TREE
                $param_tree = array(
                                    "select" =>"customer.customer_id,
                                                customer.first_name,
                                                customer.username,
                                                customer.created_at,
                                                customer.last_name,
                                                customer.parents_id,
                                                customer.identificador,
                                                customer.position",
                                     "where" => "customer.created_at < '$creacion' and customer.status_value = 1 and ($str)",
                                     "join" => array('franchise, customer.franchise_id = franchise.franchise_id')
                                    ); 
                 $obj_tree = $this->obj_customer->search($param_tree); 
                 
                 var_dump($obj_tree);
                 die();
                 
                 
                 
            }    
            
            
            
            
            //GET DATA FROM BONUS
            $obj_bonus= $this->obj_bonus->get_search_row($params);
            $percet = $obj_bonus->percent;

            //CALCULE AMOUNT
            $amount = ($price  * $percet) / 100;

            //INSERT COMMISSION TABLE
            if(count($customer_id) > 0){
                $data = array(
                    'customer_id' => $parents_id,
                    'bonus_id' => 1,
                    'name' => "Pago por referido Directo",
                    'amount' => $amount,
                    'status_value' => 1,
                    'date' => date("Y-m-d H:i:s"),
                    'created_at' => date("Y-m-d H:i:s"),
                    'created_by' => $_SESSION['usercms']['user_id'],
                ); 
                $this->obj_commissions->insert($data);
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