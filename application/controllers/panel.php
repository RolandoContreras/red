<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Panel extends CI_Controller{
    public function __construct() {
        parent::__construct();    
        $this->load->model("comments_model","obj_comments");
        $this->load->model("customer_model","obj_customer");
    }
    
    public function index(){
        //GET THE SESSION
        $this->get_session();

        //GET ALL COMMENTS
        $params = array("select" =>"count(comment_id) as comment_id, (select count(comment_id) from comments where status_value = 1) as active, (select count(comment_id) from comments where status_value = 0) as inactive");
        $obj_comments = $this->obj_comments->get_search_row($params);

        $active = $obj_comments->active;
        $inactive = $obj_comments->inactive;
        $obj_comments = $obj_comments->comment_id;
        
        //GET LASTEST COMMENT  
        $params = array(
                        "select" =>"comment_id,
                                    name,
                                    comment,
                                    email,
                                    status_value,
                                    date_comment",
                         "order" => "date_comment DESC"
            );
        $obj_last_comment = $this->obj_comments->get_search_row($params);
        
        //GET AND COUNT ALL THE CUSTOMER
        $params = array("select" =>"count(customer_id) as customer_id");
        $obj_customer = $this->obj_customer->get_search_row($params);
        $obj_customer = $obj_customer->customer_id;
        
        $modulos ='Home'; 
        $link_modulo =  site_url().$modulos; 
        $seccion = 'Vista global';        
        $this->tmp_mastercms->set('obj_customer',$obj_customer);
        $this->tmp_mastercms->set('obj_last_comment',$obj_last_comment);
        $this->tmp_mastercms->set('obj_comments',$obj_comments);
        $this->tmp_mastercms->set('active',$active);
        $this->tmp_mastercms->set('inactive',$inactive);
        $this->tmp_mastercms->set('modulos',$modulos);
        $this->tmp_mastercms->set('link_modulo',$link_modulo);
        $this->tmp_mastercms->set('seccion',$seccion);
        $this->tmp_mastercms->render('panel');
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