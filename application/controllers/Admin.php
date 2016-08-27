<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller{

    public function __construct(){
      parent::__construct();
      if(!isset($_SESSION['username'])){
        redirect('login');
      }

    }
    function index(){
      $this->load->view('admin/index');
      $this->load->view('admin/v_utama',TRUE);
      $this->load->view('admin/v_footer');
    
    }
//end index
//end function login
    function logout(){
      session_destroy();
      redirect(base_url().'login');
    }
    function add_post(){
      $this->load->view('admin/index');
      $this->load->view('admin/v_addposts',TRUE);
      $this->load->view('admin/v_footer');
    }
    function insert_post(){

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
      $this->form_validation->set_rules('isipost', 'Isi Content', 'trim|required');
      $this->form_validation->set_rules('status_b', 'Status Posting','required');

      if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('post_error', 'Judul atau Isi posting dan Status Post belum di pilih !!');
        redirect('admin/add_post');
      } else {
        $this->session->set_flashdata('post_success', 'Posting Berhasil di Simpan !');
        $data['post_judul'] = $this->input->post('judul');
        $data['post_content'] = $this->input->post('mytextarea');
        $data['post_status'] = $this->input->post('status_b');
        $data['post_author'] = $_SESSION['username'];
        $this->m_admin->addPost($data);
        redirect('admin/get_posts','refresh');
      }
    }
    function delete_post($id){
      $q = $this->m_admin->delpost($id);
      
      if($q){
        $this->session->set_flashdata('Del_success', 'Data berhasil di Hapus !');
        redirect('admin/get_posts','refresh');
      }else{
        $this->session->set_flashdata('Del_success', 'Gagal Menghapus Data !');
        redirect('admin/get_posts','refresh');
      }
    }
    
    function update_post($id){
        $_SESSION['id'] = $id;
        $data['post'] = $this->m_admin->getpost($id);
        $this->load->view('admin/index');
        $this->load->view('admin/v_edit',$data);
        $this->load->view('admin/v_footer');
     
    }
    
    function edit_post(){
      $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
      $this->form_validation->set_rules('isipost', 'Isi Content', 'trim|required');
      $this->form_validation->set_rules('status_b', 'Status Posting','required');

      if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('post_error', 'Judul atau Isi posting dan Status Post belum di pilih !!');
        redirect('admin/get_posts');
      } else {
        //$this->session->set_flashdata('post_success', 'Posting Berhasil di Simpan !');
        $data['ID']= $this->input->post('ID');
        $data['post_title'] = $this->input->post('judul');
        $data['post_content'] = $this->input->post('isipost');
        $data['post_status'] = $this->input->post('status_b');
        $data['post_author'] = $_SESSION['username'];
          $q = $this->m_admin->updatepost($data);
          if($q){
            $this->session->set_flashdata('Del_success', 'Data berhasil di Update !');
            redirect('admin/get_posts','refresh');
          }else{
            $this->session->set_flashdata('Del_success', 'Gagal Mengupdate Data !');
            redirect('admin/get_posts','refresh');
          }
      }

    }
    function get_posts(){
      $q =$this->m_admin->getposts();
      if($q){
        $data['allpost'] = $q;
      $this->load->view('admin/index');
      $this->load->view('admin/v_list', $data);
      $this->load->view('admin/v_footer');
      
      }else{
        $this->session->set_flashdata('e_posts', 'Gagal mengambil data dari database !!');
        redirect('admin/v_list');
      }

    }
    function get_singlepost(){
      
    }

}//end Admin
