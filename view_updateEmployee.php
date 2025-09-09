<?php
require("controller_employee.php");
    if (isset($_GET["updateID"])) {
        $employee_id = $_GET["updateID"];
        $employee = getEmployeeWithID($_GET["updateID"]);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addEmployee.php">New Employee</a>
                    </li>
                    
                </ul>
            </div>
            <div class="card-body">
                <h1 class="mb-4 text-center">Update Employee</h1>
                <form method="POST" action="controller_employee.php" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama">Name</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Name" value="<?=$employee->nama?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputJabatan">Jabatan</label>
                        <input type="text" class="form-control" name="inputJabatan" placeholder="Jabatan" value="<?=$employee->jabatan?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsia">Usia</label>
                        <input type="text" class="form-control" name="inputUsia" placeholder="Usia" value="<?=$employee->usia?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="input_id" value="<?=$employee_id?>">
                        <button name="button_update" type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>