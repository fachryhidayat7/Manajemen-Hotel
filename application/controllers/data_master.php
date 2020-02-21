<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_master extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('data_model');
		$this->load->helper('url');

		
	}

	public function data_barang($kode_barang)
	{
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Edit Data Barang';
		$where = array('kode_barang' => $kode_barang);
		$data['data_barang'] = $this->data_model->edit_data($where,'data_barang')->result();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php');
		$this->load->view('crud/edit/edit_databarang',$data);
		$this->load->view('template/footer.php');
	}

	 function edit_data_barang(){

	 	$id_terima = $this->input->post('id_terima');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$stok = $this->input->post('stok');
		$lokasi = $this->input->post('lokasi');
		$nama_suplier = $this->input->post('nama_suplier');
		
		$data = array(
			'id_terima' => $id_terima,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'stok' => $stok,
			'nama_suplier' => $nama_suplier,
			'lokasi' => $lokasi
			
		);

		$where = array(
			'id_terima' => $id_terima
		);

		$this->data_model->update_databarang($where,$data,'data_barang');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('dashboard/databarang');
	}

	
	public function form_tambah_barang(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Tambah Data Barang';
		$data['data'] = $this->data_model->transaksi_masuk();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('crud/insert/tambah_databarang',$data);
		$this->load->view('template/footer');
	}

	//cari barang dengan ajax
	public function cari() {
		$id_terima = $_GET['id_terima'];
		$cari = $this->data_model->cari($id_terima)->result();
		echo json_encode($cari);
	}

	public function tambah_data_barang(){
		$id_terima = $this->input->post('id_terima');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$stok = $this->input->post('stok');
		$lokasi = $this->input->post('lokasi');
		$nama_suplier = $this->input->post('nama_suplier');
		$this->data_model->save_data_barang($id_terima,$kode_barang,$nama_barang,$stok,$lokasi,$nama_suplier);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('dashboard/databarang'));
	}

	

	public function delete_data_barang($id_terima){
		$where = array('id_terima' => $id_terima);
		$this->data_model->hapus_data_barang($where,'data_barang');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('dashboard/databarang');
	}

	//suplier

	public function suplier(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Data Suplier';
		$data['data'] = $this->data_model->suplier();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/suplier', $data);
		$this->load->view('template/footer');
	}

	public function form_tambah_suplier(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
		
		$nama['title'] = 'Tambah Suplier';
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('crud/insert/tambah_suplier');
		$this->load->view('template/footer');
	}

	public function tambah_suplier(){
		$id_suplier = $this->input->post('id_suplier');
		$nama_suplier = $this->input->post('nama_suplier');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$this->data_model->save_data_suplier($id_suplier,$nama_suplier,$alamat,$no_hp);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('data_master/suplier'));
	}

	public function form_edit_suplier($id_suplier){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Edit Suplier';
		$where = array('id_suplier' => $id_suplier);
		$data['data'] = $this->data_model->edit_suplier($where,'data_suplier')->result();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php');
		$this->load->view('crud/edit/edit_suplier',$data);
		$this->load->view('template/footer.php');
	}

	public function update_suplier(){
		$id_suplier = $this->input->post('id_suplier');
		$nama_suplier = $this->input->post('nama_suplier');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		
		$data = array(
			'id_suplier' => $id_suplier,
			'nama_suplier' => $nama_suplier,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);

		$where = array(
			'id_suplier' => $id_suplier
		);

		$this->data_model->update_suplier_data($where,$data,'data_suplier');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('data_master/suplier');
	}

	public function delete_suplier($id_suplier){
		$where = array('id_suplier' => $id_suplier);
		$this->data_model->hapus_suplier($where,'data_suplier');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('data_master/suplier');
	}

	//vendor

	public function vendor(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama ['title'] = 'Data Vendor';
		$data['data'] = $this->data_model->vendor();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/vendor',$data);
		$this->load->view('template/footer');
	}

	
	public function form_tambah_vendor(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Tambah Vendor';
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('crud/insert/tambah_vendor');
		$this->load->view('template/footer');
	}

	public function tambah_vendor(){
		$id_vendor = $this->input->post('id_vendor');
		$nama_vendor = $this->input->post('nama_vendor');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$this->data_model->save_data_vendor($id_vendor,$nama_vendor,$alamat,$no_hp);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('data_master/vendor'));
	}

	public function form_edit_vendor($id_vendor)
	{
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Edit Vendor';
		$where = array('id_vendor' => $id_vendor);
		$data['data'] = $this->data_model->edit_vendor($where,'data_vendor')->result();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php');
		$this->load->view('crud/edit/edit_vendor',$data);
		$this->load->view('template/footer.php');
	}

	public function update_vendor()
	{
		$id_vendor = $this->input->post('id_vendor');
		$nama_vendor = $this->input->post('nama_vendor');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		
		$data = array(
			'id_vendor' => $id_vendor,
			'nama_vendor' => $nama_vendor,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);

		$where = array(
			'id_vendor' => $id_vendor
		);

		$this->data_model->update_vendor_data($where,$data,'data_vendor');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('data_master/vendor');
	}

	public function hapus_vendor($id_vendor){
		$where = array('id_vendor' => $id_vendor);
		$this->data_model->hapus_suplier($where,'data_vendor');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('data_master/vendor');
	}

	//lokasi

	public function lokasi(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama ['title'] = 'Data Lokasi';
		$data['data'] = $this->data_model->lokasi();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/lokasi',$data);
		$this->load->view('template/footer');
	}

	public function form_tambah_lokasi(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Tambah Lokasi';
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('crud/insert/tambah_lokasi');
		$this->load->view('template/footer');
	}

	public function tambah_lokasi(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$id_lokasi = $this->input->post('id_lokasi');
		$nama_lokasi = $this->input->post('nama_lokasi');
		$detail = $this->input->post('detail');
		$this->data_model->save_data_lokasi($id_lokasi,$nama_lokasi,$detail);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('data_master/lokasi'));
	}

	public function form_edit_lokasi($id_lokasi) {
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Edit Lokasi';
		$where = array('id_lokasi' => $id_lokasi);
		$data['data'] = $this->data_model->edit_vendor($where,'lokasi')->result();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php');
		$this->load->view('crud/edit/edit_lokasi',$data);
		$this->load->view('template/footer.php');
	}

	public function update_lokasi(){
		$id_lokasi = $this->input->post('id_lokasi');
		$nama_lokasi = $this->input->post('nama_lokasi');
		$detail = $this->input->post('detail');

		$data = array(
			'id_lokasi' => $id_lokasi,
			'nama_lokasi' => $nama_lokasi,
			'detail' => $detail
		);

		$where = array(
			'id_lokasi' => $id_lokasi
		);

		$this->data_model->update_lokasi($where,$data,'lokasi');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('data_master/lokasi');
	}

	public function hapus_lokasi($id_lokasi){
		$where = array('id_lokasi' => $id_lokasi);
		$this->data_model->hapus_lokasi($where,'lokasi');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('data_master/lokasi');
	}

}
