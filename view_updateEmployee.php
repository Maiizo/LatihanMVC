<?php
require("controller_employee.php");
require("controller_office.php");

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
    <title>Update Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <ul class="nav nav-tabs card-header-tabs border-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_employee.php">⬅️ Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold active" href="#">Update Employee</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="mb-4 text-center">Update Employee</h1>
                <form method="POST" action="controller_employee.php" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Nama" value="<?= $employee->nama ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputJabatan">Jabatan</label>
                        <input type="text" class="form-control" name="inputJabatan" placeholder="Jabatan" value="<?= $employee->jabatan ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsia">Usia</label>
                        <input type="text" class="form-control" name="inputUsia" placeholder="Usia" value="<?= $employee->usia ?>">
                    </div>

                    <div class="mb-3">
                        <label for="inputOffice" class="form-label">Office</label>
                        <select class="form-select" name="inputOffice">
                            <option value="">Pilih lokasi Office</option>
                            <?php
                            $offices = getAllOffices();
                            foreach ($offices as $index => $office) {
                                 $selected = (isset($employee->office_id) && $employee->office_id == $index) ? 'selected' : '';
                            ?>
                                <option value="<?= $index ?>" <?= $selected ?>><?= $office->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="input_id" value="<?= $employee_id ?>">
                        <button name="button_update" type="submit" class="btn btn-primary">Update Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>