<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Data Master</a></li>
        <li class="active">Olah Data Barang</li>
      </ol>
    </section>
    
    <section class="content">
      <a href="<?php echo base_url('data_master/form_tambah_barang')?>" class="btn btn-primary btn-sm" role ="button">+ Tambah Data</a>
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Stok</th>
                  <th>Suplier</th>
                  <th>Lokasi</th>
                  <th>Akses</th>
                </tr>
                </thead>
                <tbody>
              <?php $nomor = 1; ?>
              <?php foreach ($data->result()as $row): ?>
                    <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?= $row->id_terima?></td>
                    <td><?= $row->kode_barang?></td>
                    <td><?= $row->nama_barang?></td>
                    <td><?= $row->stok?></td>
                    <td><?= $row->nama_suplier?></td>
                    <td><?= $row->lokasi?></td>
                    <td>
                    <a href="<?php echo base_url('data_master/data_barang')?>/<?php echo $row->kode_barang;?>" class="btn btn-success btn-sm" role="button" >Edit</a>
                    <a href="<?php echo base_url('data_master/delete_data_barang')?>/<?php echo $row->id_terima;?>" onclick = "return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm" role="button" >Delete</a></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
