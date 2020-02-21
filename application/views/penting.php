<script src="<?php echo base_url(); ?>assets/ajax.js"></script>
<form autocomplete="off">
    <h1>Contoh Autocomplete</h1>
    <div>
        <label>Kode Barang</label><br>
        <input list="data_mahasiswa" type="text" name="kode_barang" id="kode_barang" placeholder="kode_barang" onchange="return autofill();">
    </div>
    <div>
        <label>Nama Barang</label><br>
        <input type="text" name="nama_barang" id="nama_barang">
    </div>
    <div>
        <label>stok</label><br>
        <textarea name="stok" id="stok">

        </textarea>
    </div>
    <div>
        <label>Lokasi</label><br>
        <input type="text" name="lokasi" id="lokasi">        
    </div>
    <div>
        <label>Suplier</label><br>
        <input type="text" name="suplier" id="suplier">        
    </div>
</form>

<datalist id="data_mahasiswa">
    <?php
    foreach ($data->result() as $row)
    {
        echo "<option value='$row->kode_barang'>$row->nama_barang</option>";
    }
    ?>
    
</datalist>   
<script>
    function autofill(){
        var kode_barang =document.getElementById('kode_barang').value;
        $.ajax({
                       url:"<?php echo base_url();?>data_master/cari",
                       data:'&kode_barang='+kode_barang,
                       success:function(data){
                           var hasil = JSON.parse(data);  
          
      $.each(hasil, function(key,val){ 
        
         document.getElementById('kode_barang').value=val.kode_barang;
                           document.getElementById('nama_barang').value=val.nama_barang;
                           document.getElementById('stok').value=val.stok;
                           document.getElementById('lokasi').value=val.lokasi; 
                           document.getElementById('suplier').value=val.suplier;  
                               
          
        });
      }
                   });
                  
    }
</script>