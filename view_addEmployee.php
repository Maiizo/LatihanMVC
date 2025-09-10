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
                    <li>
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="view_addOffice.php">New Office</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="mb-4 text-center">New Employee</h1>
                <form method="POST" action="controller_employee.php" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama">Name</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="inputJabatan">Jabatan</label>
                        <input type="text" class="form-control" name="inputJabatan" placeholder="Jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsia">Usia</label>
                        <input type="text" class="form-control" name="inputUsia" placeholder="Usia">
                    </div>
                    <div class="d-grid">
                        <button name="button_register" type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="mb-3">
                        <label for="inputOffice">Office</label>
                        <select class="form-control" name="inputOffice">
                            <option value="">Select Office</option>
                            <?php
                            require_once("controller_office.php");
                            $offices = getAllOffices();
                            foreach ($offices as $index => $office) {
                            ?>
                                <option value="<?= $index ?>"><?= $office->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>