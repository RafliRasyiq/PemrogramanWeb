<?php
session_start();

if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['address'])) {
    $response = array('success' => false, 'message' => 'Semua kolom harus diisi.');
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $response = array('success' => false, 'message' => 'Format email tidak valid.');
} else {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $_SESSION['formData'] = array(
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'address' => $address
    );

    $response = array('success' => true, 'message' => 'Data tersimpan.', 'formData' => $_SESSION['formData']);
}

header('Content-Type: application/json');
echo json_encode($response);
?>
