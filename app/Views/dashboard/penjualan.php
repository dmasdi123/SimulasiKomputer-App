<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Page Simulasi</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url(); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dasboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Febrian Dimas Winaputra</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('/dashboard/penjualan') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/'); ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penjualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
              <li class="breadcrumb-item active">Data Penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Input Data Stock Barang Intel</h2>
              </div>
              <div class="card card-info">
                <form class="form-horizontal">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="ml-1">ID Nota</label>
                        <input type="text" class="form-control mb-2" placeholder="Masukan ID Nota Simulasi">
                        <label class="ml-1">Invoice</label>
                        <input type="number" class="form-control mb-2" disabled>
                        <label class="ml-1">Nama Costumer</label>
                        <input type="text" class="form-control mb-2" placeholder="Masukan Nama">
                      </div>
                      <div class="col-md-6">
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" disabled>
                        <label class="ml-1">No Telp</label>
                        <input type="number" class="form-control mb-2" placeholder="Masukan No Telp">
                        <label class="ml-1">Alamat</label>
                        <input type="text" class="form-control mb-2" placeholder="Masukan Alamat">
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-8">
                        <label>Nama Barang</label>
                      </div>
                      <div class="col-md-1">
                        <label>Qty</label>
                      </div>
                      <div class="col-md-3">
                        <label>Harga</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Nama Barang">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPenjualan">
                            Cari
                          </button>
                        </div>
                      </div>
                      <div class="col-1">
                        <input type="text" class="form-control" placeholder="Qty">
                      </div>
                      <div class="col-3">
                        <input type="text" class="form-control" placeholder="Harga">
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col text-center">
                        <button class="btn btn-primary btn-lg" type="button">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th width="20%">Nama Barang</th>
                      <th>Qty</th>
                      <th>Harga</th>
                      <th>Total Harga</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td width="20%">Lorem, ipsum dolor sit a</td>
                      <td>4</td>
                      <td>Rp. 450.000</td>
                      <td>Rp. 6.000.000</td>
                      <td class="text-center">
                        <button class="btn btn-primary w-20" type="button">Print Nota</button>
                        <button class="btn btn-danger">Hapus</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- modal data barang penjualan -->
<div class="modal fade" id="exampleModalPenjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Daftar Barang</h3>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <table class="table table-bordered">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">BR001</th>
                  <td>Galax Geforce RTX 2060 6GB DDR6 - Dual Fan</td>
                  <td class="text-center">4</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
                <tr>
                  <th scope="row">BR002</th>
                  <td>AM4 Raven Ridge Ryzen 3 2200G 3.5 Ghz Box</td>
                  <td class="text-center">6</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
                <tr>
                  <th scope="row">BR003</th>
                  <td>ASRock X570 Phantom Gaming X</td>
                  <td class="text-center">3</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
                <tr>
                  <th scope="row">BR004</th>
                  <td>ASRock X570 Phantom Gaming X</td>
                  <td class="text-center">3</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
                <tr>
                  <th scope="row">BR005</th>
                  <td>ASRock X570 Phantom Gaming X</td>
                  <td class="text-center">3</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
                <tr>
                  <th scope="row">BR006</th>
                  <td>ASRock X570 Phantom Gaming X</td>
                  <td class="text-center">3</td>
                  <td class="text-center"><button type="button" class="btn btn-success">Tambah</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="redirect();">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal data barang penjualan end -->
<?= $this->endSection(); ?>