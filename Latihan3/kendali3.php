<?php
$mahasiswa = [
    [" irma", "300", "rpl", "irma123@gmail.com"],
    [" diana", "191", "rpl1", "diana@gmail.com"],
    [" sari", "735", "rpl1", "sari@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<!-- <ul>
    <li>irma</li>
    <li>300</li>
    <li>rpl</li>
    <li>adit94545@gmail.com</li>
</ul> -->

<!-- <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
    <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul> -->
<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>nama : <?= $mhs[0] ?></li>
    <li>nrp : <?= $mhs[1] ?></li>
    <li>jurusan : <?= $mhs[2] ?></li>
    <li>email : <?= $mhs[3] ?></li>

</ul>
<?php endforeach; ?>




</body>
</html>