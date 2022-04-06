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
        <a href="/simulasi" class="nav-link" target="_blank">Page Simulasi</a>
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
      <img src="<?= base_url() ?>/asset/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dasboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/asset/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_admin') ?></a>
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
                <a href="/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/dashboard/masterbarang') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Auth/logout" class="nav-link">
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
            <h1 class="m-0">Master Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
              <li class="breadcrumb-item active">Master Barang</li>
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
                <h2 class="card-title">Input Master Barang</h2>
              </div>
              <?php if (session()->getFlashData('pesan')) :  ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashData('pesan'); ?>
                </div>
              <?php endif; ?>
              <div class="card card-info">
                <form class="form-horizontal" action="<?= base_url() ?>/Dashboard/save" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body ">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                        <label class="ml-1" hidden>No Faktur</label>
                        <input type="text" class="form-control mb-2" id_barang="id_barang" name="id_barang" value="<?= $autoinv; ?>" autofocus hidden>
                        <div class="invalid-feedback">
                          <?= $validation->getError('id_barang'); ?>
                        </div>
                        <label class="ml-1">Nama Barang</label>
                        <div class="input-group mb-2">
                          <input type="text" class="form-control <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="nama_barang" name="nama_barang" autofocus value="<?= old('nama_barang'); ?>" placeholder="Nama Barang">
                          <div class="invalid-feedback">
                            <?= $validation->getError('nama_barang'); ?>
                          </div>
                          <button type="button" onclick="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPembelian">
                            Daftar Barang
                          </button>
                        </div>
                        <label class="ml-1">Jumlah</label>
                        <input type="text" class="form-control mb-2 <?= ($validation->hasError('qty')) ? 'is-invalid' : ''; ?>" id="qty" name="qty" autofocus value="<?= old('qty'); ?>">
                        <div class="invalid-feedback">
                          <?= $validation->getError('qty'); ?>
                        </div>
                        <label class="ml-1">Harga Beli</label>
                        <input type="text" class="form-control mb-2 <?= ($validation->hasError('harga_beli')) ? 'is-invalid' : ''; ?>" id="harga_beli" name="harga_beli" autofocus value="<?= old('harga_beli'); ?>">
                        <div class="invalid-feedback">
                          <?= $validation->getError('harga_beli'); ?>
                        </div>
                        <label class="ml-1">Harga Jual</label>
                        <input type="text" class="form-control mb-2 <?= ($validation->hasError('harga_jual')) ? 'is-invalid' : ''; ?>" id="harga_jual" name="harga_jual" autofocus value="<?= old('harga_jual'); ?>">
                        <div class="invalid-feedback">
                          <?= $validation->getError('harga_jual'); ?>
                        </div>
                        <label class="ml-1">Kategori</label>
                        <select class="custom-select mb-2 <?= ($validation->hasError('power')) ? 'is-invalid' : ''; ?>" id="inputGroupSelect02" id="power" name="power" value="<?= old('power'); ?>">
                          <option selected>Pilih Kategori...</option>
                          <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kat']; ?></option>
                          <?php endforeach; ?>

                        </select>

                        <div class="invalid-feedback">
                          <?= $validation->getError('power'); ?>
                        </div>
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                        <input type="text" class="form-control mb-2" name="id_admin" value="<?= session()->get('id_adm') ?>" hidden>
                        <button class="btn btn-primary btn-md btn-block mt-3" type="submit">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- <a href="/dashboard/data_barang" target="_blank"><button type="submit" class="btn btn-primary">cek doang</button></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal data barang -->
<div class="modal fade" id="exampleModalPembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Daftar Barang</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <table class="table table-bordered table-responsive-sm" id="tbl-barang">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">Kode</th>
                  <th scope="col">Barang</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Buy</th>
                  <th scope="col">Sell</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody id="show-brg-data">
                <?php foreach ($master as $brg) : ?>
                  <tr>
                    <td><?= $brg['id_barang']; ?></td>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['qty']; ?></td>
                    <td>Rp. <?= number_format($brg['harga_beli']); ?></td>
                    <td>Rp. <?= number_format($brg['harga_jual']); ?></td>
                    <td align="center">
                      <a href="" target="_blank"><button class="btn btn-warning"><i class="fas fa-pen-square"></i></button></a>
                      <a href=""><button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ?')"><i class="fas fa-trash"></i></button></a>
                    </td>
                  </tr>
                <?php endforeach; ?>

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