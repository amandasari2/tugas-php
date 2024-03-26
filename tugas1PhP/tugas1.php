<?php
// Tentang Saya
$tentang = "Saya merupakan mahasiswi semester 6 Sistem Informasi. Saya berkuliah di Perguruan Tinggi Sekolah Manajemen Informatika dan Komputer Royal yang bertempat di Asahan, Sumatera Utara. Saya sangat tertarik dengan dunia programming dan saya juga suka mempelajari hal - hal yang baru. Bahasa pemrograman yang saat ini saya gunakan adalah HTML, CSS, SQL, PHP dan saya baru - baru ini mempelajari JavaScript dan GITHUB.";

// Informasi Pribadi
$nama = "Amanda Sari";
$ttl = "Kisaran, 02 Februari 2003";
$jk = "Perempuan";
$alamat = "Jl. Prof. M Yamin, SH LK III, Kisaran Naga, Kota Kisaran Timur, Asahan, Sumatera Utara";
$agama = "Islam";

// Contact Pribadi
$gmail = "amandasaro968@gmail.com";
$nohp = "0813 - 7505 - 2211";
$github = '<a href="https://github.com/amandasari2/" target="_blank">amandasari2</a>';
$linkedln = '<a href="https://www.linkedin.com/in/amandasari" target="_blank">amandasari</a>';
$instagram = '<a href="https://www.instagram.com/my.by__manda" target="_blank">@my.by__manda</a>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Selamat Datang Di Halaman Profile Saya :) </h1>

    <p class="tentang" align="justify"><img src="PO.jpg" width="4%" align="left" hspace="10">
        <?= $tentang ?></p>

    <fieldset>
        <legend>
            <font>Informasi Pribadi</font>
        </legend>
        <p>Nama : <?= $nama ?> </p>
        <p>Tempat Tanggal Lahir : <?= $ttl ?> </p>
        <p>Jenis Kelamin : <?= $jk ?> </p>
        <p>Alamat : <?= $alamat ?> </p>
        <p>Agama : <?= $agama ?> </p>
    </fieldset>
    <fieldset>
        <legend>
            <font>Contact Pribadi</font>
        </legend>
        <p>Gmail : <?= $gmail ?> </p>
        <p>No Hp : <?= $nohp ?> </p>
        <p>GitHub : <?= $github ?> </p>
        <p>Linkedln : <?= $linkedln ?> </p>
        <p>Instagram : <?= $instagram ?></p>
    </fieldset>
</body>

</html>