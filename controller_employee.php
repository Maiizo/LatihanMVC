<?php

require_once("model_employee.php");
session_start();

// Create session employeelist if not exist
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
}

function getAllEmployees() {
    return $_SESSION['employeelist'];
}

function deleteEmployee($employeeIndex) {
    if (isset($_SESSION['employeelist'][$employeeIndex])) {
        unset($_SESSION['employeelist'][$employeeIndex]);
        $_SESSION['employeelist'] = array_values($_SESSION['employeelist']);
    }
}

function getEmployeeWithID($employeeID) {
    return $_SESSION['employeelist'][$employeeID];
}

// If button_register clicked
if (isset($_POST['button_register'])) {
    createEmployee();
    header("Location: view_employee.php");
    exit();
}

// If button delete clicked
if (isset($_GET['deleteID'])) {
    deleteEmployee($_GET['deleteID']);
    header("Location: view_employee.php");
    exit();
}

// If button update clicked
if (isset($_POST['button_update'])) {
    updateEmployee($_POST['input_id']);
    header("Location: view_employee.php");
    exit();
}
?>
