<?php require("controller_office.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addOffice.php">New Office</a>
                    </li>
                </ul>
            </div>
            <div>
                <h1>Office Management</h1>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Office Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Phone</th>
                            <th>Actions</th>
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
                                <td><?= $counter ?></td>
                                <td><?= $office->nama ?></td>
                                <td><?= $office->alamat ?></td>
                                <td><?= $office->kota ?></td>
                                <td><?= $office->telepon ?></td>
                                <td>
                                    <a href="controller_office.php?deleteOfficeID=<?= $index ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>