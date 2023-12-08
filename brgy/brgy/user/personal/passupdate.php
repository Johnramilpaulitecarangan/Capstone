<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['idpass'];

if(isset($_POST['submitpass'])){
    $password =$_POST['password'];
    $newpassword =$_POST['newpassword'];
    $username =$_POST['username'];

     if($password != $newpassword){
        echo '<script>alert("Passwords do not match.")</script>';
echo'<script>window.location.href = "../personalpass.php"</script>';
    }
    
    else{
        $sql = "UPDATE users SET password = '$password', username = '$username'  WHERE id = '$id' ";
    $con->query($sql) or die ($con->error);
echo '<script>alert("Password Successfully Changed!")</script>';
echo'<script>window.location.href = "../personalpass.php"</script>';
    }

}