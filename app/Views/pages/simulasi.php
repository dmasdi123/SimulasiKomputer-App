<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form action="">
        <div class="row justify-content-center">
            <h4 style="margin-top: 9%;">Simulasi PC Rakitan</h4>
            <hr>

        </div>
        <br>
        <!-- radio button intel / amd -->
        Short by :
        <a href="/simulasi/Intel">
            <button type="button" class="btn btn-primary">Intel</button>
        </a>
        <a href="/simulasi/AMD">
            <button type="button" class="btn btn-danger">AMD</button>
        </a>
        <!-- end -->
        <br>
        <br>
        <div class="row">
            <div class="col-md-7 sm-12">Nama Barang</div>
            <div class="col-md-1 sm-12">Qty :</div>
            <div class="col-md-4 sm-12">Harga :</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Prosessor</option>
                    <?php foreach ($barangproc as $p) : ?>

                        <option value="<?= $p['id_barang']; ?>"><?= $p['nama_barang']; ?> (Rp.<?= number_format($p['harga_jual']); ?>)</option>

                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_proc" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_proc" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="mobo" aria-label="Default select example" name="mobo">
                    <option selected>Motherboard</option>
                    <?php foreach ($barangmb as $mb) : ?>
                        <option value="<?= $mb['id_barang']; ?>"><?= $mb['nama_barang']; ?> (Rp.<?= number_format($mb['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_mobo" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_mobo" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="ram" aria-label="Default select example" name="proc">
                    <option selected>RAM</option>
                    <?php foreach ($barangram as $ram) : ?>
                        <option value="<?= $ram['id_barang']; ?>"><?= $ram['nama_barang']; ?> (Rp.<?= number_format($ram['harga_jual']); ?>)</option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" id="qty_ram" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_ram" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="vga" aria-label="Default select example" name="vga">
                    <option selected>VGA</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Power Supply</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Hardisk</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>SSD</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Casing</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Fan / Cooler</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Peripheral</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Monitor</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2 bg-success bg-gradient rounded-3 text-white">
                <h5 class="mt-2 text-center">Total :</h5>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_all" class="form-control sm" disabled>
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_all" class="form-control" placeholder="Rp." disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 sm-12 mt-2">
                <div class="card text-center">
                    <div class="card-header">
                        Masukan Data Diri
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="input-group mb-2">
                            <span class="input-group-text bg-primary text-white" id="addon-wrapping">Nama</span>
                            <input type="text" class="form-control" placeholder="Masukan Nama" aria-label="Username" aria-describedby="addon-wrapping">

                        </div>
                        <div class="input-group ">
                            <span class="input-group-text bg-primary text-white" id="addon-wrapping">No.Hp</span>
                            <input type="text" class="form-control" placeholder="Masukan Alamat" aria-label="Username" aria-describedby="addon-wrapping">

                        </div>
                        <br>
                        <div class="input-group ">
                            <div class="form-floating w-100">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-12 mt-2">
                <div class="alert alert-warning" role="alert">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto dolor omnis facilis nemo vero
                    eius! Necessitatibus nobis excepturi dolorum, ad, sit, dolorem ipsam laboriosam blanditiis
                    architecto porro quaerat cum sequi?
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 sm-6 text-center">
                <button class="btn btn-primary w-20" type="button">Print Preview</button>
                <button class="btn btn-primary w-20" type="button">Cetak Simulasi</button>
            </div>
        </div>
    </form>
</div>
<br>
<br>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(''); ?>