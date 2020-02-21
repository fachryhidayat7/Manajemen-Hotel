 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Laporan Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Laporan</a></li>
        <li class="active">Laporan Data Masuk</li>
      </ol>
    </section>
    
    <section class="content">
      <a href="<?php echo base_url('laporan/cetak_barangmasuk')?>" class="btn btn-primary btn-sm" role ="button"> <i class="fa fa-print"></i> Cetak Laporan </a>
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

                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
