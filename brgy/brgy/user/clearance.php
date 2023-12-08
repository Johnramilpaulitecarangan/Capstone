<?php  if(!isset($_SESSION)){session_start();}
        include_once("../connections/connection.php");
            $con = connection(); 
            ?>
<?php if(isset($_SESSION['UserLogin'])){?>
    <?php 
     if(isset($_POST['submited'])){

         
    $firstname =$_POST['firstname'];
    $middlename =$_POST['middlename'];
    $lastname =$_POST['lastname'];
    $age =$_POST['age'];
    $purok =$_POST['purok'];
    $purpose =$_POST['purpose'];
    $status=$_POST['status'];
    $requesterId=$_POST['requesterId'];
 
    $con = connection();
     $sql = "INSERT INTO tblclearance( id, firstname, middlename, lastname, age, purok, purpose, status,requesterId) VALUES 
     ('','$firstname', '$middlename','$lastname', '$age', '$purok' , '$purpose','$status','$requesterId')";

     if ($con->query($sql) === TRUE) {
        echo '<script>alert("Submitted")</script>';
        echo'<script>window.location.href = "tabClearance.php"</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        echo'<script>window.location.href = "tabClearance.php"</script>';
      }
 
        
    }

    $sql = " SELECT * FROM users where `id` = '".$_SESSION['userid']."'";
    $result=$con->query($sql) or die ($con->error);
    $row=$result->fetch_assoc(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>

<style>
    .container {
        margin-top:30px;
  padding: 20px;
  background-color: white;
  width:50%;
  border-radius: 40px;
  border: 2px solid black;
  margin-left:auto;
  margin-right:auto;
}

/* Full-width input fields */
input[type=text], input[type=number] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  border-radius: 40px;
}

.registerbtn:hover {
  opacity: 1;
}
#purpose
{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
</style>
<body>
<div class="main">
<form action="" class="box" method="POST">
  <div class="container">
    <h1 style="text-align: center;">Requesting Form of Barangay Clearance</h1></br>
    <hr><br>
 

    <input type="hidden"  name="lastname" id="lastname"  value="<?php echo $row['lastName'];?>">
    <input type="hidden" name="firstname" id="firstname"  value="<?php echo $row['firstName'];?>">
    <input type="hidden" name="middlename" id="lastname" value="<?php echo $row['middleName'];?>">
    <input type="hidden"  name="age" id="age" value="<?php echo $row['age'];?>">
    <input type="hidden" name="purok" id="purok" value="<?php echo $row['purok'];?>">
    <label for="resident"><b>Purpose:</b></label>
    <input type="text" placeholder="Fill here" name="purpose" id="purpose" required>
    <input type="hidden" name="status" value="1">
    

    <input type="hidden" name="requesterId" value="<?php echo $row['id'];?>">
    <hr id="hr">
<div align="center">
    <input type="submit" name="submited" class="registerbtn" style="font-size:20px;" value="Submit">
</div>
  </div>
</form>
</div>    
</body>
</html>
<?php }else { echo header("location: index.php"); }?>
