<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
    
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?= base_url().'dashboard';?>"><i class="fa fa-dashboard"></i> <span>dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url().'dashboard/databarang';?>"><i class="fa fa-circle-o"></i>Data Barang</a></li>
            <li><a href="<?= base_url().'data_master/suplier';?>"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
            <li><a href="<?= base_url().'data_master/vendor';?>"><i class="fa fa-circle-o"></i>Data Vendor </a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Transaksi Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url().'transaksi/transaksi_masuk';?>"><i class="fa fa-circle-o"></i>Transaksi Barang Masuk </a></li>
            <li><a href="<?= base_url().'transaksi/transaksi_keluar';?>"><i class="fa fa-circle-o"></i>Transaksi Barang Keluar </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url().'laporan/laporan_barang';?>"><i class="fa fa-circle-o"></i> Data Barang </a></li>
            <li><a href="<?= base_url().'laporan/laporan_masuk';?>"><i class="fa fa-circle-o"></i>Transaksi Barang Masuk </a></li>
            <li><a href="<?= base_url().'laporan/laporan_keluar';?>"><i class="fa fa-circle-o"></i>Transaksi Barang Keluar </a></li>
          </ul>
        </li>
       
        <li><a href="<?= base_url().'chart';?>"><i class="fa fa-book"></i> <span>Laporan Grafik</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>