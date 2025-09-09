<?php require("controller_office.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body style="margin-top: 400px;">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="view_addemployee.php">Tambah Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="view_employee.php">List Karyawan</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link" href="view_addOffice.php">Tambah Office</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_officeEmployee.php">Office Employee</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="view_office.php">List Office</a>
                        </li>
                      
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Office</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                        $allOffices = getAllOffice();
                        foreach ($allOffices as $index => $office) {
                            $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?= ($counter) ?></th>
                                <td><?= $office->namaOffice ?></td>
                                <td><?= $office->alamat ?></td>
                                <td><?= $office->kota ?></td>
                                <td><?= $office->kontak ?></td>
                                <td>
                                    <a href="controller_office.php?deleteID=<?= $index ?>">
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