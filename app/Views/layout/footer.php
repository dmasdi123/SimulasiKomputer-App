<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript">
    // $(document).ready(function() {
    $("#proc").change(function() {
        var idproc = $(this).val();
        $("#qty_proc").keyup(function() {
            qty = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idproc
                },
                success: function(result) {
                    // console.log(result)
                    for (var i = 0; i < result.length; i++) {
                        var price = result[i].harga_jual;
                        totalp = qty * price;
                        $("#out_proc").val(totalp)

                    }

                    $("#out_all").val(totalp);
                    $("#qty_all").val(qty);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })

    })

    $("#mobo").change(function() {
        var idmb = $(this).val();
        if (!idmb) {
            $("#qty_mobo").val('')
            $("#out_mobo").val('')
        }
        $("#qty_mobo").keyup(function() {
            qtymb = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idmb
                },
                success: function(result) {
                    // console.log(result)
                    for (var i = 0; i < result.length; i++) {
                        let pricemb = result[i].harga_jual;
                        if (!qtymb) {
                            totalmb = 0;
                            qtymb = 0
                        } else {
                            totalmb = qtymb * pricemb;
                        }
                        // totalmb = qtymb * pricemb;
                        $("#out_mobo").val(totalmb)

                    }
                    total1 = totalp + totalmb;
                    qty1 = qty + qtymb;
                    $("#out_all").val(total1);
                    $("#qty_all").val(qty1);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#ram").change(function() {
        var idram = $(this).val();
        if (!idram) {
            $("#qty_ram").val('')
            $("#out_ram").val('')
        }
        $("#qty_ram").keyup(function() {
            qtyram = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idram
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var priceram = result[i].harga_jual;
                        if (!qtyram) {
                            totalram = 0;
                            qtyram = 0
                        } else {
                            totalram = qtyram * priceram;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_ram").val(totalram)

                    }

                    total2 = total1 + totalram;
                    qty2 = qty1 + qtyram;
                    $("#out_all").val(total2);
                    $("#qty_all").val(qty2);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#vga").change(function() {
        var idvga = $(this).val();
        if (!idvga) {
            $("#qty_vga").val('')
            $("#out_vga").val('')
        }
        $("#qty_vga").keyup(function() {
            qtyvga = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idvga
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricevga = result[i].harga_jual;
                        if (!qtyvga) {
                            totalvga = 0;
                            qtyvga = 0
                        } else {
                            totalvga = qtyvga * pricevga;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_vga").val(totalvga)

                    }

                    total3 = total2 + totalvga;
                    qty3 = qty2 + qtyvga;
                    $("#out_all").val(total3);
                    $("#qty_all").val(qty3);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#psu").change(function() {
        var idpsu = $(this).val();
        if (!idpsu) {
            $("#qty_psu").val('')
            $("#out_psu").val('')
        }
        $("#qty_psu").keyup(function() {
            qtypsu = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idpsu
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricepsu = result[i].harga_jual;
                        if (!qtypsu) {
                            totalpsu = 0;
                            qtypsu = 0
                        } else {
                            totalpsu = qtypsu * pricepsu;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_psu").val(totalpsu)

                    }

                    total4 = total3 + totalpsu;
                    qty4 = qty3 + qtypsu;
                    $("#out_all").val(total4);
                    $("#qty_all").val(qty4);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#hdd").change(function() {
        var idhdd = $(this).val();
        if (!idhdd) {
            $("#qty_hdd").val('')
            $("#out_hdd").val('')
        }
        $("#qty_hdd").keyup(function() {
            qtyhdd = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idhdd
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricehdd = result[i].harga_jual;
                        if (!qtyhdd) {
                            totalhdd = 0;
                            qtyhdd = 0
                        } else {
                            totalhdd = qtyhdd * pricehdd;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_hdd").val(totalhdd)

                    }

                    total5 = total4 + totalhdd;
                    qty5 = qty4 + qtyhdd;
                    $("#out_all").val(total5);
                    $("#qty_all").val(qty5);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#ssd").change(function() {
        var idssd = $(this).val();
        if (!idssd) {
            $("#qty_ssd").val('')
            $("#out_ssd").val('')
        }
        $("#qty_ssd").keyup(function() {
            qtyssd = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idssd
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricessd = result[i].harga_jual;
                        if (!qtyssd) {
                            totalssd = 0;
                            qtyssd = 0
                        } else {
                            totalssd = qtyssd * pricessd;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_ssd").val(totalssd)

                    }

                    total6 = total5 + totalssd;
                    qty6 = qty5 + qtyssd;
                    $("#out_all").val(total6);
                    $("#qty_all").val(qty6);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#case").change(function() {
        var idcase = $(this).val();
        if (!idcase) {
            $("#qty_case").val('')
            $("#out_case").val('')
        }
        $("#qty_case").keyup(function() {
            qtycase = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idcase
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricecase = result[i].harga_jual;
                        if (!qtycase) {
                            totalcase = 0;
                            qtycase = 0
                        } else {
                            totalcase = qtycase * pricecase;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_case").val(totalcase)

                    }

                    total7 = total6 + totalcase;
                    qty7 = qty6 + qtycase;
                    $("#out_all").val(total7);
                    $("#qty_all").val(qty7);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#cooler").change(function() {
        var idcol = $(this).val();
        if (!idcol) {
            $("#qty_cooler").val('')
            $("#out_cooler").val('')
        }
        $("#qty_cooler").keyup(function() {
            qtycol = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idcol
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricecol = result[i].harga_jual;
                        if (!qtycol) {
                            totalcol = 0;
                            qtycol = 0
                        } else {
                            totalcol = qtycol * pricecol;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_cooler").val(totalcol)

                    }

                    total8 = total7 + totalcol;
                    qty8 = qty7 + qtycol;
                    $("#out_all").val(total8);
                    $("#qty_all").val(qty8);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#per").change(function() {
        var idper = $(this).val();
        if (!idper) {
            $("#qty_per").val('')
            $("#out_per").val('')
        }
        $("#qty_per").keyup(function() {
            qtyper = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idper
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var priceper = result[i].harga_jual;
                        if (!qtyper) {
                            totalper = 0;
                            qtyper = 0
                        } else {
                            totalper = qtyper * priceper;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_per").val(totalper)

                    }

                    total9 = total8 + totalper;
                    qty9 = qty8 + qtyper;
                    $("#out_all").val(total9);
                    $("#qty_all").val(qty9);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    $("#monitor").change(function() {
        var idmonitor = $(this).val();
        if (!idmonitor) {
            $("#qty_mon").val('')
            $("#out_mon").val('')
        }
        $("#qty_mon").keyup(function() {
            qtymonitor = parseInt($(this).val());
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/simulasi/getItem',
                dataType: "JSON",
                data: {
                    id: idmonitor
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        var pricemonitor = result[i].harga_jual;
                        if (!qtymonitor) {
                            totalmonitor = 0;
                            qtymonitor = 0
                        } else {
                            totalmonitor = qtymonitor * pricemonitor;
                        }
                        // totalram = qtyram * priceram;
                        $("#out_mon").val(totalmonitor)

                    }

                    total10 = total9 + totalmonitor;
                    qty10 = qty9 + qtymonitor;
                    $("#out_all").val(total10);
                    $("#qty_all").val(qty10);

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    })

    // show modal nota simulasi
    // $("#btn_view").click(function() {
    //     $('#ModalSimulasi').modal('show');
    // })


    // });
</script>

</body>

</html>