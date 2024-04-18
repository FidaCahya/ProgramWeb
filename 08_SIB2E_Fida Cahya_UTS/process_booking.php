<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $session = $_POST['session'];
   

    // Simpan data booking ke session
    $_SESSION['booking'] = array(
        'name' => $name,
        'service' => $service,
        'date' => $date,
        'session' => $session
       
    );

    // Set cookie jika perlu
    setcookie('last_booking', serialize($_SESSION['booking']), time() + (86400 * 30), "/");

    echo "Booking berhasil! Terima kasih, $name.";
}
?>
