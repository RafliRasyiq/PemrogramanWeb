<?php
// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; //direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//         echo "File berhasil diunggah";
//     } else {
//         echo "Gagal mengunggah file";
//     }
// }

if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; //direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] < $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Document berhasil diunggah";
        } else {
            echo "Gagal mengunggah document";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

// SOAL 1.2
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/form_upload.php . 
       Apa yang anda pahami dari penggunaan script tersebut. Catat di bawah ini pemahaman anda. */
// file yang dapat diupload hanya file dengan ekstensi jpg, jpeg, png, gif dan ukuran file juga dibatasi sebesar 5mb saja

/* SOAL 1.4
   Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/form_upload.php . 
   Apa yang anda pahami dari penggunaan script tersebut. Catat di bawah ini pemahaman anda.*/
// file yang dapat diupload hanya file dengan ekstensi txt, pdf, doc, docx dan ukuran file juga dibatasi sebesar 10mb saja
