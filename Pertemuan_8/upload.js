/* $(document).ready(function(){
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
}); */

// SOAL 3.2
/* $(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'mod_upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function(xhr, status, error) {
                $('#status').html('Terjadi kesalahan saat mengunggah file: ' + error);
            }
        });
    });
}); */

// Pratikum 4
$(document).ready(function () { 
    $('#file').change(function () {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });
    $('#upload-form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php', // Sesuaikan dengan nama file PHP yang benar
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response);   
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
