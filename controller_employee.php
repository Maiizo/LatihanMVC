<?php

require_once("model_employee.php");
session_start();
//  create session employeelist if not exist
if (!isset($_SESSION['employeelist'])) {
    $_SESSION['employeelist'] = array();
}

function createMember(){
    $employee = new model_employee();
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->usia = $_POST['inputUsia'];
    array_push($_SESSION['employeelist'], $employee);
}

function getAllEmployees() {
    return $_SESSION['employeelist'];
}

function deleteEmployee($employeeIndex) {
    unset($_SESSION['employeelist'][$employeeIndex]); // array index = 0, 1 ,2
}


// if button_register di click
if (isset($_POST['button_register'])) {
    createMember();
    header("Location: view_employee.php"); // to go back to other page
}

// jika button delete di click
if (isset($_GET['deleteID'])) {
    deleteEmployee($_GET['deleteID']);
    header("Location: view_employee.php"); // to go back to other page
}

?>
