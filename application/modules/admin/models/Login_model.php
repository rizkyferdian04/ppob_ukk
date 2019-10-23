<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$query = $this->db->where('username', $username)
												->where('password', $password)
												->get('admin');

			if($query->num_rows() > 0)
			{
				$data_login = $query->row();
				$data_sesssion = array(
											'username' => $username,
											'level'    => $data_login->level,
											'login_status' => TRUE
				);
				$this->session->set_userdata($data_session);
				return true;

			}else{
				return false;
			}

	}

}

/* End of file Login_model.php */
/* Location: ./application/modules/admin/models/Login_model.php */
