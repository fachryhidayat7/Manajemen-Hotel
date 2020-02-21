	<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
	<title>Edit data</title>
	<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Penerimaan Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Transaksi Barang</a></li>
        <li class="active">Edit Data Penerimaan Barang</li>>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md">   
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
            <?php foreach ($data as $row): ?>
            <form class="form-horizontal" action="<?php echo base_url(). 'transaksi/update_transaksimasuk'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_terima" placeholder="Id" name="id_terima" value="<?= $row->id_terima?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Suplier</label>
                  <div class="col-sm-10">
                    <input list="data_suplier" id="nama_suplier" type="text" name="nama_suplier" class="form-control" placeholder="Nama Suplier" value="<?= $row->nama_suplier?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input id="kode_barang" type="text" class="form-control" name="kode_barang" placeholder="Kode Barang" value="<?= $row->kode_barang?>"
                    >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?= $row->nama_barang?>" >
                  </div>
                </div>   
                <div class="form-group">
                  <label for="suplier" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?= $row->jumlah?>" >
                  </div>
                </div>       
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form> 

             <?php endforeach;?>
             <datalist id="data_suplier">
          <?php
          foreach ($suplier->result() as $row)
          {
            echo "<option value='$row->nama_suplier'>$row->id_suplier</option>";
           }
            ?>
          </datalist>

          </div>
    </section>
  </div>
</body>
 