<!--
Nama         : 
NIM          :
Tanggal      :
File         : show_customer.php
Deskripsi    : untuk menampilkan form customer
-->

<?php include('./header.php') ?>
<div class="row w-50 mx-auto mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">Show Customer Data</div>
            <div class="card-body">
                // TODO 2: menampilkan dropdown list data customer dengan fungsi yang dipanggil dari ajax
                <select name="customer" id="customer" class="form-select" onchange="">
                    <option value="">-- Select a Customer --</option>
                    <?php
                    //TODO : Koneksi ke basisdata
                    require(" ");

                    //TODO : Buat dan eksekusi Query untuk mengambil data customer
                    $query = " ";
                    $result = $db->query($query);

                    //TODO : Hentikan program jika eksekusi query tidak berhasil dan tampilkan error
                    if (!$result) {
                        die();
                    }

                    //TODO : Menampilkan hasil result ke elemen option 
                    while ($row = $result->fetch_object()) {

                    }

                    //TODO : bebaskan $result dari memory dan tutup koneksi database 
                    $result->free();
                    $db->close();

                    ?>
                </select>
                <br>
                <div id="detail_customer"></div>
            </div>
        </div>
    </div>
</div>
// TODO 1: include file footer.php