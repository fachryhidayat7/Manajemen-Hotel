<?php
defined('BASEPATH') OR exit ('no direct script access allowed');
class Data_model extends CI_Model {
	
	function databarang()
	{
		return $this->db->get('data_barang');
	}

	//tes ajax
	function cari($id){
		$query = $this->db->get_where('transaksi_masuk', array('id_terima'=>$id));
		return $query;
	}
	//

	function data_permintaan()
	{
		return $this->db->get('permintaan_barang');
	}

	function edit_permintaan($where,$table){
		return $this->db->get_where($table,$where);
		
	}
	function update_datapermintaan($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
}


	function update_databarang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_barang($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}	

	function save_data_barang($id_terima, $kode_barang,$nama_barang,$stok,$lokasi,$nama_suplier)
	{
		$data = array(
			'id_terima' => $id_terima,
			'kode_barang' => $kode_barang,
			'nama_barang'=> $nama_barang,
			'stok' => $stok,
			'lokasi' => $lokasi,
			'nama_suplier' => $nama_suplier
		);
		$this->db->insert('data_barang',$data);
	}


	function save_permintaan($id_po,$kode_barang,$nama_barang,$nama_vendor,$stok,$harga,$status)
	{
		$data = array(
			'id_po' => $id_po,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'nama_vendor' => $nama_vendor,
			'stok' => $stok,
			'harga' => $harga,
			'status' => $status
		);
		$this->db->insert('permintaan_barang', $data);
	}

	function delete_permintaan($where,$table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	//suplier

	function suplier(){
		return $this->db->get('data_suplier');
	}

	function edit_suplier($where,$table) {
		return $this->db->get_where($table,$where);
	}

	function update_suplier_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_suplier($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function save_data_suplier($id_suplier,$nama_suplier,$alamat,$no_hp){

		$data = array(
			'id_suplier' => $id_suplier,
			'nama_suplier' => $nama_suplier,
			'alamat'	=>	$alamat,
			'no_hp' => $no_hp
		);

		$this->db->insert('data_suplier', $data);
	}

	//vendor
	function vendor(){
		return $this->db->get('data_vendor');
	}

	function save_data_vendor($id_vendor,$nama_vendor,$alamat,$no_hp){
		$data = array(
			'id_vendor' => $id_vendor,
			'nama_vendor' => $nama_vendor,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);
		$this->db->insert('data_vendor', $data);
	}

	function edit_vendor($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_vendor_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_vendor($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//lokasi
	 function lokasi(){
		return $this->db->get('lokasi');
	}

	function save_data_lokasi($id_lokasi,$nama_lokasi,$detail)
	{
		$data = array(
			'id_lokasi' => $id_lokasi,
			'nama_lokasi' => $nama_lokasi,
			'detail' => $detail
		);

		$this->db->insert('lokasi', $data);
	}

	function update_lokasi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_lokasi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//transaksi masuk

	function transaksi_masuk()
	{
		return $this->db->get('transaksi_masuk');
	}

	function save_data_masuk($id_terima,$nama_suplier,$kode_barang,$nama_barang,$jumlah)
	{
		$data = array(
			'id_terima' => $id_terima,
			'nama_suplier' => $nama_suplier,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah
		);

		$this->db->insert('transaksi_masuk', $data);
	}

	function edit_transaksi_masuk($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_transaksimasuk($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_transaksimasuk($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//transaksi keluar
	function transaksi_keluar(){
		$query = $this->db->query("SELECT * FROM permintaan_barang where status= 'ACC' ");
		return $query;
	}

	//Query chart

	function grafik_suplier(){
        $query = $this->db->query("SELECT nama_suplier,COUNT(nama_barang) AS nama_barang FROM data_barang GROUP BY nama_suplier");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function grafik_vendor(){
        $query = $this->db->query("SELECT nama_vendor,COUNT(kode_barang) AS kode_barang FROM permintaan_barang GROUP BY nama_vendor");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function grafik_permintaan(){
        $query = $this->db->query("SELECT nama_barang,SUM(stok) AS stok FROM permintaan_barang GROUP BY nama_barang");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function grafik_barang(){
    	 $query = $this->db->query("SELECT nama_barang,SUM(stok) AS stok FROM data_barang GROUP BY nama_barang");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    //Query Menghitung Jumlah

    function hitung_po(){
    	$sql = "SELECT count(nama_barang) as nama_barang FROM permintaan_barang where status = 'ACC'";
    	$result = $this->db->query($sql);
    	return $result->row()->nama_barang;
    }

    function hitung_suplier(){
    	return $this->db->count_all('data_suplier');
    }

     function hitung_vendor(){
    	return $this->db->count_all('data_vendor');
    }
     function hitung_barang(){
    	return $this->db->count_all('data_barang');
    }
}
?>