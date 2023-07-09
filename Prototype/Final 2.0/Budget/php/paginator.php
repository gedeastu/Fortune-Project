<?php
$currentMonth = $_GET['date'];
$page = $_GET['doc'];

if (isset($_POST['Prev'])) {
    echo $currentMonth;
    echo 'Prev';
    if ($currentMonth == 1) {
        $currentMonth = 12;
        header("Location: ../$page.php?date=$currentMonth");
    } else {
        --$currentMonth;
        header("Location: ../$page.php?date=$currentMonth");
    }
    
    
} elseif (isset($_POST['Next'])){
    echo $currentMonth;
    echo 'Next';
    if ($currentMonth == 12) {
        $currentMonth = 1;
        header("Location: ../$page.php?date=$currentMonth");
    } else {
        ++$currentMonth;
        header("Location: ../$page.php?date=$currentMonth");
    }
}
?>