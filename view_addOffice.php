<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
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
                            <a class="nav-link active" href="view_addOffice.php">Tambah Office</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_officeEmployee.php">Office Employee</a>
                        </li>
                      
                    </ul>
            </div>
            <div class="card-body text-start">

                <form method="POST" action="controller_office.php" class="">
                    <div class="mb-3">
                        <label for="namaOffice" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namaOffice" placeholder="Masukkan Nama Office">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat">
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" placeholder="Masukkan Kota">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input type="number" class="form-control" name="kontak" placeholder="Masukkan Nomor Kontak">
                    </div>

                    <div class="col-12">
                        <button name="button_submit_office" type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>