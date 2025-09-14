<?php

require_once("model_employee.php");
require_once("model_office.php"); 

//  Start session only if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//  create session employeelist if not exist
if (!isset($_SESSION['employeelist'])) {
    $_SESSION['employeelist'] = array();
}

function createEmployee(){
    $employee = new model_employee();
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->usia = $_POST['inputUsia'];
    $employee->office_id = $_POST['inputOffice'] ?? null;
    array_push($_SESSION['employeelist'], $employee);
}

function updateEmployee($employeeID){
    $employee = $_SESSION['employeelist'][$employeeID];
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->usia = $_POST['inputUsia'];
    $employee->office_id = $_POST['inputOffice'] ?? null;
}

function getAllEmployees() {
    return $_SESSION['employeelist'];
}

function deleteEmployee($employeeIndex) {
    unset($_SESSION['employeelist'][$employeeIndex]); // array index = 0, 1 ,2
}

function getEmployeeWithID($employeeID) {
    return $_SESSION['employeelist'][$employeeID];
}

// if button_register di click
if (isset($_POST['button_register'])) {
    createEmployee();
    header("Location: view_employee.php"); // to go back to other page
}

// jika button delete di click
if (isset($_GET['deleteID'])) {
    deleteEmployee($_GET['deleteID']);
    header("Location: view_employee.php"); // to go back to other page
}

// jika button update di click
if (isset($_POST['button_update'])) {
    updateEmployee($_POST['input_id']);
    header("Location: view_employee.php"); // to go back to other page
}
?>
