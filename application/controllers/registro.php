<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("paises_model","obj_paises");
    }

    public function index()
    {
        //Select params
        $params = array(
                        "select" =>"id, nombre, ",
                        "where" => "id_idioma = 7");
        $obj_paises['obj_paises'] = $this->obj_paises->search($params);
        /// VIEW
        $this->load->view("register",$obj_paises);
    }
    public function validate_username(){
        //SELECT ID FROM CUSTOMER
        $username = str_to_minuscula(trim($this->input->post('username')));
        $param_customer = array(
                    "select" =>"customer_id",
                    "where" => "username = '$username'");
        $customer = count($this->obj_customer->get_search_row($param_customer));
        if($customer > 0){
            $data['message'] = "true";
            $data['print'] = "No esta disponible    ";
        }else{
            $data['message'] = "false";
            $data['print'] = "✔";
        }
        echo json_encode($data); 
    }
    
    public function validate_dni(){
        //SELECT ID FROM CUSTOMER
        $dni = trim($this->input->post('dni'));
        $param_customer = array(
                    "select" =>"customer_id",
                    "where" => "dni = '$dni'");
        $customer = count($this->obj_customer->search($param_customer));
        if($customer >= 3){
            $data['message'] = "true";
            $data['print'] = "Alcanzo el maximo de cuentas por persona";
        }else{
            $data['message'] = "false";
            $data['print'] = "Disponible";
        }
        echo json_encode($data); 
    }
}


    
