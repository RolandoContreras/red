<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_binario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
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
            
        if(isset($url[2])){
             $customer_id = $url[2];
        }else{
            //GET CUSTOMER_ID  FROM $_SESSION
            $customer_id = $_SESSION['customer']['customer_id'];
        }    
        
        //VERIFIRY GET SESSION    
         $this->get_session();
            $params = array(
                            "select" =>"customer.customer_id,
                                        customer.parents_id,
                                        customer.username,
                                        customer.email,
                                        customer.created_at,
                                        customer.position_temporal,
                                        customer.phone,
                                        customer.position,
                                        customer.password,
                                        customer.first_name,
                                        customer.last_name,
                                        customer.dni,
                                        customer.birth_date,
                                        customer.address,
                                        customer.city,
                                        customer.active,
                                        customer.status_value,
                                        paises.nombre as pais,
                                        franchise.name as franchise
                                        ",
                            "where" => "customer.customer_id = $customer_id and paises.id_idioma = 7",
                            "join" => array('paises, customer.country = paises.id',
                                            'franchise, customer.franchise_id = franchise.franchise_id')
                                            );
             $obj_customer = $this->obj_customer->get_search_row($params);  
             
//             var_dump($obj_customer);
//             die();
             
             //GET DATE CREATED
             $creacion = $obj_customer->created_at;
             
            //SELECT ALL CUSTOMER IN THE TREE    
            $param_tree = array(
                        "select" =>"customer.customer_id,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.parents_id,
                                    customer.username,
                                    customer.created_at,
                                    customer.country,
                                    customer.active,
                                    franchise.name as franchise,
                                    customer.position",
                         "where" => "customer.status_value = 1 and customer.created_at > '$creacion'",
                        "join" => array('franchise, customer.franchise_id = franchise.franchise_id'),
                         "order" => "created_at ASC"
                        ); 
            $obj_tree = $this->obj_customer->search($param_tree);
            
//            var_dump($obj_tree);
//            die();
            
            
            $n2_iz = "";
            $n2_de = "";
            $n3_iz = "";
            $n3_de = "";
            $n3_2_iz = "";
            $n3_2_de = "";
            $n4_iz = "";
            $n4_2_iz = "";
            $n4_3_iz = "";
            $n4_4_iz = "";
            $n4_de = "";
            $n4_2_de = "";
            $n4_3_de = "";
            $n4_4_de = "";

            $n1 = array($obj_customer->first_name,
                        $obj_customer->last_name,
                        $obj_customer->customer_id,
                        $obj_customer->created_at,
                        $obj_customer->parents_id,
                        $obj_customer->position,
                        $obj_customer->pais,
                        $obj_customer->username,
                        $obj_customer->franchise,
                        $obj_customer->active
                        );
            
            
        foreach ($obj_tree as $key => $value) {
                 if($value->parents_id == $n1[2]){
                        if($value->position ==1){
                            if($n2_iz == ""){
                                $n2_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n2_iz",$n2_iz); 
                            }elseif($n3_iz == ""){
                                $n3_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_iz",$n3_iz); 
                            }
                            elseif($n4_iz == ""){
                                $n4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_iz",$n4_iz); 
                            }
                        }else{
                            if($n2_de == ""){
                                $n2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n2_de",$n2_de);  
                            }elseif($n3_de == ""){
                                $n3_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_de",$n3_de);  
                                
                            }elseif($n4_de == ""){
                                $n4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_de",$n4_de);  
                            }
                        }
                    }elseif($value->parents_id == $n2_iz[2]){
                        if($value->position ==1){
                            if($n3_iz == ""){
                                $n3_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_iz",$n3_iz);  
                            }else{
                                $n4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_iz",$n4_iz);  
                            }
                        }else{
                            if($n3_2_iz == ""){
                                $n3_2_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_2_iz",$n3_2_iz);  
                            }elseif($n4_4_iz == ""){
                                $n4_4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_4_iz",$n4_4_iz);  
                            }
                        }
                }elseif($value->parents_id == $n2_de[2]){
                    if($value->position ==1){
                            if($n3_2_de == ""){
                                $n3_2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_2_de",$n3_2_de);  
                            }elseif($n4_4_de == ""){
                                $n4_4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_4_de",$n4_4_de);  
                            }
                        }else{
                            if($n3_de == ""){
                                $n3_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n3_de",$n3_de);  
                            }elseif($n4_de == ""){
                                $n4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_de",$n4_de);  
                            }
                        }
                }elseif($value->parents_id == $n3_iz[2]){
                     if($value->position ==1){
                            if($n4_iz == ""){
                                $n4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_iz",$n4_iz);  
                            }
                        }else{
                            if($n4_2_iz == ""){
                                $n4_2_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_2_iz",$n4_2_iz);  
                            }
                        }
                }elseif($value->parents_id == $n3_2_iz[2]){
                     if($value->position ==1){
                            if($n4_3_iz == ""){
                                $n4_3_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_3_iz",$n4_3_iz);  
                            }
                        }else{
                            if($n4_4_iz == ""){
                                $n4_4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_4_iz",$n4_4_iz);  
                            }
                        }
                }elseif($value->parents_id == $n3_de[2]){
                     if($value->position ==1){
                            if($n4_2_de == ""){
                                $n4_2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_2_de",$n4_2_de);  
                            }
                        }else{
                            if($n4_de == ""){
                                $n4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n4_de",$n4_de);              

                            }
                        }
                }elseif($value->parents_id == $n3_2_de[2]){
                     if($value->position ==1){
                            if($n4_4_de == ""){
                                $n4_4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_4_de",$n4_4_de);
                            }
                        }else{
                            if($n4_3_de == ""){
                                $n4_3_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                $this->tmp_backoffice->set("n4_3_de",$n4_3_de);
                            }
                        }
                }else{
                   if($value->parents_id == $parents_id_1){
                         if($n1[4] == $value->position){
                             if($value->position == 1){
                                if($n2_iz == ""){
                                    $n2_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n2_iz",$n2_iz);
                                }elseif($n3_iz == ""){
                                    $n3_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n3_iz",$n3_iz);
                                }
                                elseif($n4_iz == ""){
                                    $n4_iz = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n4_iz",$n4_iz);
                                }elseif($n3_2_de == ""){
                                    $n3_2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n3_2_de",$n3_2_de);
                                }elseif($n4_2_de == ""){
                                    $n4_2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n4_2_de",$n4_2_de);
                                }elseif($n4_4_de == ""){
                                    
                                    $n4_2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n4_2_de",$n4_2_de);
                                }
                            }else{
                                if($n2_de == ""){
                                    $n2_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n2_de",$n2_de);
                                }elseif($n3_de == ""){
                                    $n3_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n3_de",$n3_de);
                                    
                                }elseif($n4_de == ""){
                                    $n4_de = array($value->first_name,
                                               $value->last_name,
                                               $value->customer_id,
                                               $value->created_at,
                                               $value->parents_id,
                                               $value->position,
                                               $value->username,
                                               $value->active,
                                               $value->franchise,
                                               $value->country);
                                    $this->tmp_backoffice->set("n4_de",$n4_de);
                                }
                            }
                        }
                }
            }
        }

        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_binario");
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
