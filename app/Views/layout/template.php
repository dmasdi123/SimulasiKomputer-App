<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/asset/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css" />
</head>

<body class="hold-transition sidebar-mini">



    <?= $this->renderSection('content'); ?>



    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/asset/js/adminlte.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<script>
    function modalshow() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
            keyboard: false

        })
        myModal.show()
    }
</script>
<script>
    $(document).ready(function() {
        $("#tbl-barang").DataTable();
        $("#tbl-simulasi").DataTable();
        $("#tbl-transaksi").DataTable();
        $("#btnsimulasi").attr("style", "visibility: hidden");
        $("#detail_sm").attr("style", "visibility: hidden");
        $("#detail_sm").css("position", "absolute");
        loadlistpj();

    });
</script>

<!-- generate nota simulasi to penjualan -->
<script>
    $("#simulasi").keyup(function() {
        $("#penjualan").attr("style", "visibility: visible");
        $("#btnsimulasi").attr("style", "visibility: hidden");
        $("#detail_sm").attr("style", "visibility: hidden");
        $("#detail_sm").css("position", "absolute");
        var inv = $(this).val();
        // menampilkan detail barang dll
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>/dashboard/showsimulasi',
            dataType: "JSON",
            data: {
                id: inv
            },
            success: function(result) {
                var html = '';
                for (var i = 0; i < result.length; i++) {
                    var no = parseInt(i);
                    no++;
                    var satuan = result[i].harga_jual / result[i].qty;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td><input type="text" size="80" style="border: none; pointer-events: none;" name="barang[]" value="' + result[i].nama_brg + '"></input><input type="text" name="idbarang[]" value="' + result[i].id_barang + '" hidden></input><input type="text" name="id_sm[]" value="' + result[i].id_notas + '" hidden></input></td>' +
                        '<td>' + satuan + '</td>' +
                        '<td><input type="text" style="width:50%; border: none; pointer-events: none;" name="qty[]" value="' + result[i].qty + '"></input></td>' +
                        '<td><input type="text" style="width:100%; border: none; pointer-events: none;" name="harga[]" value="' + result[i].harga_jual + '"></input></td>' +
                        '</tr>';

                    // input data pemesan
                    $('#cust_sm').val(result[i].customer);
                    $('#hp_sm').val(result[i].notelp);
                    $('#alamat_sm').val(result[i].alamat);

                    $("#penjualan").attr("style", "visibility: hidden");
                    $("#penjualan").css("position", "absolute");
                    $("#btnsimulasi").attr("style", "visibility: visible");
                    $("#detail_sm").attr("style", "visibility: visible");

                    $('#nama_brgpj').val('');
                    $('#qtypj').val('');
                    $('#harga_jualpj').val('');

                }
                $('#data-cart').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });

        // menampilkan grandtotal
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>/dashboard/getSumPriceSM',
            dataType: "JSON",
            data: {
                id: inv
            },
            success: function(result) {
                for (var i = 0; i < result.length; i++) {
                    $("#gtotal").val(result[i].harga_jual);

                }
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    })
</script>

<!-- crud simuasi with ajax -->
<script>
    $("#btnsimulasi").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>/dashboard/insertData',
            data: $("#form_sm").serialize(), //ambil semua data di dalam form
            success: function() {
                swal("Berhasil!", "Penjualan berhasil disimpan", "success").then((oke) => {
                    modalshow();
                });


            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        })
    })
</script>

<!-- load list penjualan -->
<script>
    function loadlistpj() {
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>/dashboard/showlist',
            data: 'inv=' + $('input[name=invoice]').val(),
            dataType: "JSON",
            success: function(result) {
                var html = '';
                for (var i = 0; i < result.length; i++) {
                    var no = parseInt(i);
                    no++;
                    var satuan = result[i].harga_jual / result[i].qty;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td><input type="text" style="width:50%; border: none; pointer-events: none;" name="nmbrg" value="' + result[i].nama_brg + '"></input></td>' +
                        '<td>' + satuan + '</td>' +
                        '<td>' + result[i].qty + '</td>' +
                        '<td>' + result[i].harga_jual + '</td>' +
                        '<td><a class="deletelist" href="/dashboard/delete?id=' + result[i].id_pj + '"><button class="btn btn-danger" onclick="deletelist()" type="button"><i class="fas fa-trash"></i></button></td>' +
                        '</tr>';
                }
                $('#data-cart').html(html);


            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }


        })
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>/dashboard/getSumPricePJ',
            data: 'inv=' + $('input[name=invoice]').val(),
            dataType: "JSON",
            success: function(result) {
                for (var i = 0; i < result.length; i++) {
                    $("#gtotal").val(result[i].harga_jual);

                }

            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }


        })

    }
</script>

<!-- delete item from load list penjualan -->
<script>
    function deletelist() {
        $(".deletelist").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: $(this).attr('href'), //data dikirim dari a href
                dataType: "JSON",
                success: function() {
                    loadlistpj();
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    }
</script>

<!-- crud tambah penjualan with ajax -->
<script>
    $("#btntambah").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>/dashboard/insertPenjualan',
            data: $("#form_pj").serialize(), //ambil semua data di dalam form
            success: function() {
                loadlistpj();
                $('#nama_brgpj').val('');
                $('#qtypj').val('');
                $('#harga_jualpj').val('');

            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                // alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                swal("Oops!", "Data barang tidak boleh kosong!", "warning");
            }
        })
    })
</script>

<!-- add nama barang di kolom penjualan with ajax -->
<script>
    $(".addbrg").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: $(this).attr('href'), //data dikirim dari a href
            dataType: "JSON",
            success: function(result) {
                for (var i = 0; i < result.length; i++) {
                    $("#nama_brgpj").val(result[i].nama_barang);
                    $("#harga_jualpj").val(result[i].harga_jual);
                    $("#id_brg").val(result[i].id_barang);

                }
            },
            error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        })
    })
</script>

<!-- cetak nota penjualan not from simulasi -->
<script>
    $("#penjualan").click(function(e) {
        e.preventDefault();
        swal({
                title: "Apakah anda yakin?",
                text: "Pastikan dan periksa nama barang dan harga dengan benar!",
                icon: "warning",
                buttons: true,
            })
            .then((oke) => {
                if (oke) {
                    modalshow();
                } else {
                    swal("Gagal prosess checkout penjualan!!");
                }
            });

    })
</script>


</html>