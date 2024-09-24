// Nama         : 
// NIM          :
// Tanggal      :
// File         : ajax.js
// Deskripsi    : Fungsi-fungsi javascript yang dipanggil oleh file request

// Fungsi untuk membuat objek XMLHttpRequest
function getXMLHTTPRequest() {
    //TODO: Membuat objek ajax

}

// Server Time
function get_server_time() {
    //TODO: Membuat objek XMLHTTPRequest 
    var xmlHTTP = getXMLHTTPRequest();

    //TODO: Menyiapkan permintaan HTTP

    //TODO: Eksekusi Ajax 
    xmlHTTP.onreadystatechange = function() {

    }
    xmlHTTP.send(null);
}

// Add Customer (Method GET)
function add_customer_get() {
    //TODO: Membuat objek XMLHTTPRequest 

    //TODO: Mendapatkan nilai inputan name, address, city
    

    //TODO: Validasi dan set URL & inner
    if (name != "" && address != "" && city != "") {
        var url = "add_customer_get.php?name=" + name + "&address=" + address + "&city=" + city;
        var inner = "add_response";
        
        //TODO: Menyiapkan permintaan HTTP

        //TODO: Eksekusi Ajax
        xmlHTTP.onreadystatechange = function(){

        }
        xmlHTTP.send(null);
        
    } else {
        //TODO : Membuat alert jika data form kosong

    } 
}


// Add Customer (Method POST)
function add_customer_post() {
    //TODO 1: Membuat objek XMLHTTPRequest 
    

    //TODO 2: Mendapatkan nilai inputan name, address, city
    

    // Validate
    if (name != "" && address != "" && city != ""){
        //TODO 3: set url add_customer_post.php

        //TODO 4: set inner 
        
        //TODO 5: set parameter 

        //TODO 6: open xmlhttp request dengan POST, url secara asinkronus
        
        //TODO 7: set request header
        
        //TODO 8: tampilkan perintah ketika onreadystatechange
        







        //TODO 9: kirim request POST

    }else{
        alert("Please fill all the fields");
    }
}

// Fungsi untuk memanggil ajax
function callAjax(url, inner) {
    //TODO 1: Panggil metode getXMLHTTPRequest()
    
    //TODO 2: open xmlhttp request dengan GET

    //TODO 3: tampilkan perintah ketika onreadystatechange
    







     //TODO 4: kirim request GET
}

// Show Customer Detail
function showCustomer(customerid) {
    //TODO 1: set inner html
    
    //TODO 2: set url dengan parameter customerid

    if (customerid == "") {
        // TODO 3: Mengosongkan elemen html
        
    } else {
        // TODO 4: Menjalankan Fungsi Ajax
        
    }
}

// Tugas Nomor 2 : Search Book By Title (Live search)
function searchBookByTitle(){    
    //TODO 1: Mendapatkan nilai inputan, inner, dan url
    

    if (book_title.trim() === "") {
        document.getElementById(inner).innerHTML = "";
        return;
    }

    // TODO 2: Menjalankan Fungsi Ajax
}

