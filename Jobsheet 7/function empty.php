<?php
//soal 2.1
$myArray = array(); //Array kosong
if(empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

//soal 2.2
if(empty($nonExistentVar)) {
    echo "<br> Variabel tidak terdefinisi atau kosong. ";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}

?>