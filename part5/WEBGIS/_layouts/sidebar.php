<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="WhatsApp Image 2023-05-18 at 19.21.37.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$session->get("nama_pengguna")?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigasi</li>
        <li>
          <a href="<?=url('beranda')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li>
          <a href="<?=url('coba')?>">
            <i class="fa fa-address-card-o"></i> <span>Coba</span>
          </a>
        </li>
        <li>
          <a href="<?=url('cobaa')?>">
            <i class="fa fa-address-card-o"></i> <span>Cobaa</span>
          </a>
        </li>
        <li>
          <a href="<?=url('provinsi')?>">
            <i class="fa fa-address-card-o"></i> <span>Provinsi</span>
          </a>
        </li>
        <li>
          <a href="<?=url('pengguna')?>">
            <i class="fa fa-address-card-o"></i> <span>Pengguna</span>
          </a>
        </li>
        <li>
          <a href="<?=url('kabupaten')?>">
            <i class="fa fa-database"></i> <span>Kabupaten</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?=url('peta')?>">
            <i class="fa fa-map-marker"></i>
            <span>Peta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> Provinsi</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Kabupaten</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
          </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker"></i>
            <span>Peta</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li>
          <a href="<?=url('keluar')?>">
            <i class="fa fa-sign-out"></i> <span>Keluar</span>
          </a>
        </li>
        <!-- sidebar percobaan -->

        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>