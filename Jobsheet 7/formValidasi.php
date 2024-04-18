<!DOCTYPE html>
<!-- <html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form method="post" action="proses_formValidasi.php">
    <label for="nama">Nama: </label>
    <input type="text" id="nama" name="nama">
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br>

    <input type="submit" value="Kirim">
</form>
</body>
</html> -->

<!-- //modifikasi 7.2 -->
<!-- <body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_formValidasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>

        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi!");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi!");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (!valid) {
                    event.preventDefault();
                }
            });
        });

    </script> 
    </body>
    </html>-->

    <!-- //modifikasi no 7.3 & 7.4 -->
    <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <label for="password">Password:</label> <!-- Tambah elemen input untuk password -->
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br><br> <!-- Tambah span untuk pesan kesalahan password -->

        <input type="button" value="Submit" id="submitBtn">
    </form>
    <script>
        $(document).ready(function () {
            $("#submitBtn").click(function () {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); // Ambil nilai password

                // Validasi password minimal 8 karakter
                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    return; // Berhenti jika password tidak memenuhi syarat
                } else {
                    $("#password-error").text(""); // Kosongkan pesan kesalahan jika password memenuhi syarat
                }

                $.ajax({
                    type: "POST",
                    url: "proses_formValidasi.php",
                    data: {
                        nama: nama,
                        email: email,
                        password: password // Kirim password ke skrip PHP
                    },
                    success: function (response) {
                        if (response.errors) {
                            $("#nama-error").text(response.errors.nama);
                            $("#email-error").text(response.errors.email);
                        } else {
                            // jika tidak ada kesalahan, lanjutkan proses form
                            $("#myForm").submit();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>


