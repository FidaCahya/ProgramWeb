<?php
//buat tabel user
$koneksi = mysqli_connect("localhost", "username", "password", "praakwebdb");


$result = mysqli_query($con, "CREATE TABLE IF NOT EXISTS 'prakwebdb'.'user; (
            id INT NOT NULL,
            'usErname' VARCHAR(50) NOT NULL,
            'password' VARCHAR(50) NOT NULL,
            PRIMARY KEY ('Id')) ENGINE = InnoDB;");

//memasukkan ke tabel user
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
$input = mysqli_query($con, "INSERT INTO 'user' ('id', 'username', 'password')
VALUES ('1', 'admin', MD5('123'));");
?>

?>