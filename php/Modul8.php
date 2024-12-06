<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "tugas_crud");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tambah data
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO pengguna (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";
    $conn->query($sql);
    header("Location: Modul8.php");
}

// Hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM pengguna WHERE id=$id";
    $conn->query($sql);
    header("Location: Modul8.php");
}

// Ambil data untuk diedit
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM pengguna WHERE id=$id");
    $row = $result->fetch_assoc();
}

// Update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE pengguna SET nama='$nama', email='$email', telepon='$telepon' WHERE id=$id";
    $conn->query($sql);
    header("Location: Modul8.php");
}

// Ambil semua data pengguna
$result = $conn->query("SELECT * FROM pengguna");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("../picture/efa2c05b-5f7e-430f-a22e-867136c5e31e.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
            font-family: "Arial", sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1,
        h2 {
            color: #444;
            text-align: center;
        }

        .calculator {
            margin-top: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">CRUD Sederhana dengan PHP</h1>

        <!-- Form Tambah/Edit Data -->
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : '' ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required value="<?= isset($row['email']) ? $row['email'] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" required value="<?= isset($row['telepon']) ? $row['telepon'] : '' ?>">
            </div>
            <button type="submit" name="<?= isset($row) ? 'update' : 'tambah' ?>" class="btn btn-primary">
                <?= isset($row) ? 'Update Data' : 'Tambah Data' ?>
            </button>
        </form>

        <!-- Tabel Data -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['telepon'] ?></td>
                        <td>
                            <a href="Modul8.php?edit=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

                            <a href="Modul8.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>