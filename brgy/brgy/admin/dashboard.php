<?php  if(!isset($_SESSION)){session_start();}
        include_once("../connections/connection.php");
            $con = connection(); 
            
             
            $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE voter = 'YES'";
          $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
          $yes = $row['count'];
        } 
        $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE voter = 'NO'";
      $result=$con->query($sql) or die ($con->error);
    while($row = mysqli_fetch_assoc($result)){
      $no = $row['count'];
    } 
    $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE school = 'In'";
  $result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
  $in = $row['count'];
} 
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE school = 'Out'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$out = $row['count'];
}
            
            $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE gender = 'Male'";
          $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
          $male = $row['count'];
        }
        $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE gender = 'Female'";
        $result=$con->query($sql) or die ($con->error);
      while($row = mysqli_fetch_assoc($result)){
        $female = $row['count'];
      }
        $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE employment = 'Public'";
        $result=$con->query($sql) or die ($con->error);
      while($row = mysqli_fetch_assoc($result)){
        $pub = $row['count'];
      }
      $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE employment = 'Government'";
      $result=$con->query($sql) or die ($con->error);
    while($row = mysqli_fetch_assoc($result)){
      $gov = $row['count'];
    }
    $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE employment = 'None'";
    $result=$con->query($sql) or die ($con->error);
  while($row = mysqli_fetch_assoc($result)){
    $none = $row['count'];
  }
    $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '1'";
    $result=$con->query($sql) or die ($con->error);
  while($row = mysqli_fetch_assoc($result)){
    $one = $row['count'];
  }
  $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '2'";
  $result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
  $two = $row['count'];
}
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '3'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$three = $row['count'];
}
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '4'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$four = $row['count'];
}
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '5'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$five = $row['count'];
}
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '6'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$six = $row['count'];
}
$sql = " SELECT COUNT(*) AS count FROM `residents` WHERE purok = '7'";
$result=$con->query($sql) or die ($con->error);
while($row = mysqli_fetch_assoc($result)){
$seven = $row['count'];
}

            $sql = " SELECT COUNT(*) AS count FROM `residents`";
            $result=$con->query($sql) or die ($con->error);
          while($row = mysqli_fetch_assoc($result)){
            $resident = $row['count'];
          }
        
          $sql = " SELECT COUNT(*) AS count FROM `residents` WHERE position = 'Head Family'";
          $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
          $residenthead = $row['count'];
        }
      
         
          $sql = " SELECT COUNT(*) AS count FROM `users`";
          $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
          $users = $row['count'];
        }

        $sql = " SELECT COUNT(*) AS count FROM `reservation` ";
        $result=$con->query($sql) or die ($con->error);
      while($row = mysqli_fetch_assoc($result)){
        $reservation = $row['count'];
      }
        
        $sql = " SELECT status, COUNT(*) AS count FROM `tblbusiness` ";
        // WHERE status = 1
        $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
        $business = $row['count'];
        }
        
        $sql = " SELECT status, COUNT(*) AS count FROM `tblclearance` ";
        // WHERE status = 1
        $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
        $clearance = $row['count'];
        }

        $sql = " SELECT status, COUNT(*) AS count FROM `tblcertificate` ";
        // WHERE status = 1
        $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
        $certificate = $row['count'];
        }

        $sql = " SELECT status, COUNT(*) AS count FROM `tblindigency` ";
        // WHERE status = 1
        $result=$con->query($sql) or die ($con->error);
        while($row = mysqli_fetch_assoc($result)){
        $indigency = $row['count'];
        }
        
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
   
    h2{
        text-align: center;
    }
    .row-1{
        margin-right: 3%;
        margin-top: -1%;
    }
.row-1 table{
    width: 100%;
   
    border: 1px solid #006a83;
}
th,td{
    border: 3px solid #006a83;
    text-align: center;
}
.row-2{
    display: flex;
    margin-top: 20px;
}
.row-3{
    display: flex;
    margin-top: 20px;
   
 
}

