<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('data_model');
	}
	
	public function index()
	{
		$nama['title'] = 'Dashboard';
		$data['data'] = $this->data_model->data_permintaan();
		$data['suplier']=$this->data_model->grafik_permintaan();
		$data['po'] = $this->data_model->hitung_po();
		$data['hitung_suplier'] = $this->data_model->hitung_suplier();
		$data['hitung_vendor'] = $this->data_model->hitung_vendor();
		$data['hitung_barang'] = $this->data_model->hitung_barang();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');

		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
	}

	public function data_permintaan($id_po){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Tambah Permintaan Barang';
		$where = array('id_po' => $id_po);
		$data['data'] = $this->data_model->edit_permintaan($where, 'permintaan_barang')->result();
		$data['vendor'] = $this->data_model->vendor();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('crud/edit/edit_permintaan', $data );
		$this->load->view('template/footer');
	}


	//data barang
	public function databarang(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Data Barang';

		$data['data'] = $this->data_model->databarang();
		
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view("pages/data/databarang", $data);
		$this->load->view('template/footer');
	}

	function form_tambahpermintaan(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Tambah Permintaan Barang';
		$data['data'] = $this->data_model->vendor();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php');
		$this->load->view('crud/insert/tambah_permintaan',$data);
		$this->load->view('template/footer.php');
	}

	function tambah_permintaan() {
		$id_po = $this->input->post('id_po');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$nama_vendor = $this->input->post('nama_vendor');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$status = $this->input->post('status');
		$this->data_model->save_permintaan($id_po,$kode_barang,$nama_barang,$nama_vendor,$stok,$harga,$status);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('dashboard'));
	}

	function edit_permintaan(){
		$id_po = $this->input->post('id_po');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$nama_vendor = $this->input->post('nama_vendor');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$status = $this->input->post('status');

		$data = array (
			'id_po' => $id_po,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'nama_vendor' => $nama_vendor,
			'stok' => $stok,
			'harga' => $harga,
			'status' => $status
			);
		$where = array(
			'id_po' => $id_po
		);

		$this->data_model->update_datapermintaan($where,$data,'permintaan_barang');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('dashboard');
	}

	function delete_permintaan($id_po){
		$where = array('id_po' => $id_po);
		$this->data_model->delete_permintaan($where,'permintaan_barang');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('dashboard');
	}

	

	
	
}
