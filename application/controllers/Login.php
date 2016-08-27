<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct(){
      parent::__construct();
         if(isset($_SESSION['username'])){
        redirect('admin');
      }        
    }
    public function index(){
      $this->load->view('v_login');
                            
    }
  //end index
    public function verifikasi(){

          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          
          if($this->form_validation->run() === FALSE){
            $this->load->view('v_login');   
           }else{
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
   
            $res = $this->m_admin->getLogin($data);
             if($res == FALSE){
                $this->session->set_flashdata('not', 'Data gagal dikirim !!',true);
                redirect('login');
             }else{
              
              $_SESSION['username'] = $this->input->post('username');
              
              redirect('admin','refresh');
             }
          
           }                               
      // }
    }//end verifikasi
    public function logout(){
      $this->session->sess_destroy();
      redirect('admin/login');
    }

  }