<?php session_start();
include_once("../connections/connection.php");

     if(isset($_POST['submited'])){

         
    $organization =$_POST['organization'];
    $event =$_POST['event'];
    $gym =$_POST['gym'];
    $description =$_POST['description'];
    $status =$_POST['status'];
    $date =$_POST['date'];
    $timestart =$_POST['start'];
    $timeend =$_POST['end'];
    $con = connection();

    /*Schedule Date
    $hsql	= "SELECT * FROM reservation WHERE exists (gym_address = '$gym' and date = '$date' and start_from = '$timestart') 
    or exists (SELECT * FROM reservation WHERE gym_address = '$gym' and date = '$date' and start_from = '$timeend')  
    or exists (SELECT * FROM reservation WHERE gym_address = '$gym' and date = '$date' and end_to = '$timeend') 
    or exists (SELECT * FROM reservation WHERE gym_address = '$gym' and date = '$date' and end_to = '$timestart')";
*/
/*Schedule Date*/
    $hsql	= "SELECT * FROM reservation WHERE gym_address = '$gym' and reqdate = '$date' and start_from = '$timestart' 
    or gym_address = '$gym' and reqdate = '$date' and start_from <= '$timeend' 
    or gym_address = '$gym' and reqdate = '$date' and end_to = '$timeend'
    or gym_address = '$gym' and reqdate = '$date' and end_to = '$timestart'";


    $user = $con->query($hsql) or die ($con->error);
    $total = $user->num_rows; 
	  if ($total > 0) {
    echo '<script>alert("Date is Not Available")</script>';
    echo'<script>window.location.href = "tabReservation.php"</script>';
		exit();
	}
    $sql = "INSERT INTO reservation( organization_name,name_of_event, gym_address, description, status,req                                                                                                                                                                                                                                                                                                                                                                                                                                                                    date, start_from, end_to) VALUES ('$organization', '$event','$gym', '$description','$status', '$date', '$timestart' , '$timeend')";
     if ($con->query($sql) === TRUE) {
        echo '<script>alert("Submitted")</script>';
        echo'<script>window.location.href = "tabReservation.php"</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        echo'<script>window.location.href = "tabReservation.php"</script>';
      }    
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin/navigation.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
   
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: white;
  border: 6px solid #ddd;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
textarea{  
  width: 100%;
  height: 40px;
  padding: 15px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 5px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

.table-responsive{
            border: 1px solid #ddd;
            border-radius: 10px;
         
        }
            td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}

td {
    text-align: center;
    margin:  200px;
}

tr:nth-child(even) {
    background-color: #eee;
}

th{
    background-color: #696969;
    color: #fff;
}



.caption1 {
   
    background: whitesmoke;
    padding: 10px;
    caption-side: top;
    font-weight: bold; 
    font-size: 20px;
    border-bottom: 1px solid black;
}.caption2 {
    
    background: whitesmoke;
    padding: 5px;
    caption-side: top;
    font-weight: bold; 
    font-size: 10px;
}
table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
    width:100%;
}

.col-1 {width: 60%;
MARGIN-LEFT:AUTO;
MARGIN-RIGHT:AUTO;
}

</style>
<body>
<div class="main">
    
<div class="col-1">  
            <form action="" class="box" method="POST">
  <div class="container">
    <h1 style="text-align: center;">Gym Reservation Form</h1></br>
    <p style="text-align: center;">Please fill in this form for Reservation.</p>
    <hr>

    <label for="organization"><b>Organization Name</b></label>
    <input type="text" placeholder="Please Enter Organization Name" name="organization" id="organization" required>

    <label for="event"><b>Name of Event</b></label>
    <input type="text" placeholder="Please Enter Name of Event" name="event" id="event" required>
    <input type="hidden" name="status" id="status" value="1"required>
    
    <label for="event"><b>Event Description</b></label>
    <textarea name="description" id="event" cols="30" rows="10" placeholder="Please Enter The Event Description"></textarea>

    <label for="gym"><b>Gym Address:</Adr></b></label>
     <select id="appt" name="gym" required>
    <option value="">-Select Here-</option>
    <option value="Atate Bliss Gym">Atate Bliss Gym</option>
    <option value="Atate Gym">Atate Gym</option>
    <option value="RVC Gym">RVC Gym</option>
    <option value="Pinaltakan Gym">Pinaltakan Gym</option>
</select>
<br><br>
    <label for="date"><b>Date:</b></label>
    <input type="date" id="date" name="date" required>
    <br><br>

    <label for="start"><b>Start From:</b></label>
     <select id="appt" name="start" required>
    <option value="">-Time-</option>
    <option value="6">06:00 (AM)</option>
    <option value="7">07:00 (AM)</option>
    <option value="8">08:00 (AM)</option>
    <option value="9">09:00 (AM)</option>
    <option value="10">10:00 (AM)</option>
    <option value="11">11:00 (AM)</option>
    <option value="12">12:00 (PM)</option>
    <option value="13">01:00 (PM)</option>
    <option value="14">02:00 (PM)</option>
    <option value="15">03:00 (PM)</option>
    <option value="16">04:00 (PM)</option>
    <option value="17">05:00 (PM)</option>
    <option value="18">06:00 (PM)</option>
    <option value="19">07:00 (PM)</option>
    <option value="20">08:00 (PM)</option>
</select>

     <label for="end"><b>End To:</b></label>
     <select id="apptend" name="end" required>
    <option value="">-Time-</option>
    <option value="8">08:00 (AM)</option>
    <option value="9">09:00 (AM)</option>
    <option value="10">10:00 (AM)</option>
    <option value="11">11:00 (AM)</option>
    <option value="12">12:00 (PM)</option>
    <option value="13">01:00 (PM)</option>
    <option value="14">02:00 (PM)</option>
    <option value="15">03:00 (PM)</option>
    <option value="16">04:00 (PM)</option>
    <option value="17">05:00 (PM)</option>
    <option value="18">06:00 (PM)</option>
    <option value="19">07:00 (PM)</option>
    <option value="20">08:00 (PM)</option>
    <option value="21">09:00 (PM)</option>
    <option value="22">10:00 (PM)</option>
</select>
    <hr id="hr">
<div align="center">
    <input type="submit" name="submited" class="registerbtn" style="font-size:20px;" value="Submit">
</div>
  </div>
</form>
</div>
</div>
</div>    
</body>
</html>