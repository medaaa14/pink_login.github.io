<?php
$name = $_POST['name'];
$email = $_POST['email'];

if (empty($name) || empty($email)) {
  header("Location: error.php");
  exit();
}

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
$hari = date("l");
$tanggal = date("d-m-Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff0f5;
    }
    .card {
      border: 2px solid #f78fb3;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header text-white text-center" style="background-color:#f78fb3;">
        <h4>Welcome, <?= htmlspecialchars($name) ?>!</h4>
      </div>
      <div class="card-body">
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Jam Login:</strong> <?= $jam ?></p>
        <p><strong>Hari:</strong> <?= $hari ?></p>
        <p><strong>Tanggal:</strong> <?= $tanggal ?></p>
      </div>
    </div>
  </div>
</body>
</html>