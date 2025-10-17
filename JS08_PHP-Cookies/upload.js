$(document).ready(function(){
    // Fungsi untuk mengontrol status tombol "Unggah"
    $('#file').change(function(){
        if (this.files.length > 0) {
            // Jika file telah dipilih, aktifkan tombol
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            // Jika tidak ada file, nonaktifkan tombol
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Fungsi untuk menangani pengiriman formulir via AJAX
    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});