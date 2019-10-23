<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','lm');
		$this->load->library('form_validation');
	}
	public function index()
	{
		if($this->session->userdata('login_status')== TRUE)
		{
			redirect('Home');
		}
		else{
			$this->load->view('v_login');
		}

	}
	public function proses_login()
	{

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');

			if ($this->form_validation->run() == TRUE)
			{
				if ($this->lm->cek_login()== TRUE) {
					redirect('Home');
				}
				else
				{
					$this->session->set_flashdata('pesan', 'gagal login');
					redirect('admin/Login');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan',validation_errors());
				redirect('admin/Login');
			}
		}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin/Login'),'refresh');
	}
}




/* End of file Login.php */
/* Location: ./application/modules/admin/controllers/Login.php */
