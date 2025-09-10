<?php

require_once("model_office.php");
session_start();

// Create session officelist if not exist
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
    if (isset($_SESSION['officelist'][$officeIndex])) {
        unset($_SESSION['officelist'][$officeIndex]);
        $_SESSION['officelist'] = array_values($_SESSION['officelist']);
    }
}

function getOfficeById($officeIndex) {
    if (isset($_SESSION['officelist'][$officeIndex])) {
        return $_SESSION['officelist'][$officeIndex];
    }
    return null;
}

// Handle form submissions
if (isset($_POST['button_register_office'])) {
    createOffice();
    header("Location: view_office.php");
    exit();
}

if (isset($_GET['deleteOfficeID'])) {
    deleteOffice($_GET['deleteOfficeID']);
    header("Location: view_office.php");
    exit();
}

?>