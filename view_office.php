<?php require_once("controller_employee.php");
require_once("controller_office.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card shadow-lg text-center">
            <div class="card-header bg-primary text-white">
                <ul class="nav nav-tabs card-header-tabs border-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_addEmployee.php">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold active" href="view_office.php">Office</a>
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
                <h1 class="mb-4">Office Management</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Office Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Phone</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 0;
                        $allOffices = getAllOffices();
                        foreach ($allOffices as $index => $office) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= $counter ?></th>
                                <td><?= $office->nama ?></td>
                                <td><?= $office->alamat ?></td>
                                <td><?= $office->kota ?></td>
                                <td><?= $office->telepon ?></td>
                                <td class="text-center">
                                    <a href="controller_office.php?deleteOfficeID=<?= $index ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>