<?php
include "../../Conf/connect.php";
session_start();

/**------------------------------------------------------------------------
 * *                                INFO
 *   Mengambil email dari id session
 *   di karenakan email berifat rahasia jadi tidak di buatkan ke dalam sebuah session
 *------------------------------------------------------------------------**/
$getMail = mysqli_query($conn, "SELECT Email FROM User WHERE Id = '{$_SESSION['id']}'");
$rowMail = mysqli_fetch_assoc($getMail);


// $cDate = date("Y-m-d", strtotime($_POST['iDate'])); # Set Date
// $amount = $_POST['Ammount']; # Rp. Amount
// $Amount = str_replace(',', '', $amount);
// $id_category = $_POST['Category']; # Category

$cDate = date("Y-m-d"); // Set current date
$amount = "10,001"; // Rp. Amount
$Amount = str_replace(',', '', $amount);
$id_category = 1; // Category ID

// Membuat budget
mysqli_query($conn, "UPDATE budget SET Amount = '$Amount' WHERE Id_Category = '$id_category' AND Email = '{$rowMail['Email']}'");

?>