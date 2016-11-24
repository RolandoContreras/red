<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {
     function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("paises_model","obj_paises");
        $this->load->model("regiones_model","obj_regiones");
    }

    public function index()
    {
        //SELECT URL IF ISSET USERNAME
        $url = explode("/",uri_string());
        
        if(isset($url[2])){
            $username = $url[2];
            //Select params
            $params = array(
                            "select" =>"customer_id,first_name, position_temporal",
                            "where" => "username = '$username'");
            $obj_paises['obj_customer'] = $this->obj_customer->get_search_row($params);
        }
            //Select params
            $params = array(
                            "select" =>"id, nombre, ",
                            "where" => "id_idioma = 7");
            $obj_paises['obj_paises'] = $this->obj_paises->search($params);
            /// VIEW
        $this->load->view("register",$obj_paises);
    }
    
    public function crear_registro(){
        if($this->input->is_ajax_request()){
            $customer_id = trim($this->input->post('customer_id'));
            $pierna_customer = trim($this->input->post('pierna_customer'));
            
            if($customer_id != "" and $pierna_customer != ""){
                $parend_id = $customer_id;
                $position = $pierna_customer;
            }
            
            $usuario = trim($this->input->post('usuario'));
            $clave = trim($this->input->post('clave'));
            $name = trim($this->input->post('name'));
            $last_name = trim($this->input->post('last_name'));
            $address = trim($this->input->post('address'));
            $telefono = trim($this->input->post('telefono'));
            $dni = trim($this->input->post('dni'));
            $email = trim($this->input->post('email'));
            $dia = trim($this->input->post('dia'));
            $mes = trim($this->input->post('mes'));
            $ano = trim($this->input->post('ano'));
            $pais = trim($this->input->post('pais'));
            $region = trim($this->input->post('region'));
            $city = trim($this->input->post('city'));
//            $pierna = trim($this->input->post('pierna'));
            //create date to DB
            $birth_date = "$ano-$mes-$dia";
           
            $data = array(
               'parents_id' => $parend_id,
               'franchise_id' => 6,
               'username' => $usuario,
               'email' => $email,
               'position' => $position,
               'position_temporal' => 1,  
               'password' => $clave,  
               'first_name' => $name,
               'last_name' => $last_name,
               'dni' => $dni,
               'birth_date' => $birth_date,
               'address' => $address,
               'country' => $pais,
               'region' => $region,
               'city' =>  $city,
               'phone' => $telefono,
               'active' => 0,
               'calification' => 0,
               'status_value' => 1,
               'created_at' => date("Y-m-d H:i:s"),
                );
            
               $customer_id = $this->obj_customer->insert($data);
               
                //ACTIVE SESSION
                $data_customer_session['customer_id'] = $customer_id;
                $data_customer_session['name'] = $name;
                $data_customer_session['username'] = $usuario;
                $data_customer_session['email'] = $email;
                $data_customer_session['active'] = 0;
                $data_customer_session['logged_customer'] = "TRUE";
                $data_customer_session['status'] = 1;
                $_SESSION['customer'] = $data_customer_session; 
                
        $data['message'] = "true";
        $data['print'] = "Registrado con éxito";
        $data['url'] = site_url()."backoffice";  
        
        echo json_encode($data); 
        exit();
        }
    }
    
    public function validate_region(){
        
        $id_pais = trim($this->input->post('id'));
        
        //SELECT ID FROM CUSTOMER
        $param_regiones = array(
                        "select" =>"id,nombre",
                         "where" => "id_pais = $id_pais and id_idioma = 7");
        $region['region'] = $this->obj_regiones->search($param_regiones);
        
        if(count($region) > 0){
            $data['message'] = "true";
            $data['print'] = $region['region'];
        }else{
            $data['message'] = "false";
            $data['print'] = "Seleccionar un país";
        }
        echo json_encode($data); 
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
            $data['print'] = "✔ Disponible";
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


    
