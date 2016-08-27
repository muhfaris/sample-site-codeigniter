<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
	function __construct(){
			parent::__construct();
	}
	var $tabel = 'ad_posts';
	public function getLogin($data){
		$login['username'] = $data['username'];
		$login['password'] = md5($data['password']);
		$q = $this->db->get_where('tbl_user', $login);

			if($q->num_rows>=0){
				 return $q->row();
			}else{
				return FALSE;
			}
			
	}
	function getposts(){
		$this->db->order_by('ID', 'DESC');
		$q = $this->db->get($this->tabel);
		return $q->result();
	}
	function getpost($id){
		$this->db->where('ID',$id);
		$q = $this->db->get($this->tabel);
		return $q->row();

	}
	function addpost(){
	$data = array (
		'post_title' => $this->input->post('judul'),
		'post_content' => $this->input->post('isipost'),
		'post_status' => $this->input->post('status_b'),
		'post_author' => $_SESSION['username'],
	);	
	$this->db->insert($this->tabel, $data);
	return TRUE;
	}

	function delpost($id){
		$this->db->where('ID',$id);
		$q = $this->db->delete($this->tabel);
		if($q){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function updatepost($data){
		$this->db->where('ID', $data['ID']);
		$q = $this->db->update($this->tabel, $data);
		if($q){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}




/* End of file app_login_model.php */
/* Location: ./application/models/app_login_model.php */
