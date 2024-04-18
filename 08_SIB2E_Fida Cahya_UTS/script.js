$(document).ready(function(){
    $('#bookingForm').submit(function(e){
        e.preventDefault();
        var name = $('#name').val();
        var service = $('#service').val();
        var date = $('#date').val();

        // Lakukan validasi form di sini
        if(name.trim() === '' || service === '' || date === '') {
            alert('Silakan lengkapi semua field!');
            return;
        }

        // Kirim data form ke server
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response){
                alert(response);
                // Redirect ke halaman jadwal booking setelah booking berhasil
                window.location.href = 'schedule.php';
            }
        });
    });
});
