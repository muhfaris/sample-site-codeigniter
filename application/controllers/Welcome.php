<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
			$data['title'] = "BLOG PENGGUNA LINUX";
		      $q =$this->m_admin->getposts();
		      if($q){
		        $data['allpost'] = $q;
		      $this->load->view('index',$data);
		      
		      }else{
		        $this->session->set_flashdata('e_posts', 'Gagal mengambil data dari database !!');
		        redirect('/');
		      }	
	}
	public function post($id){
		$data['post'] = $this->m_admin->getpost($id);
        $this->load->view('header');
        $this->load->view('utama2',$data);
        $this->load->view('footer');

	}
}
