
    <body>
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Laporan Grafik
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a >Laporan</a></li>
        <li class="active">Laporan Grafik</li>
      </ol>
    </section>

   <section class="content">
        <div class="row">
        <div class="col-md">   
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Barang</h3>
            </div>
    <canvas id="barang" width="1000" height="280"></canvas>
    <script type="text/javascript" src="<?= base_url('assets/').'chartjs/chart.min.js'?>"></script>
    <script>
        <?php
        foreach((array)$barang as $barang){
            $nama[] = $barang->nama_barang;
            $stok[] = (float) $barang->stok;
            
        }
        ?>
            var lineChartData = {
                labels : <?php echo json_encode($nama);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(51,153,255,0.2)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("barang").getContext("2d")).Line(lineChartData);     
    </script>
    </section>

    <section class="content">
        <div class="row">
        <div class="col-md">   
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Suplier</h3>
            </div>
    <canvas id="canvas" width="1000" height="280"></canvas>
    <script type="text/javascript" src="<?= base_url('assets/').'chartjs/chart.min.js'?>"></script>
    <script>
        <?php
        foreach((array)$suplier as $suplier){
            $namasuplier[] = $suplier->nama_suplier;
            $nama_barang[] = (float) $suplier->nama_barang ;
            
        }
        ?>
            var lineChartData = {
                labels : <?php echo json_encode($namasuplier);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(255,153,51,0.2)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($nama_barang);?>
                    }
                ]  
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);     
    </script>
    </section>

<section class="content">
        <div class="row">
        <div class="col-md">   
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Vendor</h3>
            </div>
    <canvas id="vendor" width="1000" height="280"></canvas>
    <script type="text/javascript" src="<?= base_url('assets/').'chartjs/chart.min.js'?>"></script>
    <script>
        <?php
        foreach((array)$vendor as $vendor){
            $nama_vendor[] = $vendor->nama_vendor;
            $kode_barang[] = (float) $vendor->kode_barang;
        }
        ?>
            var lineChartData = {
                labels : <?php echo json_encode($nama_vendor);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(153,204,51,0.2)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($kode_barang);?>
                    }
                ] 
            }

        var myLine = new Chart(document.getElementById("vendor").getContext("2d")).Line(lineChartData);     
    </script>
    </section>

  </div>
</body>