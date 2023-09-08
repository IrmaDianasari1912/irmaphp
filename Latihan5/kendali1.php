<?php
// variabel scope / lingkup variabel
//$x = 10;

//function tampilx() {
//   $x = 20; 
//   global $x;
//   echo $x;
//}
 
//tampilx();
//echo "<br>";
//echo $x;

// SUPERGLOBALS
//variable global milik PHP
//merupakan Array Assosiative

//$_GET
//$_GET["nama"] = "Irma Dianasari";
//var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Irma Dianasari", 
        "nis" => "12345678",
        "email" => "irmadianasari@gmail.com",
        "jurusan" => "RPL1",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => " Dianasari", 
        "nis" => "87654321",
        "email" => "dianasari@gmail.com",
        "jurusan" => "RPL2",
        "gambar" => "2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
       <li> 
           <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>
           &nis=<?= $mhs["nis"]; ?>
           &email=<?= $mhs["email"]; ?>
           &jurusan=<?= $mhs["jurusan"]; ?>
           &gambar=<?= $mhs["gambar"];?>
           "> 
           <?= $mhs["nama"];?></a>
       </li>
    <?php endforeach; ?>
</ul>
</body>
</html>