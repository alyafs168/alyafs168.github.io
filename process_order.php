<?php
// process_order.php

// Koneksi ke database
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "bakery_store"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari formulir
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$streetaddress = $_POST['streetaddress'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$order_name = $_POST['order_name'];

// Menyimpan data ke database
$sql = "INSERT INTO orders (firstname, lastname, city, streetaddress, phone, email, order_name)
VALUES ('$firstname', '$lastname', '$city', '$streetaddress', '$phone', '$email', '$order_name')";

if ($conn->query($sql) === TRUE) {
    echo "Order berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
