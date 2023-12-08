<?php  
        include_once("../../connections/connection.php");
            $con = connection(); 
            $id =$_POST['id'];


     if(isset($_POST['update'])){

         
    $organization =$_POST['organization'];
    $event =$_POST['event'];
    $gym =$_POST['gym'];
    $description =$_POST['description'];
    $date =$_POST['date'];
    $timestart =$_POST['start'];
    $timeend =$_POST['end'];
    $comment =$_POST['comment'];
    $status =$_POST['status'];
  
    $con = connection();


  
    $hsql	= "SELECT * FROM reservation WHERE gym_address = '$gym' and date = '$date' and start_from = '$timestart' 
    or gym_address = '$gym' and date = '$date' and start_from <= '$timeend' 
    or gym_address = '$gym' and date = '$date' and end_to = '$timeend'
    or gym_address = '$gym' and date = '$date' and end_to = '$timestart'";


    $user = $con->query($hsql) or die ($con->error);
    $total = $user->num_rows; 
	  if ($total > 0) {
    echo '<script>alert("Date is Not Available")</script>';
    echo'<script>window.location.href = "../tabReservation.php"</script>';
		exit();
	}
    $sql = "UPDATE reservation SET  organization_name = '$organization',name_of_event = '$event',gym_address = '$gym',requestdate = '$date',description = '$description',start_from = '$timestart',end_to = '$timeend',comment = '$comment',status = '$status' WHERE id = '$id' ";   if ($con->query($sql) === TRUE) {
        echo '<script>alert("Submitted")</script>';
        echo'<script>window.location.href = "../tabReservation.php"</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        echo'<script>window.location.href = "../taRreservation.php"</script>';
      }    
    }


    
?>