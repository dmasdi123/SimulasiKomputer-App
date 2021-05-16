<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form action="/view_simulasi" method="POST" target="_blank">
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
                    <option value="" selected>Prosessor</option>
                    <?php foreach ($barangproc as $p) : ?>

                        <option value="<?= $p['id_barang']; ?>"><?= $p['nama_barang']; ?> (Rp.<?= number_format($p['harga_jual']); ?>)</option>

                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_proc" name="qty_proc" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_proc" name="out_proc" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="mobo" aria-label="Default select example" name="mobo">
                    <option value="" selected>Motherboard</option>
                    <?php foreach ($barangmb as $mb) : ?>
                        <option value="<?= $mb['id_barang']; ?>"><?= $mb['nama_barang']; ?> (Rp.<?= number_format($mb['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_mobo" name="qty_mobo" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_mobo" name="out_mobo" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="ram" aria-label="Default select example" name="ram">
                    <option value="" selected>RAM</option>
                    <?php foreach ($barangram as $ram) : ?>
                        <option value="<?= $ram['id_barang']; ?>"><?= $ram['nama_barang']; ?> (Rp.<?= number_format($ram['harga_jual']); ?>)</option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_ram" name="qty_ram" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_ram" name="out_ram" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="vga" aria-label="Default select example" name="vga">
                    <option value="" selected>VGA</option>
                    <?php foreach ($barangvga as $vga) : ?>
                        <option value="<?= $vga['id_barang']; ?>"><?= $vga['nama_barang']; ?> (Rp.<?= number_format($vga['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_vga" name="qty_vga" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_vga" name="out_vga" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="psu" aria-label="Default select example" name="psu">
                    <option value="" selected>Power Supply</option>
                    <?php foreach ($barangpsu as $psu) : ?>
                        <option value="<?= $psu['id_barang']; ?>"><?= $psu['nama_barang']; ?> (Rp.<?= number_format($psu['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_psu" name="qty_psu" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_psu" name="out_psu" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="hdd" aria-label="Default select example" name="hdd">
                    <option value="" selected>Hardisk</option>
                    <?php foreach ($baranghdd as $hdd) : ?>
                        <option value="<?= $hdd['id_barang']; ?>"><?= $hdd['nama_barang']; ?> (Rp.<?= number_format($hdd['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_hdd" name="qty_hdd" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_hdd" name="out_hdd" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="ssd" aria-label="Default select example" name="ssd">
                    <option value="" selected>SSD</option>
                    <?php foreach ($barangssd as $ssd) : ?>
                        <option value="<?= $ssd['id_barang']; ?>"><?= $ssd['nama_barang']; ?> (Rp.<?= number_format($ssd['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_ssd" name="qty_ssd" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_ssd" name="out_ssd" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="case" aria-label="Default select example" name="case">
                    <option value="" selected>Casing</option>
                    <?php foreach ($barangcase as $case) : ?>
                        <option value="<?= $case['id_barang']; ?>"><?= $case['nama_barang']; ?> (Rp.<?= number_format($case['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_case" name="qty_case" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_case" name="out_case" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row justify-content-center">
            <h5 style="margin-top: 2%;">Optional</h5>
            <hr>

        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="cooler" aria-label="Default select example" name="cooler">
                    <option value="" selected>Fan / Cooler</option>
                    <?php foreach ($barangcooler as $cooler) : ?>
                        <option value="<?= $cooler['id_barang']; ?>"><?= $cooler['nama_barang']; ?> (Rp.<?= number_format($cooler['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_cooler" name="qty_cooler" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_cooler" name="out_cooler" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="per" aria-label="Default select example" name="per">
                    <option value="" selected>Peripheral</option>
                    <?php foreach ($barangperiperal as $per) : ?>
                        <option value="<?= $per['id_barang']; ?>"><?= $per['nama_barang']; ?> (Rp.<?= number_format($per['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_per" name="qty_per" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_per" name="out_per" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="monitor" aria-label="Default select example" name="monitor">
                    <option value="" selected>Monitor</option>
                    <?php foreach ($barangmonitor as $mon) : ?>
                        <option value="<?= $mon['id_barang']; ?>"><?= $mon['nama_barang']; ?> (Rp.<?= number_format($mon['harga_jual']); ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_mon" name="qty_mon" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_mon" name="out_mon" class="form-control" placeholder="Rp. " readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2 bg-success bg-gradient rounded-3 text-white">
                <h5 class="mt-2 text-center">Total :</h5>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="text" id="qty_all" class="form-control sm" readonly>
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_all" class="form-control" placeholder="Rp." readonly>
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
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" aria-label="Username" aria-describedby="addon-wrapping">

                        </div>
                        <div class="input-group ">
                            <span class="input-group-text bg-primary text-white" id="addon-wrapping">No.Hp</span>
                            <input type="text" name="hp" class="form-control" placeholder="Masukan No HP" aria-label="Username" aria-describedby="addon-wrapping">

                        </div>
                        <br>
                        <div class="input-group ">
                            <div class="form-floating w-100">
                                <textarea class="form-control" name="alamat" placeholder="Masukan alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Alamat</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-12 mt-2">
                <div class="alert alert-warning" role="alert">
                    Silahkan isi <strong>Data Diri</strong> jika ingin melakukan pembelian
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 sm-6 text-center">
                <button class="btn btn-primary w-20" type="submit">Preview</button>
                <!-- <button class="btn btn-primary w-20" type="button">Cetak Simulasi</button> -->
            </div>
        </div>
    </form>
</div>
<br>
<br>
<?= $this->include('layout/footer'); ?>
<?= $this->endSection(''); ?>