<?php  if(!isset($_SESSION)){session_start();}
        include_once("../connections/connection.php");
            $con = connection(); 
            ?>
<?php if(isset($_SESSION['UserLogin'])){

$sql = " SELECT * FROM users where `id` = '".$_SESSION['userid']."'";
$result=$con->query($sql) or die ($con->error);
$row=$result->fetch_assoc(); ?>
    <?php 
     if(isset($_POST['submited'])){

    $requesterId =$_POST['requesterId'];
    $name =$_POST['name'];
    $purok =$_POST['purok'];
    $businessName =$_POST['businessName'];
    $businessType =$_POST['businessType'];
    $status=$_POST['status'];
  
    $con = connection();
   
     $sql = "INSERT INTO tblbusiness( id,requesterId, name,purok, businessName,businessType,status) VALUES 
     ('','$requesterId','$name','$purok','$businessName ','$businessType','$status')";

     if ($con->query($sql) === TRUE) {
        echo '<script>alert("Submitted")</script>';
        echo'<script>window.location.href = "tabBusiness.php"</script>';
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
       
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
  text-align:center;
}

/* Full-width input fields */
input[type=text], input[type=number] {
  width: 80%;
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
    <h1 style="text-align: center;">Requesting Form of Business Permit</h1></br>
    <hr><br>
    <input type="hidden"  name="name" id="name" value="<?php echo $row['firstName'] . ' '. $row['middleName'].' ' .$row['lastName'];?>">
    <label><b>Business Name</b></label><br> 
    <input type="text" placeholder="Name of Business" name="businessName" id="nabusinessName" required><br>
    <label><b>Type Business</b></label><br> 
    <input type="text" placeholder="Type of Business" name="businessType" id="nabusinessType" required><br>
    
    <input type="hidden" name="requesterId" value="<?php echo $row['id'];?>">
    <input type="hidden" name="purok" value="<?php echo $row['purok'];?>">
   
    <input type="hidden" name="status" value="1">
    
    
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