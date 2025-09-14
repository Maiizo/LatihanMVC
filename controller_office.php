<?php

require_once("model_office.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// create session officelist if not exist
if (!isset($_SESSION['officelist'])) {
    $_SESSION['officelist'] = array();
}

function createOffice() {
    $office = new model_office();
    $office->nama = $_POST['inputNama'];
    $office->alamat = $_POST['inputAlamat'];
    $office->kota = $_POST['inputKota'];
    $office->telepon = $_POST['inputTelepon'];
    array_push($_SESSION['officelist'], $office);
}


function getAllOffices() {
    return $_SESSION['officelist'];
}

function deleteOffice($officeIndex){
    unset($_SESSION['officelist'][$officeIndex]);
}

function getOfficeById($officeIndex) {
     if (isset($_SESSION['officelist'][$officeIndex])) {
        return $_SESSION['officelist'][$officeIndex];
    }
    return null;
}

// handle form submissions
if (isset($_POST['button_register_office'])) {
    createOffice();
    header("Location: view_office.php");
    exit();
}

if (isset($_GET['deleteOfficeID'])) {
    deleteOffice($_GET['deleteOfficeID']);
    header("Location: view_office.php");
}

?>