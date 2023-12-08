<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
$id =$_POST['id'];


if(isset($_POST['submit'])){

 
    $firstName =$_POST['firstName'];
    $middleName =$_POST['middleName'];
    $lastName =$_POST['lastName'];
    $exName =$_POST['exName'];
    $age =$_POST['age'];
    $purok =$_POST['purok'];
    $birthDate =$_POST['birthDate'];
    $birthPlace =$_POST['birthPlace'];
    $gender =$_POST['gender'];
    $emailAddress =$_POST['emailAddress'];
    $contactNumber =$_POST['contactNumber'];

     $sql = "UPDATE users SET firstName = '$firstName' , middleName = '$middleName', lastName = '$lastName', exName = '$exName', age = '$age',purok = '$purok', birthDate = '$birthDate', birthPlace = '$birthPlace', gender = '$gender', emailAddress = '$emailAddress', contactNumber = '$contactNumber' WHERE id = '$id' ";

        $con->query($sql) or die ($con->error);


echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../personalacc.php"</script>';

}