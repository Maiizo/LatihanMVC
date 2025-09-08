<?php require("controller_employee.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="view_addemployee.php">Tambah Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view_employee.php">List Karyawan</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link" href="view_addOffice.php">Tambah Office</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_officeEmployee.php">Office Employee</a>
                        </li>
                      
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Office</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allEmployee = getAllEmployee();
                            foreach ($allEmployee as $index => $employee) {
                                $counter++;

                            ?>
                                <tr>
                                    <th scope="row"><?= ($counter) ?></th>
                                    <td><?= $employee->nama ?></td>
                                    <td><?= $employee->jabatan ?></td>
                                    <td><?= $employee->usia ?></td>
                                    <td><?= isset($employee->office) ? $employee->office : 'N/A' ?></td>
                                    <td>
                                        <a href="controller_employee.php?deleteID=<?= $index ?>">
                                            <button class="btn btn-danger">Delete</button>
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