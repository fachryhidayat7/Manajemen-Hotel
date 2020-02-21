<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Vendor
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>Data Master</a></li>
        <li class="active">Tambah Data Vendor</li>
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
            <form class="form-horizontal" action="<?php echo base_url(). 'data_master/tambah_vendor'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Id Vendor</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_vendor" placeholder="Id Vendor" name="id_vendor" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Vendor</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_vendor" class="form-control" placeholder="Nama Vendor"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                    >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="suplier" class="col-sm-2 control-label">No Hp</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telephone" >
                  </div>
                </div>
                           
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>  
            </form>
          </div>
    </section>
  </div>
</body>