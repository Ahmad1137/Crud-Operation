<?php
include 'connect.php';
$shoError =false;
$showAlert =false;
if(isset($_POST['signup']))
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sqlexit="SELECT * FROM `users` WHERE email ='$email'";
    $result=mysqli_query($con,$sqlexit);
    $numExsitrow=mysqli_num_rows($result);
    if($numExsitrow>0)
    {
      $shoError ="This Email is already exists";
    }
    else
    {
    $sql ="insert into `users` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      $showAlert =true;
      
      
    }
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="styles.css"> -->
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
  <?php require '_nav.php'?>
  <?php 
  if($showAlert){
  echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully</strong> You can login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  if($shoError){
  echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> '.$shoError.'.
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
              <button type="submit" class="btn btn-primary" name="signup">Signup</button>
            </form>
            <div class="mt-3">
              <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
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
