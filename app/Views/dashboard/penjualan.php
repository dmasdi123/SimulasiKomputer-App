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
    <a href="#" class="brand-link">
      <img src="<?= base_url(); ?>/asset/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dasboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/asset/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                <a href="<?= base_url('/dashboard') ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/dashboard/masterbarang'); ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Auth/logout" class="nav-link ">
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
                <button class="btn btn-dark" data-toggle="modal" data-target="#ModaldaftarTransaksi" style="float: right;">Daftar transaksi</button>
                <h2 class="card-title"> </h2>
              </div>
              <div class="card card-info">
                <form class="form-horizontal" action="<?= base_url() ?>/Dashboard/insertPenjualan" id="form_pj" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <?php if (session()->getFlashData('warning')) :  ?>
                          <script>
                            swal("Sukses!", "<?= session()->getFlashData('pesan'); ?>", "success");
                          </script>
                        <?php endif; ?>
                        <label class="ml-1">INV Simulasi</label>
                        <div class="input-group">
                          <input type="text" class="form-control mb-2" name="simulasi" id="simulasi" placeholder="Masukan INV Nota Simulasi" value="SM/MTK/">
                          <button type="button" class="btn btn-primary" style="height: 2%;" data-toggle="modal" data-target="#ModalSimulasi">
                            List Simulasi
                          </button>
                        </div>

                        <label class="ml-1">Invoice</label>
                        <input type="text" class="form-control mb-2" name="invoice" value="INV/MTK/<?= $invpj; ?>" readonly>
                        <label class="ml-1">Nama Costumer</label>
                        <input type="text" class="form-control mb-2" id="cust" name="cutomer" placeholder="Masukan Nama">
                      </div>
                      <div class="col-md-6">
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                        <label class="ml-1">No Telp</label>
                        <input type="number" class="form-control mb-2" id="telp" name="notelp" placeholder="Masukan No Telp">
                        <label class="ml-1">Alamat</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamat" placeholder="Masukan Alamat">
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
                        <label>Harga Jual</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="input-group">
                          <input type="text" class="form-control" name="nama_brg" placeholder="Nama Barang" id="nama_brgpj">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPenjualan">
                            Cari
                          </button>
                        </div>
                      </div>
                      <div class="col-1">
                        <input type="number" class="form-control" name="qty" placeholder="Qty" id="qtypj">
                      </div>
                      <div class="col-3">
                        <input type="number" class="form-control" name="harga_jual" placeholder="Harga" id="harga_jualpj">
                        <input type="number" class="form-control" name="id_brg" placeholder="Harga" id="id_brg" hidden>
                        <input type="text" class="form-control" id="id_sm" name="id_sm" value="<?= session()->get('id_adm') ?>" hidden>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col text-center">
                        <button class="btn btn-primary btn-lg" type="submit" id="btntambah">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <form action="/dashboard/insertData" method="POST" id="form_sm">
          <div class="card card-primary" id="detail_sm">
            <div class="card-header">
              <h2 class="card-title">Detail Customer (from simulasi) : </h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <label class="ml-1">Customer</label>
                  <input type="text" class="form-control mb-2" id="cust_sm" name="cust_sm">
                  <input type="text" name="inv_pj" value="INV/MTK/<?= $invpj; ?>" hidden>
                </div>
                <div class="col-md-4">
                  <label class="ml-1">No. Hp</label>
                  <input type="text" class="form-control mb-2" id="hp_sm" name="hp_sm">
                </div>
                <div class="col-md-4">
                  <label class="ml-1">Alamat</label>
                  <input type="text" class="form-control mb-2" id="alamat_sm" name="alamat_sm">
                  <input type="text" class="form-control mb-2" id="id_sm" name="id_adm" value="<?= session()->get('id_adm') ?>" hidden>
                </div>
              </div>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col">
              <div class="card card-primary">
                <div class="card-header">
                  <h2 class="card-title"></h2>
                </div>
                <div class="card-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga (Rp.)</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total (Rp.)</th>
                      </tr>
                    </thead>
                    <tbody id="data-cart">

                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3">
                          <h5 style="float: right;">Grand Total (Rp) :</h5 style="float: right;">
                        </td>
                        <td></td>
                        <td>
                          <input type="text" id="gtotal" style="width:100%; border: none; pointer-events: none;">
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center ">
              <button class="btn btn-primary btn-lg mb-5 " id="penjualan">Checkout</button><br>
              <button class="btn btn-primary btn-lg mb-5 " id="btnsimulasi" type="submit">Checkout Simulasi</button>
            </div>
          </div>
        </form>
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
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <table class="table table-bordered" id="tbl-barang">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Buy</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($masterbrg as $brg) : ?>
                  <tr>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td class="text-center"><?= $brg['qty']; ?></td>
                    <td class="text-center"><?= $brg['harga_beli']; ?></td>
                    <td class="text-center"><a class="addbrg" href="/dashboard/add?id=<?= $brg['id_barang']; ?>"><button data-dismiss="modal" type="button" class="btn btn-success"><i class="fas fa-plus"></i></button></a></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal data barang penjualan end -->
<!-- modal data simulasi -->
<div class="modal fade" id="ModalSimulasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Daftar Antiran Simulasi</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <table class="table table-bordered" id="tbl-simulasi">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">Nota</th>
                  <th scope="col">Customer</th>
                  <th scope="col">No. Hp</th>
                  <th scope="col">Tanggal Input</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($simulasi as $sm) : ?>
                  <tr>
                    <td class="text-center"><?= $sm['no_nota']; ?></td>
                    <td class="text-center"><?= $sm['customer']; ?></td>
                    <td class="text-center"><?= $sm['notelp']; ?></td>
                    <td class="text-center"><?= $sm['tgl_input']; ?></td>
                    <td align="center">
                      <a href="/dashboard/viewsm?inv=<?= $sm['no_nota']; ?>" target="_blank"><button class="btn btn-warning"><i class="fas fa-eye"></i></button></a>
                      <a href="/dashboard/deletesm?inv=<?= $sm['no_nota']; ?>"><button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data <?= $sm['no_nota']; ?> ?')"><i class="fas fa-trash"></i></button></a>
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
<!--  end -->

<!-- modal data daftar transaksi -->
<div class="modal fade" id="ModaldaftarTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Daftar Transaksi</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <table class="table table-bordered" id="tbl-transaksi">
              <thead class="thead-dark text-center">
                <tr>
                  <th scope="col">Nota</th>
                  <th scope="col">Customer</th>
                  <th scope="col">No. Hp</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($transaksi as $tr) : ?>
                  <tr>
                    <td class="text-center"><?= $tr['invoice']; ?></td>
                    <td class="text-center"><?= $tr['cutomer']; ?></td>
                    <td class="text-center"><?= $tr['notelp']; ?></td>
                    <td class="text-center"><?= $tr['alamat']; ?></td>
                    <td class="text-center"><a href="/dashboard/print_nota/<?= substr($tr['invoice'], 8); ?>" target="_blank"><button class="btn btn-warning"><i class="fas fa-info-circle"></i></button></a></td>
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
<!--  end -->

<!-- modal print -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Nota ?</h5>

      </div>
      <div class="modal-body">
        <div class="print" style="margin-left:27%;">
          <img src="/img/print.gif" alt="print">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='/dashboard'">Close</button>
        <a href="/dashboard/print_nota/<?= $invpj; ?>" target="_blank"><button type="submit" class="btn btn-primary">Print</button></a>
      </div>
    </div>
  </div>
</div>
<!-- end print -->

<?= $this->endSection(); ?>