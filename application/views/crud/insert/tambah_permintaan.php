<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Permintaan Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Data Master</a></li>
        <li class="active">Data Barang</li>
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
            <form class="form-horizontal" action="<?php echo base_url(). 'dashboard/tambah_permintaan'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Id_PO</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_po" placeholder="Id PO" name="id_po" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"
                    >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="suplier" class="col-sm-2 control-label">Nama Vendor</label>
                  <div class="col-sm-10">
                  <input list= "data_vendor" type="text" class="form-control" name="nama_vendor" placeholder="Nama Vendor" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="stok" placeholder="Stok" >
                </div>
                </div>
                <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga" placeholder="Harga" >
                </div>
                </div>
                  <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                   <select id="inputState" class="form-control" name="status">
                      <option value=">">Pilih Status...</option>
                      <option>ACC</option>
                      <option>Belum ACC</option>
                      </select>
                  </div>
                </div>                
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form>

            <datalist id="data_vendor">
          <?php
          foreach ($data->result() as $row)
          {
            echo "<option value='$row->nama_vendor'></option>";
           }
            ?>
          </datalist>
          </div>
    </section>
  </div>
</body>