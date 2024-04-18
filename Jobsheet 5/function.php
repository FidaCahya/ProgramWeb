<!-- <?php

// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Fida Cahya <br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// perkenalan();
// ?> -->

<!-- <?php
//mebuat fungsi
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisis parameter salam
//perkenalan($saya, $ucapanSalam);
// perkenalan($saya);
// ?>

// <?php
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2024) ."tahun"

?> -->

<?php
//membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";

//     echo "Saya berusia ". hitungUmur(2004, 2024) ."tahun<br/>";
//     echo "Senang berkenalan dengan anda <br/>";
// }
// perkenalan("Fida");
// ?>

<!-- <?php
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();
?> -->
<!-- 
<?php
// for ($i=1; $i <=25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

?> -->

<?php
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>

