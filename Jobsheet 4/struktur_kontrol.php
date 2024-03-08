<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) { 
    echo "Nilai huruf: A <br><br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) { 
    echo "Nilai huruf: B <br><br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) { 
    echo "Nilai huruf: C <br><br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br><br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
    } else {
        echo "Nilai: $nilai (Lulus) <br><br>";
    }
}

 

$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai_siswa);

$nilai_siswa = array_slice($nilai_siswa, 2, -2); // Mengabaikan dua nilai terendah dan dua nilai tertinggi
$total_nilai = array_sum($nilai_siswa);

$jumlah_siswa = count($nilai_siswa);
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Jumlah siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $jumlah_siswa . "<br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $rata_rata . "<br>";
?>

<br>

<?php
$harga_produk = 120000;
$batas_diskon = 100000;
$persentase_diskon = 20;

if ($harga_produk > $batas_diskon) {
    // Menghitung diskon
    $diskon = ($persentase_diskon / 100) * $harga_produk;

    // Menghitung harga setelah diskon
    $harga_setelah_diskon = $harga_produk - $diskon;

    echo "Harga produk sebelum diskon: Rp " . $harga_produk . "<br>";
    echo "Diskon sebesar " . $persentase_diskon . "%: Rp " . $diskon . "<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . $harga_setelah_diskon . "<br>";
} else {
    // Jika harga produk tidak mencapai batas diskon
    echo "Harga produk: Rp " . $harga_produk . "<br>";
    echo "Tidak ada diskon yang diberikan untuk pembelian di bawah Rp " . $batas_diskon . "<br>";
    echo "Harga yang harus dibayar: Rp " . $harga_produk. "<br>";
}
?>

<br>

<?php

$poin = 600;
$total_skor = $poin;

// Menghitung hadiah tambahan jika total skor lebih dari 500 poin
$mendapatkan_hadiah = ($total_skor > 500) ? "YA" : "TIDAK";

// Menampilkan informasi total skor pemain dan apakah mendapatkan hadiah tambahan
echo "Total skor pemain adalah: " . $total_skor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $mendapatkan_hadiah;
?>
