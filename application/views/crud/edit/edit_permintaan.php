<script src="<?php echo base_url(); ?>assets/ajax.js"></script> 
  <body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Permintaan Data Barang
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
              <h3 class="box-title">Edit</h3>
            </div>
            <?php foreach ($data as $row): ?>
            <form class="form-horizontal" action="<?php echo base_url(). 'dashboard/edit_permintaan'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_po" placeholder="Id PO" name="id_po" value="<?= $row->id_po?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" value="<?= $row->kode_barang?>" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"
                    value="<?= $row->nama_barang?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="nama_suplier" class="col-sm-2 control-label">Nama Vendor</label>
                  <div class="col-sm-10">
                  <input list= "data_vendor" type="text" class="form-control" name="nama_vendor" placeholder="Nama Vendor" value="<?= $row->nama_vendor?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?= $row->stok?>">
                </div>
                </div>
                <div class="form-group">
                  <label for="harga" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?= $row->harga?>">
                </div>
                </div>
                  <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" placeholder="Status" value="<?= $row->status?>" disabled>
                   <select id="inputState" class="form-control" name="status">
                      <option value="<?= $row->status?>">Edit Status...</option>
                      <option>ACC</option>
                      <option>Belum ACC</option>
                      </select>
                  </div>
                </div>                
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form>

              <?php endforeach;?>
              <datalist id="data_vendor">
           <?php
            foreach ($vendor->result() as $row)
              {
               echo "<option value='$row->nama_vendor'></option>";
               }
                ?>
          </datalist>
    

          </div>
    </section>
  </div>
</body>
 