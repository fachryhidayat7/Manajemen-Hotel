<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('data_model');
	}
	
	//Transaksi Masuk
	public function transaksi_masuk(){

		$nama['title'] = 'Transaksi Masuk';
		$data['data'] = $this->data_model->transaksi_masuk();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/transaksi_barangmasuk', $data);
		$this->load->view('template/footer');

		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
	}

	public function form_tambah_transaksimasuk(){
		$nama['title'] = 'Tambah Transaksi';
		$suplier['suplier'] = $this->data_model->suplier();
		$barang['barang'] = $this->data_model->databarang();
		$this->load->view('template/header', $nama);
		$this->load->view('template/navbar', $barang);
		$this->load->view('crud/insert/tambah_transaksimasuk',$suplier);
		$this->load->view('template/footer');

		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
	}

	public function tambah_transaksimasuk(){
		$id_terima = $this->input->post('id_terima');
		$nama_suplier = $this->input->post('nama_suplier');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		$this->data_model->save_data_masuk($id_terima,$nama_suplier,$kode_barang,$nama_barang,$jumlah);
		$this->session->set_flashdata('pesan','Berhasil');
		redirect(base_url('transaksi/transaksi_masuk'));
	}

	public function form_edit_transaksimasuk($id_terima)
	{
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$nama['title'] = 'Edit Suplier';
		$where = array('id_terima' => $id_terima);
		$data['data'] = $this->data_model->edit_transaksi_masuk($where,'transaksi_masuk')->result();
		$suplier['suplier'] = $this->data_model->suplier();
		$this->load->view('template/header.php',$nama);
		$this->load->view('template/navbar.php',$suplier);
		$this->load->view('crud/edit/edit_transaksimasuk',$data);
		$this->load->view('template/footer.php');
		}
	
	public function update_transaksimasuk(){
		$id_terima = $this->input->post('id_terima');
		$nama_suplier = $this->input->post('nama_suplier');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah = $this->input->post('jumlah');
		
		$data = array(
			'id_terima' => $id_terima,
			'nama_suplier' => $nama_suplier,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah
		);

		$where = array(
			'id_terima' => $id_terima
		);
		$this->data_model->update_transaksimasuk($where,$data,'transaksi_masuk');
		$this->session->set_flashdata('pesan','Berhasil');
		redirect('transaksi/transaksi_masuk');
	
	}

	public function delete_transaksimasuk($id_terima){
		$where = array('id_terima' => $id_terima);
		$this->data_model->hapus_transaksimasuk($where,'transaksi_masuk');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('transaksi/transaksi_masuk');
	}

	//transaksi keluar
	public function transaksi_keluar(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
		
		$nama['title'] = 'Barang Keluar';
		$data['data']=$this->data_model->transaksi_keluar(); 
		$this->load->view('template/header',$nama);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/transaksi_barangkeluar',$data);
		$this->load->view('template/footer');

	}


		
	
}
