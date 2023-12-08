<?php  
      
        
      include_once("../../connections/connection.php");

      $con = connection();

     if(isset($_POST['submit'])){

        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
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
        $position =$_POST['position'];
       
    
        $hsql	= "SELECT * FROM residents WHERE hh = '$hh' and position =  'Head Family' ";



        $user = $con->query($hsql) or die ($con->error);
        $total = $user->num_rows; 
          if ($total > 0) {
        echo '<script>alert("HouseHold Head Already Exist")</script>';
        echo'<script>window.location.href = "../brgyresidenthead.php"</script>';
            exit();
        }
        $sql = "INSERT INTO `residents`( `photo`,`hh`,`firstname`, `middlename`, `lastname`, `exname`, `purok`, `contactnumber`, `email`,`gender`,`status`,`religion`, `birthday`, `placebirth`, `age`, `school`, `educational`, `employment`,`occupation`,`income`,`voter`,`position`) VALUES
        ('$file','$hh','$firstname', '$middlename', '$lastname', '$exname' , '$purok' , '$contactnumber' , '$email', '$gender','$status','$religion', '$birthday', '$placebirth' , '$age' , '$school' , '$educational', '$employment','$occupation','$income','$voter','$position')";

if ($con->query($sql) === TRUE) {
            echo '<script>alert("Submitted")</script>';
            echo'<script>window.location.href = "../brgyresidenthead.php"</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            echo'<script>window.location.href = "../brgyresidenthead.php"</script>';
          }    
        }




        // echo $file .'</br>';
        // echo $hh .'</br>';
        // echo $firstname .'</br>';
        // echo $middlename.'</br>';
        // echo $lastname.'</br>';
        // echo $exname.'</br>';
        // echo $purok.'</br>';
        // echo $contactnumber.'</br>';
        // echo $email.'</br>';
        // echo $gender.'</br>';
        // echo $status.'</br>';
        // echo $religion.'</br>';
        // echo $birthday.'</br>';
        // echo $placebirth.'</br>';
        // echo $age.'</br>';
        // echo $school.'</br>';
        // echo $educational.'</br>';
        // echo $employment.'</br>';
        // echo $occupation.'</br>';
        // echo $income.'</br>';
        // echo $voter.'</br>';
        // echo $position.'</br>';
       
  
    
?>
