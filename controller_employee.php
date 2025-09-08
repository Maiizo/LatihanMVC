<?php include("model_employee.php");
session_start();


if (!isset($_SESSION['employee_list'])) {
    $_SESSION['employee_list'] = array();
}   


function createEmployee(){
    $employee = new employee();
    $employee->nama = $_POST['nama'];
    $employee->jabatan = $_POST['jabatan'];
    $employee->usia = $_POST['usia'];
    $employee->office = $_POST['office'];
    array_push($_SESSION['employee_list'], $employee);
}


function getAllEmployee(){
    return $_SESSION['employee_list'];
}

function deleteEmployee($index){
    if (isset($_SESSION['employee_list'][$index])) {
        unset($_SESSION['employee_list'][$index]);
        $_SESSION['employee_list'] = array_values($_SESSION['employee_list']);
    }
}


if (isset($_POST['button_submit'])) {
    createEmployee();
    header("Location: view_addemployee.php");
    exit();
}


if (isset($_GET['deleteID'])) {
    deleteEmployee($_GET['deleteID']);
    header("Location: view_employee.php");
    exit();
}

?>
