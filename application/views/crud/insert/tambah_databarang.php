<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Barang
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
            <form class="form-horizontal" action="<?php echo base_url(). 'data_master/tambah_data_barang'; ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Id</label>
                  <div class="col-sm-10">
                    <input list= "data_barang" type="text" class="form-control" id="id_terima" placeholder="Kode Barang" name="id_terima" onchange="return autofill();" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input  type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" name="kode_barang" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="stok" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Nama Barang"
                    >
                  </div>
                </div>
                <div class="form-group">
                  <label for="supplier" class="col-sm-2 control-label">Nama Suplier</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" placeholder="Nama Suplier" >
                </div>
                </div>  
                  <div class="form-group">
                  <label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
                  <div class="col-sm-10">
                  <select id="inputState" class="form-control" name="lokasi">
                      <option value=">">Pilih Lokasi...</option>
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

            <datalist id="data_barang">
          <?php
          foreach ($data->result() as $row)
          {
            echo "<option value='$row->id_terima'></option>";
           }
            ?>
            
          </datalist>

         

          </div>
    </section>
  </div>
</body>

    <script>
    function autofill(){
        var id_terima =document.getElementById('id_terima').value;
        $.ajax({
                       url:"<?php echo base_url();?>data_master/cari",
                       data:'&id_terima='+id_terima,
                       success:function(data){
                           var hasil = JSON.parse(data);  
          
      $.each(hasil, function(key,val){ 
        document.getElementById('kode_barang').value=val.kode_barang;
        document.getElementById('nama_barang').value=val.nama_barang; 
        document.getElementById('stok').value=val.jumlah;
        document.getElementById('nama_suplier').value=val.nama_suplier;
                               
          
        });
      }
                   });
                  
    }
</script>
          