<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

    </style>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="display.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
             <div class="mt-3">
              <p>Don't have an account yet? <a href="signup.php" class="login-link">Singup</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
