<?php
session_start();

include "./koneksi_ajax.php";
include "./csrf.php";

$id = $_POST['id'];

$query = "DELETE FROM anggota WHERE id = ?";
$sql = $dbl->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();

echo json_encode(['success' => 'Sukses']);
$dbl->close();