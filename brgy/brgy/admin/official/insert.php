<?php  
        include_once("../../connections/connection.php");
            $con = connection(); 
    

     if(isset($_POST['submit'])){

        
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $firstName =$_POST['firstName'];
    $middleName =$_POST['middleName'];
    $lastName =$_POST['lastName'];
    $exName =$_POST['exName'];
    $age =$_POST['age'];
    $birthDate =$_POST['birthDate'];
    $gender =$_POST['gender'];
    $emailAddress =$_POST['emailAddress'];
    $contactNumber =$_POST['contactNumber'];
    $position =$_POST['position'];
    $start =$_POST['start'];
    $end =$_POST['end'];

     $sql = "INSERT INTO `official`( `photo`,`firstName`, `middleName`, `lastName`, `exName`, `age`, `birthDate`, `gender`, `emailAddress`, `contactNumber`,`position`,`start`,`end`) VALUES
                                ('$file','$firstName', '$middleName', '$lastName', '$exName', '$age' , '$birthDate' , '$gender' , '$emailAddress', '$contactNumber','$position','$start','$end')";

        $con->query($sql) or die ($con->error);
 
        echo '<script>alert("Submitted")</script>';
        echo'<script>window.location.href = "../brgyofficial.php"</script>';
    }
?>