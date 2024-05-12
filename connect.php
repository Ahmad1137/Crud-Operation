<?php
 
 $con = new mysqli('localhost','root','' ,'crudopt');

 if(!$con)
 {
    die(mysqli_error($con));
 }
?>