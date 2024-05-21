<?php
 include 'connect.php';
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .card {
      margin-top: 50px;
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .login-link {
      text-decoration: none;
      color: #007bff;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header">
            Signup
          </div>
          <div class="card-body">
            <form action="signup.php" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
              </div>
              <button type="submit" class="btn btn-primary">Signup</button>
            </form>
            <div class="mt-3">
              <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
