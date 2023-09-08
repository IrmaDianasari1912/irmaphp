<?php
//$mahasiswa =[
//    ["Irma Dianasari", "12345678", "irmadianasari@gmail.com", "RPL"],
//   ["Dianasari", "87654321", "dianasari@gmail.com", "RPL"]
//];

//Array Assosiative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiriu
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
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
    <li>
    <img src="img/<?= $mhs["gambar"];?>">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NIS :<?= $mhs["nis"]; ?></li>
    <li>Email :<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>