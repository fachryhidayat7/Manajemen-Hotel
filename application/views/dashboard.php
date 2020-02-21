 <!DOCTYPE html>
<html>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $po;?></h3>
              <p>Purchase Order</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url().'transaksi/transaksi_keluar';?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $hitung_suplier; ?><sup style="font-size: 20px"></sup></h3>
              <p>Suplier</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url().'data_master/suplier';?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $hitung_vendor; ?></h3>
              <p>Vendor</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url().'data_master/vendor';?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $hitung_barang; ?></h3>
              <p>Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>

            <a href="<?= base_url().'dashboard/databarang';?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
          <section class="content">
        <div class="row">
        <div class="col-md">   
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Permintaan Barang</h3>
            </div>
           <?php
        foreach((array)$suplier as $suplier){
            $nama_barang[] = $suplier->nama_barang;
            $stok[] = (float) $suplier->stok;
        }
    ?>
    <canvas id="canvas" width="1000" height="280"></canvas>
    <script type="text/javascript" src="<?= base_url('assets/').'chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($nama_barang);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }
                ]              
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
    </script>
    </section>
      </div>
    </section>

    <!-- Content Wrapper. Contains page content -->
    <section class="content-header">
      <h1>
        Data Permintaan Barang
      </h1>
    </section>
    <section class="content">
      <a href="<?php echo base_url('dashboard/form_tambahpermintaan')?>" class="btn btn-primary btn-sm" role ="button">+ Tambah Data</a>
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id PO</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Nama Vendor</th>
                  <th>Stok</th>
                  <th>harga</th>
                  <th>Status</th>        
                </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1; ?>
                  <?php foreach ($data->result()as $row): ?>
                    <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?= $row->id_po?></td>
                    <td><?= $row->kode_barang?></td>
                    <td><?= $row->nama_barang?></td>
                    <td><?= $row->nama_vendor?></td>
                    <td><?= $row->stok?></td>
                    <td><?= $row->harga?></td>
                    <td><?= $row->status ?></td>  
                    <td>
                    <a href="<?php echo base_url('dashboard/data_permintaan')?>/<?php echo $row->id_po;?>" class="btn btn-success btn-sm" role="button">Edit</a>
                    <a href="<?php echo base_url('dashboard/delete_permintaan')?>/<?php echo $row->id_po;?>" onclick = "return confirm('Yakin Hapus ?')" class="btn btn-danger btn-sm" role="button" >Delete</a></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
  </div>
</body>
</html>
