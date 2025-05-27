<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffe6f0;
    }
    .login-container {
      margin-top: 100px;
    }
    .card {
      border: 2px solid #f78fb3;
    }
    .btn-pink {
      background-color: #f78fb3;
      color: white;
    }
    .btn-pink:hover {
      background-color: #f368e0;
    }
  </style>
</head>
<body>
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header text-center text-white" style="background-color:#f78fb3;">
            <h4>Login Form</h4>
          </div>
          <div class="card-body">
            <form action="result.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <button type="submit" class="btn btn-pink w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>