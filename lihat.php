
  <?php 

echo "<head>
<title>My Guest Book</title>
<style>
    *{
        background: #dedede;    
    }
    h2{
        font-family: 'comic sans ms';
        text-align: center;
        font-weight: 500;
        font-size: 30px;
    }
    table {
        margin-left: 30%;
        margin-right: auto;
        padding: 50 px 50px 15px 20px;
    }
    td{
        font-family: 'comic sans ms';
    font-weight: 500;
    font-size: 20px;
    text-align: left;
    }
</style>
</head>";
$fp = fopen("guestbook.txt", "r");
echo "<h2>Daftar Pemesanan</h2>";
echo "<table border='0' >";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>No.WA: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Jarak: </td><td>: $pisah[4] KM</td></tr>";
    echo "<tr><td>Biyaya: </td><td>: Rp. $pisah[5] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='index.html'><h2>HOME</h2> </a>";

?>
  
    
    


