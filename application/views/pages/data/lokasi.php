<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Lokasi
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Data Master</a></li>
        <li class="active">Olah Data Barang</li>
      </ol>
    </section>
    
    <section class="content">
      <a href="<?php echo base_url('data_master/form_tambah_lokasi')?>" class="btn btn-primary btn-sm" role ="button">+ Tambah Data</a>
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Lokasi</th>
                  <th>Nama Lokasi</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
              <?php $nomor = 1; ?>
              <?php foreach ($data->result()as $row): ?>
                    <tr>
                      <td><?= $nomor;?></td>
                    <td><?= $row->id_lokasi?></td>
                    <td><?= $row->nama_lokasi?></td>
                    <td><?= $row->detail?></td>
                    <td>
                    <a href="<?php echo base_url('data_master/form_edit_lokasi')?>/<?php echo $row->id_lokasi;?>" class="btn btn-success btn-sm" role="button" >Edit</a>
                    <a href="<?php echo base_url('data_master/hapus_lokasi')?>/<?php echo $row->id_lokasi;?>" onclick = "return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm" role="button" >Delete</a></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
