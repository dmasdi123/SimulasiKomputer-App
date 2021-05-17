<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title><?= $title; ?></title>
</head>

<body style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <div class="container">
        <!-- table header judul dll -->
        <form action="/view_simulasi/simpan" method="POST">
            <table class="mb-3 table table-borderless" style="width: 100%;">
                <tr>
                    <td><img style="width: 80%;" src="/img/LOGOCMsm.png" alt="Logo"></td>
                    <td width="30%">
                        <h6>Nota Simulasi</h6>
                    </td>

                    <td width="30%">
                        <div class="info" style="float: right;">
                            Inv : <input type="text" size="10" name="inv" style="border: none; pointer-events: none;" readonly value="<?php foreach ($autoinv as $inv) : ?>SM/MTK/<?= $inv['inv_sm'] + 1; ?><?php endforeach; ?>"><br>
                            Date : <input type="text" size="10" name="tgl" style="border: none; pointer-events: none;" readonly value="<?= date('Y-m-d'); ?>">
                        </div>
                    </td>
                </tr>

            </table>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="text-center table-light">
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col" width="">Harga (Rp.)</th>
                        <th scope="col" width="2%" class="text-center">Jumlah</th>
                        <th scope="col" width="">Subtotal (Rp.)</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php if (!$proc1 or !$qtyprc or !$hrgprc) {
                            $proc1 = "";
                            $qtyprc = "";
                            $hrgprc = "";
                        } else {
                        ?>
                            <?php foreach ($proc1 as $p) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $p['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlprc = $hrgprc / $qtyprc); ?>" readonly> </td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyprc; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgprc; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($prc = $hrgprc); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$mobo or !$qtymb or !$hrgmb) {
                            $mobo = "";
                            $qtymb = "";
                            $hrgmb = "";
                        } else {
                        ?>
                            <?php foreach ($mobo as $mb) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $mb['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlmb = $hrgmb / $qtymb); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtymb; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgmb; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($mb = $hrgmb); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$ram or !$qtyram or !$hrgram) {
                            $ram = "";
                            $qtyram = "";
                            $hrgram = "";
                        } else {
                        ?>
                            <?php foreach ($ram as $r) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $r['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlram = $hrgram / $qtyram); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyram; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgram; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($ram = $hrgram); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$vga or !$qtyvga or !$hrgvga) {
                            $vga = "";
                            $qtyvga = "";
                            $hrgvga = "";
                        } else {
                        ?>
                            <?php foreach ($vga as $v) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $v['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlvga = $hrgvga / $qtyvga); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyvga; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgvga; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($vga = $hrgvga); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$psu or !$qtypsu or !$hrgpsu) {
                            $psu = "";
                            $qtypsu = "";
                            $hrgpsu = "";
                        } else {
                        ?>
                            <?php foreach ($psu as $ps) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $ps['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlpsu = $hrgpsu / $qtypsu); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtypsu; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgpsu; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($psu = $hrgpsu); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$hdd or !$qtyhdd or !$hrghdd) {
                            $hdd = "";
                            $qtyhdd = "";
                            $hrghdd = "";
                        } else {
                        ?>
                            <?php foreach ($hdd as $hd) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $hd['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlhdd = $hrghdd / $qtyhdd); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyhdd; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrghdd; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($hd = $hrghdd); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$ssd or !$qtyssd or !$hrgssd) {
                            $ssd = "";
                            $qtyssd = "";
                            $hrgssd = "";
                        } else {
                        ?>
                            <?php foreach ($ssd as $sd) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $sd['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlssd = $hrgssd / $qtyssd); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyssd; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgssd; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($sd = $hrgssd); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$case or !$qtycase or !$hrgcase) {
                            $case = "";
                            $qtycase = "";
                            $hrgcase = "";
                        } else {
                        ?>
                            <?php foreach ($case as $cs) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $cs['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlcase = $hrgcase / $qtycase); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtycase; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgcase; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($case = $hrgcase); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$cooler or !$qtycooler or !$hrgcooler) {
                            $cooler = "";
                            $qtycooler = "";
                            $hrgcooler = "";
                        } else {
                        ?>
                            <?php foreach ($cooler as $col) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $col['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlcooler = $hrgcooler / $qtycooler); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtycooler; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgcooler; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($col = $hrgcooler); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$peri or !$qtyperi or !$hrgperi) {
                            $peri = "";
                            $qtyperi = "";
                            $hrgperi = "";
                        } else {
                        ?>
                            <?php foreach ($peri as $per) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $per['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlperi = $hrgperi / $qtyperi); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtyperi; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgperi; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($per = $hrgperi); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>
                    <tr>
                        <?php if (!$monitor or !$qtymonitor or !$hrgmonitor) {
                            $monitor = "";
                            $qtymonitor = "";
                            $hrgmonitor = "";
                        } else {
                        ?>
                            <?php foreach ($monitor as $mon) : ?>
                                <td><input size="40" type="text" name="s_barang[]" value="<?= $mon['nama_barang']; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <?php endforeach; ?>

                            <td><input size="10" class="text-center" type="text" style="border: none; pointer-events: none;" value="<?= number_format($ttlmonitor = $hrgmonitor / $qtymonitor); ?>" readonly></td>
                            <td><input size="3" class="text-center" type="text" name="qs_barang[]" value="<?= $qtymonitor; ?>" style="border: none; pointer-events: none;" readonly></td>
                            <td><input type="text" class="text-center" name="hs_barang[]" value="<?= $hrgmonitor; ?>" style="border: none; pointer-events: none;" readonly hidden>
                                <div class="text-center"><?= number_format($mon = $hrgmonitor); ?></div>
                            </td>
                        <?php
                        } ?>

                    </tr>


                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <td colspan="3">
                            <div class="total" style="float: right;">
                                <h6>Grand Total (Rp) :</h6>
                            </div>
                        </td>
                        <td>
                            <h6><?= number_format($g_total); ?></h6>
                        </td>
                    </tr>
                </tfoot>

            </table>
            <?php
            if (!$nama or !$hp or !$alamat) {
                $nama = "";
                $hp = "";
                $alamat = "";
            } else {
            ?>
                <table style="float: right;">
                    <tr>
                        <td><strong>Detail Pemesan</strong></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" size="" name="nama" style="border: none; pointer-events: none;" readonly value="<?= $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>No. hp</td>
                        <td>:</td>
                        <td><input type="text" size="5" name="hp" style="border: none; pointer-events: none;" readonly value="<?= $hp; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" style="border: none; pointer-events: none;" readonly value="<?= $alamat; ?>"></td>
                    </tr>
                </table>
            <?php
            }
            ?>

            <button class="btn btn-primary" id="simpan">Simpan</button>
            <button class="btn btn-primary" type="button" id="print">Print</button>
        </form>
    </div>
</body>
<script>
    $("#print").click(function() {
        $("#print").attr("style", "visibility: hidden");
        $("#simpan").attr("style", "visibility: hidden");
        window.print();
        $("#print").attr("style", "visibility: visible");
        $("#simpan").attr("style", "visibility: visible");
    })
</script>

</html>