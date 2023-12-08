<?php 
      include_once("../../connections/connection.php");

      $con = connection();


     if(isset($_POST['submit'])){

    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $username =$_POST['username'];
    $password =$_POST['password'];
    $firstName =$_POST['firstName'];
    $middleName =$_POST['middleName'];
    $lastName =$_POST['lastName'];
    $exName =$_POST['exName'];
    $age =$_POST['age'];
    $birthDate =$_POST['birthDate'];
    $purok =$_POST['purok'];
    $gender =$_POST['gender'];
    $birthPlace =$_POST['birthPlace'];
    $emailAddress =$_POST['emailAddress'];
    $contactNumber =$_POST['contactNumber'];

     $sql = "INSERT INTO `users`( `photo`,`username`,`password`,`firstName`, `middleName`, `lastName`,`exName`, `age`, `birthDate`, `purok`,`gender`,`birthPlace`, `emailAddress`, `contactNumber`) VALUES ('$file','$username','$password','$firstName', '$middleName', '$lastName','$exName', '$age' , '$birthDate' , '$purok' ,'$gender' ,'$birthPlace' , '$emailAddress', '$contactNumber')";

        $con->query($sql) or die ($con->error);
        echo '<script>alert("Successfully Updated")</script>';
        echo'<script>window.location.href = "../user.php"</script>';
 
    }
?>