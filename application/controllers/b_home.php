<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B_home extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("otros_model","obj_otros");
        $this->load->model("franchise_model","obj_franchise");
    }

    public function index()
    {
        //GET SESION ACTUALY
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"(select count(customer_id) from customer where parents_id = $customer_id) as direct,
                                    customer.customer_id,
                                    customer.parents_id,
                                    customer.username,
                                    customer.email,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.active,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.calification,
                                    customer.point_calification_left,
                                    customer.point_calification_rigth,
                                    customer.point_left,
                                    customer.point_rigth,
                                    customer.date_start,
                                    customer.date_end,
                                    customer.created_at,
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
           //SET 5 VECES MAS EL VALOR DEL PAQUETE
           $max_gain = $obj_customer->price * 5;
           $points_left = $obj_customer->point_left / 0.12;
           $points_rigth = $obj_customer->point_rigth / 0.12;
           
           //GET TOTAL AMOUNT
                $params_total = array(
                        "select" =>"sum(amount) as total,
                                    (select sum(amount) FROM commissions WHERE status_value <= 2 and customer_id = $customer_id) as balance,"
                        . "         (select sum(mandatory_account) FROM commissions WHERE customer_id = $customer_id) as mandatory",
                         "where" => "commissions.customer_id = $customer_id and bonus_id <> 2",
                    );
             $obj_commissions = $this->obj_commissions->get_search_row($params_total); 
             
             //GET MANDATORY ACCOUNT
             $obj_madatory = $obj_commissions->mandatory;
             
             //GET PRICE BTC
            $params_price_btc = array(
                                    "select" =>"",
                                     "where" => "otros_id = 1");
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = "$".number_format($obj_otros->precio_btc,2);
           
           $obj_total = $obj_commissions->total;
           $obj_balance = $obj_commissions->balance;
           
             $today = date("Y-m-d");
             //GET DATE END CONTRACT
             $date_end_contract = $obj_customer->date_end;
            
             if($date_end_contract != "0000-00-00" && $today > $date_end_contract && $obj_customer->franchise_id != 6){
                     if($obj_customer->active == 1){
                    //UPDATE DATA EN CUSTOMER SET INACTIVE
                            $data = array(
                               'active' => 0,
                               'updated_by' => $customer_id,
                               'updated_at' => date("Y-m-d H:i:s")
                            ); 
                            $this->obj_customer->update($customer_id,$data); 
                    }
                    
                    //GET FRANCHISE PRICE
                    $params_franchise = array(
                                "select" =>"price",
                                "where" => "franchise_id = $obj_customer->franchise_id"
                                );

                     $obj_franchise_price = $this->obj_franchise->get_search_row($params_franchise); 

                  //GET AMOUNT TO SEND TO RENOVATION
                  $amount_send = $obj_franchise_price->price - $obj_madatory;

                    $this->tmp_backoffice->set("amount_send",$amount_send);
                    $this->tmp_backoffice->set("price_btc",$price_btc);
                    $this->tmp_backoffice->set("obj_madatory",$obj_madatory);
                    $this->tmp_backoffice->set("obj_customer",$obj_customer);
                    $this->tmp_backoffice->render("backoffice/b_renovation");
             }else{
                $this->tmp_backoffice->set("price_btc",$price_btc);
                $this->tmp_backoffice->set("obj_total",$obj_total);
                $this->tmp_backoffice->set("obj_balance",$obj_balance);
                $this->tmp_backoffice->set("max_gain",$max_gain);
                $this->tmp_backoffice->set("points_left",$points_left);
                $this->tmp_backoffice->set("points_rigth",$points_rigth);
                $this->tmp_backoffice->set("obj_customer",$obj_customer);
                $this->tmp_backoffice->render("backoffice/b_home");
             }
    }
    
    public function make_pedido(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $franchise_id = $this->input->post('franchise_id');
               $customer_id = $_SESSION['customer']['customer_id'];;
               
               if($franchise_id != "" && $customer_id != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            if($franchise_id == 2){
                                //CHANGE TO BASIC
                                 $data = array(
                                            
                                            'franchise_id' => 2,
                                            'point_calification_left' => 100,
                                            'point_calification_rigth' => 100,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 3){
                                //CHANGE TO PLATINIUM
                                 $data = array(
                                            
                                            'franchise_id' => 3,
                                            'point_calification_left' => 250,
                                            'point_calification_rigth' => 250,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 4){
                                //CHANGE TO GOLD
                                 $data = array(
                                            
                                            'franchise_id' => 4,
                                            'point_calification_left' => 500,
                                            'point_calification_rigth' => 500,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 5){
                                //CHANGE TO VIP
                                 $data = array(
                                            
                                            'franchise_id' => 5,
                                            'point_calification_left' => 1000,
                                            'point_calification_rigth' => 1000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 7){
                                //CHANGE TO ELITE
                                 $data = array(
                                            
                                            'franchise_id' => 7,
                                            'point_calification_left' => 5000,
                                            'point_calification_rigth' => 5000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }elseif($franchise_id == 9){
                                //CHANGE TO SUPER VIP
                                 $data = array(
                                            
                                            'franchise_id' => 9,
                                            'point_calification_left' => 12000,
                                            'point_calification_rigth' => 12000,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);
                            }
                            
                            //alter session franchise_id
                            
//                            $data_customer_session['customer_id'] = $obj_customer->customer_id;
//                $data_customer_session['name'] = $obj_customer->first_name.' '.$obj_customer->last_name;
//                $data_customer_session['username'] = $obj_customer->username;
//                $data_customer_session['franchise_id'] = $obj_customer->franchise_id;
//                $data_customer_session['email'] = $obj_customer->email;
//                $data_customer_session['country'] = $obj_customer->country;
//                $data_customer_session['active'] = $obj_customer->active;
//                $data_customer_session['logged_customer'] = "TRUE";
//                $data_customer_session['status'] = $obj_customer->status_value;
//                $_SESSION['customer'] = $data_customer_session;
                            
                            
                            
                            
                             $data['message'] = "true";
                             echo json_encode($data); 
                             exit();
                    
               }else{
                     $data['message'] = "true";
                     echo json_encode($data); 
                     exit();
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


    
