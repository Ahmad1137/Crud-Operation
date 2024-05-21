<?php 
include 'connect.php';

$login =false;
$showError = false;
if(isset($_POST['login']))
 {
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="Select * from users where email='$email' AND password ='$password'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      $login =true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['email']=$email;
      header("location:display.php");
      exit;
    }
    else
    {
      $showError="invalid Email or Password";
    }
 }
?>
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
  <?php require '_nav.php'?>
  <?php 
  if($login){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully</strong> You are loggedin.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
   if($showError){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> '.$showError.'.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
             <div class="mt-3">
              <p>Don't have an account yet? <a href="signup.php" class="login-link">Singup</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Required JavaScript libraries for Bootstrap components to work -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgpHvIlSErsZpVTqMXh8tLT/8UyVMSL1roF5q6x5cmDA6j6gD8e" crossorigin="anonymous"></script>
  <!-- Additional JavaScript to ensure Bootstrap dismiss functionality works -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var closeButton = document.querySelector('.alert-dismissible .close');
      if (closeButton) {
        closeButton.addEventListener('click', function() {
          var alert = this.parentNode;
          alert.parentNode.removeChild(alert);
        });
      }
    });
  </script>
</body>
</html>
