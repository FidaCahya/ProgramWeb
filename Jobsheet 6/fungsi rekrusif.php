<!-- //soal no 9 -->
<!-- //<?php
    // function tampilkanHaloDunia()
    // {
    //     echo "Halo dunia! <br>";

    //     tampilkanHaloDunia();
    // }
    
    // tampilkanHaloDunia();
?>   -->

<!-- <?php

    // for ($i = 1; $i <= 25; $i++) {
    //      echo "Perulangan ke-{$i} <br>";
    // }
?>  -->

<!-- soal no 10 -->
<?php
function tampilkanAngka(int $jumlah, int $indeks = 1)
{
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>
