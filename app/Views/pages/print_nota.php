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
        <table class="mb-3 table table-borderless" style="width: 100%;">
            <tr>
                <td><img style="width: 80%;" src="/img/LOGOCMsm.png" alt="Logo"></td>
                <td width="30%">
                    <h6>Nota Penjualan</h6>
                </td>

                <td width="30%">
                    <div class="info"><?php foreach ($detail as $info) : ?> <?php endforeach; ?>
                        Inv : <?= $info['invoice']; ?> <br>
                        Date :<?= $info['created_at']; ?> <br>
                        Name :<?= $info['cutomer']; ?> <br>
                        Hp :<?= $info['notelp']; ?> <br>
                        Alamat :<?= $info['alamat']; ?>
                    </div>
                </td>
            </tr>

        </table>
        <table class="table">
            <thead class=" table-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col" width="">Harga (Rp.)</th>
                    <th scope="col" width="2%" class="text-center">Jumlah</th>
                    <th scope="col" width="">Subtotal (Rp.)</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($detail as $nota) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $nota['nama_brg']; ?></td>
                        <td><?= number_format($nota['harga_jual'] / $nota['qty']); ?></td>
                        <td align="center"><?= $nota['qty']; ?></td>
                        <td><?= number_format($nota['harga_jual']); ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
            <tfoot class="table-light">
                <tr>
                    <td colspan="3">
                        <div class="total" style="float: right;">
                            <h6>Grand Total (Rp) :</h6>
                        </div>
                    </td>
                    <td>

                    </td>
                </tr>
            </tfoot>

        </table>

    </div>
</body>
<!-- <script type="text/javascript">
    window.print();
</script> -->

</html>