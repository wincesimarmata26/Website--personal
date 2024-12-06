<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hari Belajar PHP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div class="container">
        <h1>Daftar Hari Belajar PHP</h1>
        <ul>
            <?php
            for ($i = 1; $i <= 1000; $i++) { // Mengurangi jumlah item untuk tampilan lebih singkat
                echo "<p>$i. Ini adalah hari ke-$i belajar PHP</p>";
            }
            ?>
        </ul>

        <!-- Kalkulator -->
        <div class="calculator">
            <h2>Kalkulator Sederhana</h2>
            <form action="hasil.php" method="GET" id="kalkulator">
                <div class="form-group">
                    <label for="angka1">Angka Pertama:</label>
                    <input type="number" name="angka1" id="angka1" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="angka2">Angka Kedua:</label>
                    <input type="number" name="angka2" id="angka2" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="operator">Operator:</label>
                    <select name="operator" id="operator" class="form-control" required>
                        <option value="tambah">Tambah (+)</option>
                        <option value="kurang">Kurang (-)</option>
                        <option value="kali">Kali (×)</option>
                        <option value="bagi">Bagi (÷)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>

    </div>

    <div class="container">
        <h1>Halaman Login</h1>
        <form method="POST" action="" id="login">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';

            // Data login valid
            $validUsername = "admin";
            $validPassword = "1234";

            if (empty($username) || empty($password)) {
                echo "
                <script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Input Tidak Lengkap',
                        text: 'Silakan isi username dan password.',
                        confirmButtonText: 'Kembali'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'daftar_hari.php#login';
                        }
                    });
                </script>";
            } elseif ($username === $validUsername && $password === $validPassword) {
                echo "
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Sukses',
                        text: 'Selamat datang, $username!',
                        confirmButtonText: 'Kembali'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'daftar_hari.php#login';
                        }
                    });
                </script>";
            } else {
                echo "
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Gagal',
                        text: 'Username atau password salah.',
                        confirmButtonText: 'Kembali'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'daftar_hari.php#login';
                        }
                    });
                </script>";
            }
        }
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>