<?php
//date untuk menampilkan dengan format tertentu
//echo date("l, d-M-Y");

//time
//UNIX Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 januari 1970
//echo time();
//untuk menghitung waktu yang akan datang menggunakan (+), untuk menghitung waktu kebelakang menggunakan (-)
//echo date("l, d M Y", time()-60*60*24*100);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun
//echo date("l",mktime(0,0,0,12,19,2005));

//strtotime
//echo date("l", strtotime("19 dec 2005"));

?>