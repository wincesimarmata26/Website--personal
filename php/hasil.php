<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulasi</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
            max-width: 600px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hasil Kalkulasi</h1>
        <?php
        if (isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])) {
            $angka1 = $_GET['angka1'];
            $angka2 = $_GET['angka2'];
            $operator = $_GET['operator'];
            $hasil = "Tidak valid";

            switch ($operator) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali':
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi':
                    $hasil = $angka2 != 0 ? $angka1 / $angka2 : 'Tidak bisa dibagi dengan nol';
                    break;
            }

            echo "<p>Hasil dari <strong>$angka1</strong> $operator <strong>$angka2</strong> adalah:</p>";
            echo "<h2>$hasil</h2>";
        } else {
            echo "<p>Data tidak lengkap. Silakan ulangi proses.</p>";
        }
        ?>
        <a href="daftar_hari.php#kalkulator" class="btn btn-primary mt-3">Kembali</a>


    </div>
</body>

</html>