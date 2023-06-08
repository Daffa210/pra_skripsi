<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {

        var table = $('example').DataTable();


        $("#layanan_id").on('change', function() {
            const id = this.value;
            $.ajax({
                url: "/api/layanan/" + id,
                type: "GET",
                success: function(response) {
                    const harga = response.data.harga_layanan;
                    var berat_cucian = $("#berat_cucian").val();
                    total_bayar = berat_cucian * harga;
                    console.log(total_bayar);
                    $("#total_bayar").text(total_bayar)
                    $("input[name='total_bayar']").val(total_bayar)
                }
            });

        });


        $("#example").on('click ', '#ambil_barang', function() {


            alert('KONFIRMASI PENGAMBILAKN BARNAG');
        })


    });
</script>
