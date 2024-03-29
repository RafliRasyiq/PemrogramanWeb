<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- SOAL 1.3 -->
    <script>
        function previewImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var previewImage = document.getElementById("preview");
                previewImage.style.display = "block";
                previewImage.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    </script>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="documentToUpload" id="documentToUpload">
        <img id="preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <!-- SOAL 1.1
    Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ form_upload.php. 
    Apa yang anda pahami dari script pada file tersebut. Catat di bawah ini pemahaman anda. -->
    <!-- file yang berhasil diupload akan otomatis tersimpan pada foler uploads -->
</body>

</html>