<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
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
                            var pricemb = result[i].harga_jual;
                            totalmb = qtymb * pricemb;
                            $("#out_mobo").val(totalmb)

                        }
                        total1 = totalp + totalmb
                        qty1 = qty + qtymb
                        $("#out_all").val(total1);
                        $("#qty_all").val(qty1);

                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                })
            })
        })


    });






    // $("#qty_mobo").keyup(function() {
    //     qty_mb = parseInt($(this).val());
    //     var mobo = 1400000;
    //     jml_mb = qty_mb * mobo;
    //     jml1 = jml_proc + jml_mb;
    //     qty1 = qty_proc + qty_mb;
    //     $("#out_mobo").val(jml_mb);
    //     $("#out_all").val(jml1);
    //     $("#qty_all").val(qty1);
    // });

    // $("#qty_ram").keyup(function() {
    //     qty_ram = parseInt($(this).val());
    //     var ram = 500000;
    //     jml_ram = qty_ram * ram;
    //     jml2 = jml_proc + jml_ram + jml_mb;
    //     qty2 = qty_proc + qty_ram + qty_mb;
    //     $("#out_ram").val(jml_ram);
    //     $("#out_all").val(jml2);
    //     $("#qty_all").val(qty2);
    // });
</script>

</body>

</html>