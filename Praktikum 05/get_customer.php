<!-- 
Nama         : 
NIM          :
Tanggal      :
File         : get_customer.php
Deskripsi    : Memberikan detail dari data pengguna yang dipilih
 -->

<?php
// TODO : Koneksi ke basis data


//TODO : Mendapatkan id customer


//TODO : Membuat dan mengeksekusi query untuk memperoleh data customer yang dipilih
$query = " ";
$result = $db->query($query);

//TODO : Cek apakah eksekusi query gagal atau berhasil
if (!$result) {
    
}

//TODO : Tampilkan data customer dengan perulangan while
while ($row = $result->fetch_object()) {
    echo '';
}

//TODO : bebaskan $result dari memory dan tutup koneksi database

?>