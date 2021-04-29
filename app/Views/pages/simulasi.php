<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form action="">
        <div class="row justify-content-center">
            <h4 style="margin-top: 9%;">Simulasi PC Rakitan</h4>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-7 sm-12">Nama Barang</div>
            <div class="col-md-1 sm-12">Qty :</div>
            <div class="col-md-4 sm-12">Harga :</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="proc" aria-label="Default select example" name="proc">
                    <option selected>Prosessor</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" id="qty_proc" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_proc" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="mobo" aria-label="Default select example" name="proc">
                    <option selected>Motherboard</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 sm-12 mt-2">
                <input type="number" id="qty_mobo" class="form-control sm">
            </div>
            <div class="col-md-4 sm-12 mt-2">
                <input type="text" id="out_mobo" class="form-control" placeholder="Harga" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-7 sm-12 mt-2">
                <select class="form-select" id="ram" aria-label="Default select example" name="proc">
                    <option selected>RAM</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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
                    <option selected>Open this select menu</option>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script>
    $("#qty_proc").keyup(function() {
        qty_proc = parseInt($(this).val());
        var proc = 2000000;
        jml_proc = qty_proc * proc;
        $("#out_proc").val(jml_proc);
        $("#out_all").val(jml_proc);
        $("#qty_all").val(qty_proc);
    });

    $("#qty_mobo").keyup(function() {
        qty_mb = parseInt($(this).val());
        var mobo = 1400000;
        jml_mb = qty_mb * mobo;
        jml1 = jml_proc + jml_mb;
        qty1 = qty_proc + qty_mb;
        $("#out_mobo").val(jml_mb);
        $("#out_all").val(jml1);
        $("#qty_all").val(qty1);
    });

    $("#qty_ram").keyup(function() {
        qty_ram = parseInt($(this).val());
        var ram = 500000;
        jml_ram = qty_ram * ram;
        jml2 = jml_proc + jml_ram + jml_mb;
        qty2 = qty_proc + qty_ram + qty_mb;
        $("#out_ram").val(jml_ram);
        $("#out_all").val(jml2);
        $("#qty_all").val(qty2);
    });
</script>

</body>

</html>
<?= $this->endSection(''); ?>