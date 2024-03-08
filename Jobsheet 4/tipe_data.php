<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 *5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

var_dump($e);
?>

<br>
<?php
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : {$rataRata} <br>";
var_dump($rataRata);
?>

<br>
<?php
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
?>

<br>
<?php
$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: '. $namaBelakang . '<br>';

echo $namaLengkap;
?>

<br>

<?php
$listMhahasiswa = ["Wahid abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMhahasiswa[0];
?>

