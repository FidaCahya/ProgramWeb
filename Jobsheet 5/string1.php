<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Quisque aliquet volutpat ante quis vulputate. 
Integer consequat mauris vel diam rutrum consequat. 
Nullam tempus, lectus at porttitor imperdiet.";


echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>