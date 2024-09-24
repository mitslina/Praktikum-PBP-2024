<!-- 
Nama         : 
NIM          :
Tanggal      :
File       : add_customer_get.php
Deskripsi  : Menyimpan inputan form ke basis data dan menampilkan respon berupa konfirmasi hasil query menggunakan method GET
 -->
<?php
    //TODO: Koneksi ke database

    //TODO: Dapatkan nilai inputan form



    //TODO: Buat dan eksekusi query
    

    if (!$result) {
        echo '<div class="alert alert-danger alert-dismissible">
        <strong>Error!</strong> Could not query the database<br>'.
        $db->error.'<br>query = ',$query.
        '</div>';
    } else {
        //TODO: Tampilkan alert berupa data dengan GET






    }
    
    // TODO: Tutup koneksi database
    
?>