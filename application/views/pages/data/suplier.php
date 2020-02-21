<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Suplier
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Data Master</a></li>
        <li class="active">Olah Data Suplier</li>
      </ol>
    </section>
    
    <section class="content">
      <a href="<?php echo base_url('data_master/form_tambah_suplier')?>" class="btn btn-primary btn-sm" role ="button">+ Tambah Data</a>
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Suplier</th>
                  <th>Nama Suplier</th>
                  <th>Alamat</th>
                  <th>Nomor Hp</th>
                  <th>Akses</th>
                </tr>
                </thead>
                <tbody>
              <?php $nomor = 1; ?>
              <?php foreach ($data->result()as $row): ?>
                    <tr>
                      <td><?= $nomor;?></td>
                    <td><?= $row->id_suplier?></td>
                    <td><?= $row->nama_suplier?></td>
                    <td><?= $row->alamat?></td>
                    <td><?= $row->no_hp?></td>
                    <td>
                    <a href="<?php echo base_url('data_master/form_edit_suplier')?>/<?php echo $row->id_suplier;?>" class="btn btn-success btn-sm" role="button" >Edit</a>
                    <a href="<?php echo base_url('data_master/delete_suplier')?>/<?php echo $row->id_suplier;?>" onclick = "return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm" role="button" >Delete</a></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
