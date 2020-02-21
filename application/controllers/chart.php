<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('data_model');
	}
	
	public function index()
	{	

		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
		$data['title'] = 'Laporan Grafik';
		$data['suplier']=$this->data_model->grafik_suplier();
		$data['vendor']=$this->data_model->grafik_vendor();
		$data['barang']=$this->data_model->grafik_barang();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('laporan',$data);
		$this->load->view('template/footer');
	}
	
	
}
