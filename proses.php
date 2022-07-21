<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nowo = $_POST['nowa'];
$jarak = $_POST['jarak'];
$biyaya = $jarak*5000;

?>
<head>
    <title>JASA TITIP BARANG</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>BIYAYA PEMESANAN</h2>
            <div class="underline-title"></div>
            <h2 align="center"><?php echo "Rp. $biyaya"; ?></h2>
            <div class="underline-title"></div><br> 
            <p>Terima kasih atas pemesanan anda<br></p><br><br>
            <a href='index.html'><h3>Home</h3></a>
            <div class="underline-title"></div>
            <a href='lihat.php'><h3>Cek pemesanan</h3></a>
            <div class="underline-title"></div>
        </div>
    </div>
    <br>
</body>


<?php

$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$nowo|$jarak|$biyaya\n");
fclose($fp);



 ?>


