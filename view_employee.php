<?php
require_once("controller_employee.php");
require_once("controller_office.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card shadow-lg text-center">
            <div class="card-header bg-primary text-white">
                <ul class="nav nav-tabs card-header-tabs border-0">
                    <li class="nav-item">
                        <a class="nav-link active text-black fw-bold" href="view_employee.php"> Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_addEmployee.php"> New Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_office.php"> Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_addOffice.php"> New Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="view_officeEmployee.php"> Office Employee</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <h1 class="mb-4">Employee Management</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Office</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allemployees = getAllEmployees();
                            foreach ($allemployees as $index => $employee) {
                                $counter++;
                                $office_name = ''; 
                                if (isset($employee->office_id) && $employee->office_id !== '') {
                                    $office = getOfficeById($employee->office_id);
                                    if ($office) {
                                        $office_name = $office->nama;
                                    }
                                }
                            ?>
                                <tr>
                                    <th scope="row"><?php echo ($counter); ?></th>
                                    <td><?= $employee->nama ?></td>
                                    <td><?= $employee->jabatan ?></td>
                                    <td><?= $employee->usia ?></td>
                                    <td><?= $office_name ?></td>
                                    <td class="text-center">
                                        <a href="view_updateEmployee.php?updateID=<?= $index ?>" class="btn btn-sm btn-warning">Update</a>
                                        <a href="controller_employee.php?deleteID=<?= $index ?>" class="btn btn-sm btn-danger">Delete</a>
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