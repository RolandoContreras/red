<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("otros_model","obj_otros");
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
                                    customer.active,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.address,
                                    customer.status_value,
                                    customer.franchise_id,
                                    franchise.price,
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
             
            //GET PRICE BTC
                $params_price_btc = array(
                        "select" =>"",
                         "where" => "otros_id = 1",
                    );
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = number_format($obj_otros->precio_btc,8);
           
           $obj_total = $obj_commissions->total;
           $obj_balance = $obj_commissions->balance;
        
        $this->tmp_backoffice->set("price_btc",$price_btc);
        $this->tmp_backoffice->set("obj_total",$obj_total);
        $this->tmp_backoffice->set("obj_balance",$obj_balance);
        $this->tmp_backoffice->set("obj_customer",$obj_customer);
        $this->tmp_backoffice->render("backoffice/b_home");
    }
    
    public function make_pedido(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $kit = $this->input->post('kit');
               $customer_id = $_SESSION['customer']['customer_id'];;
               
               if($kit != "" && $customer_id != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            if($kit == 2){
                                //CHANGE TO BASIC
                                 $data = array(
                                            
                                            'franchise_id' => 2,
                                            'point_calification_left' => 100,
                                            'point_calification_rigth' => 100,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($kit == 3){
                                //CHANGE TO PLATINIUM
                                 $data = array(
                                            
                                            'franchise_id' => 3,
                                            'point_calification_left' => 250,
                                            'point_calification_rigth' => 250,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($kit == 4){
                                //CHANGE TO GOLD
                                 $data = array(
                                            
                                            'franchise_id' => 4,
                                            'point_calification_left' => 500,
                                            'point_calification_rigth' => 500,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($kit == 5){
                                //CHANGE TO VIP
                                 $data = array(
                                            
                                            'franchise_id' => 5,
                                            'point_calification_left' => 1000,
                                            'point_calification_rigth' => 1000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }

                                $data['message'] = "true";
                                $data['print'] = "La contraseña de cambio con exito";
                                $data['url'] = "misdatos";
                             echo json_encode($data); 
                    
               }else{
                     $data['message'] = "false";
                     $data['print'] = "Las contraseñas no deben estan en blanco";
                     $data['url'] = "misdatos";
                     echo json_encode($data); 
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


    
