<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perpustakaan Wince Simarmata</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-image: url("picture/efa2c05b-5f7e-430f-a22e-867136c5e31e.jpg");
      background-size: cover;
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

    h3 {
      margin-top: 20px;
      text-align: center;
    }

    section {
      margin-bottom: 40px;
    }

    footer {
      margin-top: 20px;
      text-align: center;
      font-weight: bold;
    }

    img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .media-section {
      margin-top: 50px;
    }

    .audio-control {
      width: 100%;
      max-width: 500px;
      margin: auto;
    }

    .nav>li>a {
      padding: 15px 20px;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
    }
  </style>
</head>

<body>
  <div id="navbar-placeholder"></div>

  <div class="container text-center my-5">
    <h1 class="display-4 font-weight-bold text-primary">Perpustakaan Universitas Kristen Indonesia</h1>
    <h2 class="text-secondary mb-4">Welcome To Perpustakaan Wince Simarmata</h2>
    <div class="welcome-text bg-light p-4 rounded shadow">
      <p>
        Perkenalkan, nama saya Wince Simarmata dengan Nim 222201030. Ini adalah perpustakaan
        <i>homepage</i> <b>pertama</b> saya, karena saya baru belajar tentang cara membuat
        <b><i><a href="https://digilib.umbp.ac.id/">website perpustakaan Universitas Kristen Indonesia </a></i></b>.
      </p>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Perpustakaan Wince Simarmata. All Rights Reserved.</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
    $(function() {
      $("#navbar-placeholder").load("navbar.php");
    });
  </script>
</body>

</html>