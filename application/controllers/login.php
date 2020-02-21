<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('login_model');
	}
	
	public function index()
	{
		$this->load->view('login');
		if($this->session->userdata('status')=="login"){
			redirect(base_url('dashboard'));
		}


	}

	public function aksi_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = array(
			'username' => $username,
			'password' => $password
		);

		$cek = $this->login_model->cek_login("admin",$user)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("dashboard"));

		} else
		{
			$this->session->set_flashdata('pesan', 'salah');
			redirect(base_url("login"));
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}