.col-1{
    margin-right: 17%;
}
.card-single{
   
    display: flex;
    justify-content: space-between;
    background: #008587;
    padding: 2rem;
    border-radius: 5px;
    box-shadow: 4px 4px 10px #0c64bd;
    overflow: hidden;
    align-items: baseline;
    flex-wrap: nowrap;
    flex-direction: row;
    max-width:300px; min-height:160px;
    min-width:220px;
}
a{
  text-decoration: none;
}
.card-single h1{
color: black;


}
.card-single div:last-child span {
    background:transparent;
    color:black;
    font-size: 3rem;  
}
.card-single div:first-child span {
    background:transparent;
    font-size: 1.5rem; 
}
.card-single:last-child div:first-child span {
    color: #fff;  
}
.card-single:hover{
    background: #003462;
}

.caption {
   
   background: #4c918e78;
   text-align: center;
   caption-side: top;
   font-weight: bold; 
 
   
}
tr td{
  font-weight: bold;
  color: black;
  background: lightblue;
}
</style>
<body>
<div class="main">

<div class="row-1">
    <table>
        <caption class="caption">Barangay Residents Information Table</caption>
        <thead>
            <tr>
                <th colspan="2">Voter</th>
                <th colspan="2">School</th>
                <th colspan="2">Gender</th>
                <th colspan="3">Employment</th>
                <th colspan="8">Purok Population</th>
            </tr>
            <tr>
                <th>Yes</th>
                <th>NO</th>
                <th>In</th>
                <th>Out</th>
                <th>Male</th>
                <th>Female</th>
                <th>Goverment</th>
                <th>Public</th>
                <th>Unemployed</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
             
                <td><?php echo $yes;?></td>
                <td><?php echo $no;?></td>
                <td><?php echo $in;?></td>
                <td><?php echo $out;?></td>
                <td><?php echo $male;?></td>
                <td><?php echo $female;?></td>
                <td><?php echo $gov;?></td>
                <td><?php echo $pub;?></td>
                <td><?php echo $none;?></td>
                <td><?php echo $one;?></td>
                <td><?php echo $two;?></td>
                <td><?php echo $three;?></td>
                <td><?php echo $four;?></td>
                <td><?php echo $five;?></td>
                <td><?php echo $six;?></td>
                <td><?php echo $seven;?></td>
                <td><?php echo $resident;?></td>
               
            </tr>
        </tbody>
    </table>

</div>
<div class="row-2">
   
    <div class="col-1">
    <a href="brgyresidenthead.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $residenthead;?></h1>
                            <span>Barangay Household</span>
                        </div>
                        <div>
                            <span class="fas fa-house-user"></span>
                        </div>
                    </div>
                    </a>
    </div>
    <div class="col-1">
    <a href="brgyresident.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $resident;?></h1>
                            <span>Barangay Residents</span>
                        </div>
                        <div>
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                    </a>
    </div>

    <div class="col-1">
    <a href="user.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $users;?></h1>
                            <span>User Accounts</span>
                        </div>
                        <div>
                            <span class="fas fa-user-circle"></span>
                        </div>
                    </div>
                    </a>
    </div>
    <div class="col-1">
    <a href="tabReservation.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $reservation;?></h1>
                            <span>Gym Reservation</span>
                        </div>
                        <div>
                            <span class="fas fa-calendar-check"></span>
                        </div>
                    </div>
                    </a>
    </div>
    

   
</div>




<div class="row-3">

<div class="col-1">
    <a href="tabCertificate.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $certificate;?></h1>
                            <span>Cetificate Request</span>
                        </div>
                        <div>
                            <span class="fas fa-newspaper"></span>
                        </div>
                    </div>
                    </a>
    </div>

    <div class="col-1">
    <a href="tabClearance.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $clearance;?></h1>
                            <span>Clearance Request</span>
                        </div>
                        <div>
                           <span class="fas fa-newspaper"></span>
                        </div>
                    </div>
                    </a>
    </div>


    <div class="col-1">
    <a href="tabIndigency.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $indigency;?></h1>
                            <span>Indigency Request</span>
                        </div>
                        <div>
                           <span class="fas fa-newspaper"></span>
                        </div>
                    </div>
                    </a>
    </div>


    <div class="col-1">
    <a href="tabBusiness.php">
                   <div class="card-single" >
                        <div>
                            <h1> <?php echo $business;?></h1>
                            <span>Business Permit</span>
                        </div>
                        <div>
                           <span class="fas fa-newspaper"></span>
                        </div>
                    </div>
                    </a>
    </div>
</div>




</div>    
</body>
</html>