<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Data Suplier
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
            <form class="form-horizontal" action="<?php echo base_url(). 'data_master/update_lokasi'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_lokasi" placeholder="Id Lokasi" name="id_lokasi" value="<?= $row->id_lokasi?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Lokasi</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_lokasi" class="form-control" placeholder="Nama Lokasi" value="<?= $row->nama_lokasi?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Detail</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="detail" placeholder="Detail" value="<?= $row->detail?>" 
                    >
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
 