<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();



if(isset($_POST['update'])){
    $id =$_POST['id'];


    $hh =$_POST['hh'];
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $middlename =$_POST['middlename'];
    $exname =$_POST['exname'];
    $purok =$_POST['purok'];
    $contactnumber =$_POST['contactnumber'];
    $email =$_POST['email'];
    $gender =$_POST['gender'];
    $status =$_POST['status'];
    $religion =$_POST['religion'];
    $birthday =$_POST['birthday'];
    $placebirth =$_POST['placebirth'];
    $age =$_POST['age'];
    $school =$_POST['school'];
    $educational =$_POST['educational'];
    $employment =$_POST['employment'];
    $occupation =$_POST['occupation'];
    $income =$_POST['income'];
    $voter =$_POST['voter'];
    $relation =$_POST['relation'];

    $sql = "UPDATE residents SET  hh = '$hh' ,firstname = '$firstname' ,lastname = '$lastname' ,middlename = '$middlename' ,exname = '$exname' ,purok = '$purok' ,contactnumber = '$contactnumber' ,email = '$email' ,gender = '$gender' ,status = '$status' ,religion = '$religion' ,birthday = '$birthday' ,placebirth = '$placebirth' ,age = '$age' ,school = '$school' ,educational = '$educational' ,employment = '$employment' ,occupation = '$occupation' ,income = '$income' ,voter = '$voter' ,relation = '$relation'   WHERE id = '$id' ";



        
    $con->query($sql) or die ($con->error);


    echo '<script>alert("Successfully Updated")</script>';
echo'<script>window.location.href = "../brgyresident.php"</script>';




}

?>