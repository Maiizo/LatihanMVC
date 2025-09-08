<?php 
include("controller_office.php");
?>
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
                            <a class="nav-link active" aria-current="true" href="view_addemployee.php">Tambah Karyawan</a>
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
                      
                    </ul>
            </div>
            <div class="card-body text-start">

                <form method="POST" action="controller_employee.php" class="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="usia" class="form-label">Usia</label>
                        <input type="number" class="form-control" name="usia" placeholder="Masukkan Usia">
                    </div>

                    <div class="mb-3">
                        <label for="office" class="form-label">Office</label>
                        <select class="form-select" name="office" required>
                            <option value="">Select Office Location</option>
                            <option value="UC Surabaya">UC Surabaya</option>
                            <option value="UC Makassar">UC Makassar</option>
                          <?php
                            $offices = getAllOffice();
                            foreach ($offices as $office) {
                                echo "<option value='" . htmlspecialchars($office->namaOffice) . "'>" . htmlspecialchars($office->namaOffice . " - " . $office->kota) . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <button name="button_submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>