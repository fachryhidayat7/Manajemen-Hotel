 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Transaksi Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Transaksi Barang</a></li>
        <li class="active">Olah Data Penerimaan Barang</li>
      </ol>
    </section>
    
    <section class="content">
      <a href="<?php echo base_url('transaksi/form_tambah_transaksimasuk')?>" class="btn btn-primary btn-sm" role ="button">+ Tambah Data</a>
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama Suplier</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
              <?php $nomor = 1; ?>
              <?php foreach ($data->result()as $row): ?>
                    <tr>
                      <td><?= $nomor;?></td>
                    <td><?= $row->id_terima?></td>
                    <td><?= $row->nama_suplier?></td>
                    <td><?= $row->kode_barang?></td>
                    <td><?= $row->nama_barang?></td>
                    <td><?= $row->jumlah?></td>
                    <td>
                    <a href="<?php echo base_url('transaksi/form_edit_transaksimasuk')?>/<?php echo $row->id_terima;?>" class="btn btn-success btn-sm" role="button" >Edit</a>
                    <a href="<?php echo base_url('transaksi/delete_transaksimasuk')?>/<?php echo $row->id_terima;?>" onclick = "return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm" role="button" >Delete</a></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
