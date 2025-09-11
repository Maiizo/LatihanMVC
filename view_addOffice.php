<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Office</title>
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
                        <a class="nav-link" href="view_addEmployee.php">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addOffice.php">New Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_officeEmployee.php">Office Employee</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <h1 class="mb-4 text-center">New Office</h1>
                <form method="POST" action="controller_office.php" class="w-50 mx-auto">
                    <div class="mb-3">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Nama" />
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="inputAlamat" placeholder="Alamat"  />
                    </div>
                    <div class="mb-3">
                        <label for="inputKota">Kota</label>
                        <input type="text" class="form-control" name="inputKota" placeholder="Kota"  />
                    </div>
                    <div class="mb-3">
                        <label for="inputTelepon" class="form-label">Telepon</label>
                        <input type="tel" class="form-control" name="inputTelepon" placeholder="Telepon"  />
                    </div>
                    <div class="d-grid">
                        <button name="button_register_office" type="submit" class="btn btn-primary">Register Office</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>