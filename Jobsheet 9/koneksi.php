<!-- //buat tabel user -->
<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
$result = mysqli_query($connect, "CREATE TABLE `prakwebdb`.`user`
     (`id` INT NOT NULL ,
     `username` VARCHAR(50) NOT NULL ,
     `password` VARCHAR(50) NOT NULL ,
     PRIMARY KEY (`id`)) ENGINE = InnoDB;");
?>

<!-- //isi tabel user -->
<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
$input = mysqli_query($connect, "INSERT INTO `user` (`id`, `username`, `password`) VALUES ('1', 'admin', MD5('123'));");
?>