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

/**-----------------------------------------------------------------------------------------------------------------------
 *                                                    Mengambil data uang saat ini
 *-----------------------------------------------------------------------------------------------------------------------**/
$ID = $_GET['id'];
$takeHistory = mysqli_query($conn, "SELECT * FROM History WHERE Id_History = $ID");
$history = mysqli_fetch_assoc($takeHistory);
mysqli_query($conn, "UPDATE Wallet SET Money = Money - {$history["Amount"]} WHERE Id_Wallet = $id_wallet");
/*---------------------------------------------------- END OF SECTION----------------------------------------------------*


/**-----------------------------------------------------------------------------------------------------------------------
 *                                                    Mengambil ID Budget
 *-----------------------------------------------------------------------------------------------------------------------**/
$id_budget = mysqli_query($conn, "SELECT Id_Budget FROM Budget WHERE Email = '{$rowMail['Email']}' AND Id_Category = $id_category");
$row_budget = mysqli_fetch_assoc($id_budget);
$Budget = $row_budget['Id_Budget'];
/*---------------------------------------------------- END OF SECTION----------------------------------------------------*/



/**-----------------------------------------------------------------------------------------------------------------------
 *                                                    Menghapus data
 *-----------------------------------------------------------------------------------------------------------------------**/
mysqli_query($conn, "DELETE FROM History WHERE Id_History = $ID");
/*---------------------------------------------------- END OF SECTION----------------------------------------------------*/
