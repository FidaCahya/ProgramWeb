<?php
session_start();

// Ambil data booking terakhir dari cookie
$lastBooking = isset($_COOKIE['last_booking']) ? unserialize($_COOKIE['last_booking']) : null;

// Ambil semua data booking dari session
$bookings = isset($_SESSION['bookings']) ? $_SESSION['bookings'] : array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Jadwal Booking</h1><br>
        <h2>Selamat Datang di Klinik Kecantikan Sasmi</h2>
        <p>Dapatkan Layanan Kecantikan Terbaik di Indonesia<p>
        
        <?php if ($lastBooking) : ?>
            <h3>Jadwal Customer:</h3>
            <p>Nama: <?php echo $lastBooking['name']; ?></p>
            <p>Layanan: <?php echo $lastBooking['service']; ?></p>
            <p>Tanggal: <?php echo $lastBooking['date']; ?></p>
            <p>Sesi Waktu: <?php echo $lastBooking['session']; ?></p> 
        <?php endif; ?>
        
        <h3>Note:</h3>
        <?php if (!empty($bookings)) : ?>
            <ul>
                <?php foreach ($bookings as $booking) : ?>
                    <li>
                        Nama: <?php echo $booking['name']; ?>, 
                        Layanan: <?php echo $booking['service']; ?>, 
                        Tanggal: <?php echo $booking['date']; ?>
                        Sesi Waktu: <?php echo $booking['session']; ?>
                    </li>
                <?php endforeach; ?>
        <?php else : ?>
        <?php endif; ?>
            <p>Mohon datang sesuai jadwal yang ditentukan<p>
    </div>
</body>
</html>
