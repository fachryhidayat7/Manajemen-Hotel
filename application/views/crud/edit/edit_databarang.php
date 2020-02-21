
  <body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Data Barang
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
            <?php foreach ($data_barang as $row): ?>
            <form class="form-horizontal" action="<?php echo base_url(). 'data_master/edit_data_barang'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_terima" placeholder="Id Terima" name="id_terima" value="<?= $row->id_terima?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" value="<?= $row->kode_barang?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= $row->nama_barang?>" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" placeholder="Stok"
                    value="<?= $row->stok?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Suplier</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_suplier" placeholder="Suplier" value="<?= $row->nama_suplier?>">
                  </div>
                </div>
              </div>
                  <div class="form-group">
                  <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                  <div class="col-sm-10">
                    <select id="inputState" class="form-control" name="lokasi">
                      <option value="<?= $row->lokasi?>">Pilih Lokasi...</option>
                      <option>Gudang 1</option>
                      <option>Gudang 2</option>
                      <option>Gudang 3</option>
                      </select>
                  </div>
                  </div>
             
                  
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form>
            <?php endforeach;?> 
          </div>
    </section>
  </div>
</body>
