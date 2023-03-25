<?php
$bil1=$_POST['txtbil1'];
$bil2=$_POST['txtbil2'];

echo "Bilangan1 = $bil1<br>";
echo "Bilangan2 = $bil2<br>";

$tambah=$bil1+$bil2;
echo "Hasil Penjumlahan =".$tambah;

$kurang=$bil1-$bil2;
echo "<br>Hasil Pengurangan =".$kurang;

$kali=$bil1*$bil2;
echo "<br>Hasil Perkalian =".$kali;

$bagi=$bil1/$bil2;
echo "<br>Hasil Pembagian =".$bagi;

?>