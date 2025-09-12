<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 </head>

<body>
  <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <ul class="nav nav-tabs card-header-tabs border-0">
                    <li class="nav-item">
                        <a class="nav-link text-white"  href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold active" href="view_addEmployee.php">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_addOffice.php">New Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_officeEmployee.php">Office Employee</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="mb-4 text-center">Add New Employee</h1>
                <form method="POST" action="controller_employee.php" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="inputJabatan">Jabatan</label>
                        <input type="text" class="form-control" name="inputJabatan" placeholder="Jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsia">Usia</label>
                        <input type="text" class="form-control" name="inputUsia" placeholder="Usia">
                    </div>
                    <div class="mb-3">
                        <label for="inputOffice" class="form-label">Office</label>
                        <select class="form-select" name="inputOffice">
                            <option value="">Pilih lokasi Office</option>
                            <?php
                            require_once("controller_office.php");
                            $offices = getAllOffices();
                            foreach ($offices as $index => $office) {
                            ?>
                                <option value="<?= $index ?>"><?= $office->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button name="button_register" type="submit" class="btn btn-primary">Register Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>