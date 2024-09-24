<!-- 
Nama         : 
NIM          :
Tanggal      :
File       : get_book.php
Deskripsi  : Mencari data buku berdasarkan judul buku yang di-request menggunakan ajax dan menampilkan detail buku sesuai inputan
 -->
<?php
// TODO : Koneksi ke basis data


//TODO : Mendapatkan judul buku


//TODO : Membuat dan mengeksekusi query untuk memperoleh data buku yang dicari
$query = " ";

$result = $db->query($query);

//TODO : Cek apakah eksekusi query gagal atau berhasil
if (!$result) {
    
}

//TODO : Tampilkan data customer dengan perulangan while
while($row = $result->fetch_object()){
    
}

//TODO : bebaskan $result dari memory dan tutup koneksi database


?>