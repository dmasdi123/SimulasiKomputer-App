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
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dasboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="/dashboard/penjualan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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
            <h1 class="m-0">Data Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
              <li class="breadcrumb-item active">Data Pembelian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content ">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Input Data Pembelian</h2>
              </div>
              <div class="card card-info">
                <form class="form-horizontal">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <label class="ml-1">No Faktur</label>
                        <input type="text" class="form-control mb-2" disabled>
                        <label class="ml-1">Nama Barang</label>
                        <div class="input-group mb-2">
                          <input type="text" class="form-control" placeholder="Nama Barang">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPembelian">
                            Cari
                          </button>
                        </div>
                        <label class="ml-1">Satuan</label>
                        <input type="number" class="form-control mb-2">
                        <label class="ml-1">Jumlah</label>
                        <input type="number" class="form-control mb-2">
                        <label class="ml-1">Harga Beli</label>
                        <input type="number" class="form-control mb-2">
                        <label class="ml-1">Tanggal Beli</label>
                        <input type="date" class="form-control mb-2" disabled>
                        <button class="btn btn-primary btn-md btn-block mt-3" type="button">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal data barang penjualan -->
<div class="modal fade" id="exampleModalPembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!-- modal end -->
<?= $this->endSection(); ?>