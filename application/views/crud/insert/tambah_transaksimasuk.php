<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Transaksi Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Transaksi Barang</a></li>
        <li class="active">Tambah Data Penerimaan Barang</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md">   
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <form class="form-horizontal" action="<?php echo base_url(). 'transaksi/tambah_transaksimasuk'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Id Terima</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_terima" placeholder="Id Terima" name="id_terima" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Suplier</label>
                  <div class="col-sm-10">
                    <input list="data_suplier" type="text" name="nama_suplier" class="form-control" placeholder="Nama Suplier"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input list="data_barang" type="text" class="form-control" name="kode_barang" placeholder="Kode Barang" id="kode_barang" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                  <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="suplier" class="col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Barang" >
                  </div>
                </div>
                           
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form>
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