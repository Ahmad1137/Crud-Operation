<?php
 include 'connect.php';
 $id=$_GET['updatedid'];
 $sql ="select * from `crud` where id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
 if(isset($_POST['submit']))
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql ="update `crud` set id='$id', name='$name',email='$email',mobile='$mobile',password='$password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        // echo "Data inserted Successfully";
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     <?php require '_nav.php'?>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your name" name="name" autocomplete="off" value=<?php echo $name;?> require>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?> require>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your Mobile" name="mobile" autocomplete="off" value=<?php echo $mobile;?> require>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" value=<?php echo $password;?> require>
  </div>
  <div class="form-check mt-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  
  </body>
</html>