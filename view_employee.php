<?php require("controller_employee.php"); ?>
<!-- kalo ga pake require, maka harus pake session start in each file, a.k.a if use include -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addEmployee.php">New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    
                </ul>
            </div>

            <div class="card-body">
                <h1 class="mb-4">Employee</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Usia</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allemployees = getAllEmployees();
                            foreach ($allemployees as $index => $employee) {
                                $counter++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo ($counter); ?></th>
                                    <td><?= $employee->nama ?></td>
                                    <td><?= $employee->jabatan ?></td>
                                    <td><?= $employee->usia ?></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="view_updateEmployee.php?updateID=<?= $index ?>">
                                            <button class="btn btn-warning">Update</button>
                                        </a>
                                        <a href="controller_employee.php?deleteID=<?= $index ?>">
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </a>

                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>