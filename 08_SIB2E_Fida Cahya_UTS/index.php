<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Perawatan Kecantikan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Reservasi Perawatan Kecantikan</h1><br>
      <h2>Klinik Kecantikan Sasmi</h2>
      <img src="images/gambar1.jpeg" alt="Klinik Kecantikan Sasmi Banner">
    </div>
    <form id="bookingForm" action="process_booking.php" method="POST">
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required><br>
      <label for="service">Pilih Layanan:</label>
      <select id="service" name="service" required>
        <option value="Facial">Facial</option>
        <option value="Manicure">Manicure</option>
        <option value="Pedicure">Pedicure</option>
        <option value="Laser">Laser</option>
        <option value="Chemical Peeling">Chemical Peeling</option>
        <option value="Intense Pulse Light">Intense Pulse Light</option>
        <option value="Suntik Botok">Suntik Botok</option>
      </select><br>
      <label for="date">Tanggal:</label>
      <input type="date" id="date" name="date" required><br>
      <label for="session">Pilih Sesi Waktu:</label>
      <select id="session" name="session" required>
        <option value="08:00-14:00">08.00-14.00</option>
        <option value="14:00-20:00">14.00-20.00</option>
      </select><br>
      <button type="submit">Reservasi Sekarang</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
