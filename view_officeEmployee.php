<?php require("controller_employee.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Office Employee Management</title>
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
                        <a class="nav-link text-white" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_addOffice.php">New Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold active" href="view_officeEmployee.php">Office Employee</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h1 class="mb-4">Employee Office Assignment</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Office</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $counter = 0;
                            $allEmployee = getAllEmployees();
                            foreach ($allEmployee as $index => $employee) {
                                $counter++;
                            ?>
                                <tr>
                                <th scope="row"><?= $counter ?></th>
                                    <td><?= $employee->nama ?></td>
                                    <td><?= isset($employee->office_id) && $employee->office_id ? $employee->office_id : 'N/A' ?></td>
                                    <td class="text-center">
                                        <a href="controller_employee.php?deleteID=<?= $index ?>" class="btn btn-sm btn-danger">Delete</a>
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