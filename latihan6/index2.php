<?php
//konesi ke database
$conn = mysqli_connect("localhost", "root", "", "irmaphp");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fecth_row() //mengembalikan array numerik
//$mhs = mysqli_fetch_row($result);
//var_dump($mhs[1]);

//mysqli_fecth_assoc() //mengembalikan array associative
//$mhs = mysqli_fetch_assoc($result);
//var_dump($mhs["jurusan"]);

//mysqli_fecth_array() //mengembalikan keduanya
//$mhs = mysqli_fetch_array($result);
//var_dump($mhs["jurusan"]);
//var_dump($mhs[1]);

//mysqli_fecth_object()
//$mhs = mysqli_fetch_object($result);
//var_dump($mhs->email);

//while( $mhs = mysqli_fetch_assoc($result) ); {
//  var_dump($mhs);
//}



?>


<!DOCTYPE html>
<html >
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
       <th> No. </th>
       <th> Aksi </th>
       <th> Gambar </th>
       <th> NIS </th>
       <th> Nama </th>
       <th> Email </th>
       <th> Jurusan </th>
    </tr>
   
   <?php $i = 1; ?>
   <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
       <td> <?= $i; ?> </td>
       <td>
          <a href="">ubah</a>
          <a href="">hapus</a>
       </td>
       <td><img src="img/<?= $row["gambar"];?>"
        width="50"></td>
       <td> <?= $row["nis"]; ?> </td>
       <td> <?= $row["nama"]; ?> </td>
       <td> <?= $row["email"]; ?> </td>
       <td> <?= $row["jurusan"]; ?> </td>

    </tr>
    <?php $i++; ?>
   <?php endwhile; ?>


</body>
</html>