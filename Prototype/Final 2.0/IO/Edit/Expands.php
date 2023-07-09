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



if (isset($_POST['submit'])) {


    #==================================================================[Get Var]==================================================================#
    // Mengambil semua variabel yang di lempar dari form
    $title = $_POST['Title']; # Title
    $amount = $_POST['Ammount']; # Rp. Amount
    $Amount = str_replace(',', '', $amount);
    $id_category = $_POST['Category']; # Category
    $id_wallet_result = mysqli_query($conn, "SELECT Id_Wallet FROM Wallet WHERE Email = '{$rowMail['Email']}'");
    $id_wallet_row = mysqli_fetch_assoc($id_wallet_result);
    $id_wallet = $id_wallet_row['Id_Wallet']; # Account/Wallet id
    $cDate = date("Y-m-d", strtotime($_POST['iDate'])); # Set Date
    $Description = $_POST['Description']; # Description
    #==================================================================[Get Var]==================================================================#



    #==================================================================[Check Budget]==================================================================#
    // pilih email dari tabel budget, dimana email = x dan id category = x dengan bulan dan tanggal = x
    // jika tidak ada maka buatkan budget baru sesuai dengan ketentuan yang di butuhkan
    $checkBudgetQuery = mysqli_query($conn, "SELECT Email FROM Budget WHERE Email = '{$rowMail['Email']}' AND Id_Category = $id_category AND EXTRACT(MONTH FROM Date) = EXTRACT(MONTH FROM CURRENT_DATE()) AND EXTRACT(YEAR FROM Date) = EXTRACT(YEAR FROM CURRENT_DATE());");
    #==================================================================[Check Budget]==================================================================#



    /**-----------------------------------------------------------------------------------------------------------------------
     *                                                    Mengambil data uang saat ini
     *-----------------------------------------------------------------------------------------------------------------------**/
    $ID = $_GET['id'];
    $takeHistory = mysqli_query($conn, "SELECT * FROM History WHERE Id_History = $ID");
    $history = mysqli_fetch_assoc($takeHistory);
    mysqli_query($conn, "UPDATE Wallet SET Money = Money + {$history["Amount"]} WHERE Id_Wallet = $id_wallet");
    /*---------------------------------------------------- END OF SECTION----------------------------------------------------*/



    /**-----------------------------------------------------------------------------------------------------------------------
     *                                                    Jika data sudah ada
     *-----------------------------------------------------------------------------------------------------------------------**/
    if (mysqli_num_rows($checkBudgetQuery) === 1) {

        // Id Budget
        $id_budget = mysqli_query($conn, "SELECT Id_Budget FROM Budget WHERE Email = '{$rowMail['Email']}' AND Id_Category = $id_category");
        $row_budget = mysqli_fetch_assoc($id_budget);
        $Budget = $row_budget['Id_Budget'];

        echo "Data ada\n";
        echo $title, "\n";
        echo $Amount, "\n";
        echo $id_category, "\n";
        // echo $id_wallet, "\n";
        echo $cDate, "\n";
        echo $Description, "\n";

        // Masukkan ke history dan Update isi wallet
        mysqli_query($conn, "UPDATE History SET Id_Wallet = '$id_wallet', Id_Budget = '$Budget', Title = '$title', Type = 'Expense', Amount = '$Amount', Description = '$Description', Date = '$cDate' WHERE Id_History = $ID");
        // mysqli_query($conn, "INSERT INTO History (Id_Wallet, Id_Budget, Title, Type, Amount, Description, Date) VALUES ('$id_wallet', '$Budget', '$title', 'Expense', '$Amount', '$Description', '$cDate')");
        mysqli_query($conn, "UPDATE Wallet SET Money = Money - $Amount WHERE Id_Wallet = $id_wallet");
        header("Location: ../../index.php");
    }
    /*---------------------------------------------------- END OF SECTION----------------------------------------------------*/



    /**-----------------------------------------------------------------------------------------------------------------------
     *                                                    Jika data belum ada
     *-----------------------------------------------------------------------------------------------------------------------**/
    else {

        // Membuat budget
        mysqli_query($conn, "INSERT INTO budget VALUES ('0', '$cDate', '0', '$id_category', '{$rowMail['Email']}')");

        // Id Budget
        $id_budget = mysqli_query($conn, "SELECT Id_Budget FROM Budget WHERE Email = '{$rowMail['Email']}' AND Id_Category = $id_category");
        $row_budget = mysqli_fetch_assoc($id_budget);
        $Budget = $row_budget['Id_Budget'];


        echo "Tidak ada\n";
        echo $title, "\n";
        echo $Amount, "\n";
        echo $id_category, "\n";
        // echo $id_wallet, "\n";
        echo $cDate, "\n";
        echo $Description, "\n";

        // Masukkan ke history dan Update isi wallet
        mysqli_query($conn, "UPDATE History SET Id_Wallet = '$id_wallet', Id_Budget = '$Budget', Title = '$title', Type = 'Expense', Amount = '$Amount', Description = '$Description', Date = '$cDate' WHERE Id_History = $ID");
        // mysqli_query($conn, "INSERT INTO History (Id_Wallet, Id_Budget, Title, Type, Amount, Description, Date) VALUES ('$id_wallet', '$Budget', '$title', 'Expense', '$Amount', '$Description', '$cDate')");
        mysqli_query($conn, "UPDATE Wallet SET Money = Money - $Amount WHERE Id_Wallet = $id_wallet");
        header("Location: ../../index.php");
    }
    /*---------------------------------------------------- END OF SECTION----------------------------------------------------*/
}

if (isset($_POST['cancel'])) {
    echo ("<script>window.history.back();window.history.back();</script>");
}
