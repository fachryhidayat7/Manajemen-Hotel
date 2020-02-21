<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('data_model');
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
	}
	
	public function laporan_barang()

	{	if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$data['title'] = 'Laporan Barang';
		$data['data']=$this->data_model->databarang();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/laporan_barang',$data);
		$this->load->view('template/footer');
	}

	public function cetak_barang(){
		$dompdf = new Dompdf();
		$data['data'] = $this->data_model->databarang();
		$html = $this->load->view('laporan/laporan_barang',$data,true);
		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'portrait');
		$dompdf->render();
		$pdf = $dompdf->output();
		$dompdf->stream('laporanbarang.pdf', array("Attachment" => false));
			}

	public function laporan_masuk(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}

		$data['title'] = 'Laporan Barang Masuk';
		$data['data']=$this->data_model->transaksi_masuk();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/laporan_barangmasuk',$data);
		$this->load->view('template/footer');
	}

	public function cetak_barangmasuk(){
		$dompdf = new Dompdf();
		$data['data'] = $this->data_model->transaksi_masuk();
		$html = $this->load->view('laporan/laporan_masuk',$data,true);
		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'portrait');
		$dompdf->render();
		$pdf = $dompdf->output();
		$dompdf->stream('laporanmasuk.pdf', array("Attachment" => false));
	}

	public function laporan_keluar(){
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));
		}
		
		$data['title'] = 'Laporan Purchase Order';
		$data['data'] = $this->data_model->data_permintaan();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar');
		$this->load->view('pages/data/laporan_barangkeluar',$data);
		$this->load->view('template/footer');
	}

	public function cetak_barangkeluar(){
		$dompdf = new Dompdf();
		$data['data'] = $this->data_model->data_permintaan();
		$html = $this->load->view('laporan/laporan_keluar',$data,true);
		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'portrait');
		$dompdf->render();
		$pdf = $dompdf->output();
		$dompdf->stream('laporankeluar.pdf', array("Attachment" => false));
	}
	
	
}
