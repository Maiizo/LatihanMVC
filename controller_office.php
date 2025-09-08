<?php include("model_office.php");
session_start();


if (!isset($_SESSION['office_list'])) {
    $_SESSION['office_list'] = array();
}   


function createOffice(){
    $office = new office();
    $office->namaOffice = $_POST['namaOffice'];
    $office->alamat = $_POST['alamat'];
    $office->kota = $_POST['kota'];
    $office->kontak = $_POST['kontak'];
    array_push($_SESSION['office_list'], $office);
}


function getAllOffice(){
    return $_SESSION['office_list'];
}

function deleteOffice($index){
    if (isset($_SESSION['office_list'][$index])) {
        unset($_SESSION['office_list'][$index]);
        $_SESSION['office_list'] = array_values($_SESSION['office_list']);
    }
}


if (isset($_POST['button_submit_office'])) {
    createOffice();
    header("Location: view_addOffice.php");
    exit();
}


if (isset($_GET['deleteID'])) {
    deleteEmployee($_GET['deleteID']);
    header("Location: view_employee.php");
    exit();
}

?>
