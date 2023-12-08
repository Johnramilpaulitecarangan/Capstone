<?php  
      
        
      include_once("../../connections/connection.php");

      $con = connection();

  

  
      if(isset($_POST['certificate'])){ 
        $cer_from =$_POST['cer_from'];
        $cer_to =$_POST['cer_to'];
        $type =$_POST['type'];

        $sql = "SELECT * FROM $type WHERE requestdate between '$cer_from' and '$cer_to' order by requestdate ASC";
        $result = mysqli_query($con,$sql);
     
      }
     ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
               <title>Administrator Page</title>
       
               <style>
#two{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 25%;
            font-style: italic;
            font-size:11pt;
    font-weight:bold;
    font-family:Calibri;
            text-align:center;
        } 
        #two2{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 10%;
            font-style: italic;
            font-size:11pt;
    font-weight:bold;
    font-family:Calibri;
            text-align:center;
        } 
        #two3{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 20%;
            font-style: italic;
            font-size:11pt;
    font-weight:bold;
    font-family:Calibri;
            text-align:center;
        } 
        #two4{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 23%;
            font-style: italic;
            font-size:11pt;
    font-weight:bold;
    font-family:Calibri;
            text-align:center;
        } 
        

.top{
    font-size:12pt;
    line-height: 3pt;
  
    
    text-align: center;
    font-family:arial;
    font-weight: bold;
}
.trd{
    font-size:18pt;
   
    margin: 1px;
    text-align: left;
    
    text-align: center;
    font-family:Engravers MT;
    font-weight: bold;
}
.date{
  margin-top: -40px;
  margin-right: 20px;
  text-decoration: underline;
  font-weight: bold;
  float: right;
}
.title{
  text-align: center;
}
#prt-btn {
    margin-top: 100px;
    margin-left: 200px;
}
#printb{
   
    color: white;
    text-transform: uppercase;
    font-weight: 1000;
    border-radius: 17px 17px 17px 17px;
    border: 2px solid black;  
   
    background-color:blue;
    text-decoration: underline;
}
#printb2{
 
    color: white;
    text-transform: uppercase;
    font-weight: 1000;
    border-radius: 17px 17px 17px 17px;
    border: 2px solid black;  
   
    background-color:red;
}
#cancel{
    color: white;
    
}
button:hover{
    cursor:pointer;
}
@media print {  
		@page {
			size:auto ;
            margin: 0 ! important;
            padding: 0 ! important;
     
		}
		head{
			height:0px;
			display: none;
		}
		#prt-btn{
            height: 0px;
            display: none;
        }}
        #print{
          width:7.5in;
  
		
		}
	
.certificate{
    margin-left:auto;
    margin-right:auto;
}
table{
  width: 100%;
  

}
table,th,td{
  border: 1px solid black;
    border-collapse: collapse;
    font-size: 18px;
    text-align: revert;
}
tbody:nth-child(even) {
  background-color: rgba(150,212,212,0.4);
}
th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150,212,212,0.4);
}
.p4{ 
    text-align:right;
    margin:0;
    padding-right:1.27cm;
    font-size:11pt;
    font-weight:bold;
    text-decoration:underline;
    font-family:Calibri;
}
.p5{ 
    text-align:right;
    padding-right:2cm;
    margin:0;
    font-size:11pt;
    font-family:Calibri;
}
                </style>
                 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
      <div id="prt-btn">
        <button onclick="window.print()" id="printb">print</button>
        <button id="printb2"><a href="../clearance.php"  id="cancel" >cancel</a></button>
        </div>
    <body>
    

    <div class="certificate" id="print" >
    <form>
    <img src="../../img/atate.png" alt="BongabonLogo"   align="left" style="width:130px;height:130px;  border-radius: 50px; padding-left: 50px; padding-top:10px;"><img src="../../img/palayancity.png" alt="NuevaEcijaLogo"  align="right" style="width130px;height:130px; border-radius: 50px; padding-right: 50px;padding-top:10px;" >
    <br><br><br><p class="top">Republic of the Philippines</p>
    <p class="top">Province of Nueva Ecija</p>
   <p class="top">City of Palayan</p>
   <p class="top">Barangay Atate</p>
  <hr>
   <p class="trd">OFFICE OF THE PUNONG BARANGAY</p>
   <hr>
   <br><br>
<div class="main">
  <div class="date"> 
<label id="month" class="under"></label> 
<label id="day" class="under"></label>, 
<label id="year" class="under"></label>
</div>
<div class="title"><h3><?php 
                                            if( $type  == 'tblbusiness'){
                                            echo "Report of Business Permit Request";}
                                            if( $type  == 'tblcertificate'){
                                                echo "Report of Barangay Certificate Request";}
                                                if( $type  == 'tblindigency'){
                                                  echo "Report of Barangay Indigency Request";}
                                                  if( $type  == 'tblclearance'){
                                                      echo "Report of Barangay Clearance Request";}
                                                      if( $type  == 'reservation'){
                                                        echo "Report of Gym Reservation Request";}
                                                      
                                       
                                            ?></h3></div>
<div class="table">
  
<?php if( $type  == 'tblbusiness'){ ?>
  <table>
    <thead>
    <tr>
    <th>Name</th>
                                <th>Business Name</th>
                                <th>Business Type</th>
                                <th>Status</th>
                               
   
    
     
    </tr>
    </thead>
    <style>
      .center{
        text-align: center;
      }
    </style>
		<tbody>
    <?php    while( $row = mysqli_fetch_array($result) ){ ?>
   
			<tr>
      <td class="center"><?php echo $row['name'];?></td>
      <td class="center"><?php echo $row['businessName']; ?></td>
                            <td class="center"><?php echo $row['businessType'];?></td>
                            <td class="center"><?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> </td>

       
      </tr>
    </tbody>
    <?php } ?>
  </table>
  <?php }if( $type  == 'tblcertificate'){   ?>

    <table>
    <thead>
    <tr>
      <th>Name</th>
      <th>Purok</th>
      <th>Purpose</th>
      <th>Request DAte</th>
      <th>Status</th>

    </tr>
    </thead>
    <style>
      .center{
        text-align: center;
      }
    </style>
		<tbody>
    <?php    while( $row = mysqli_fetch_array($result) ){ ?>
   
			<tr> 	
      <td class="center"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];?></td>
          <td class="center"><?php echo $row['purok']; ?></td>
          <td class="center"><?php echo $row['purpose'];?></td>
          <td class="center"><?php echo $row['requestdate'];?></td>
          <td class="center"><?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> </td>
                                        

       
      </tr>
    </tbody>
    <?php } ?>
  </table>

  <?php ;}if( $type  == 'tblclearance'){  ?>

<table>
<thead>
<tr>
  <th>Name</th>
  <th>Age</th>
                                <th>Zone #</th>
                                <th>Purpose</th>
                                <th>Date</th>
                                <th>Status</th>


 
</tr>
</thead>
<style>
  .center{
    text-align: center;
  }
</style>
<tbody>
<?php    while( $row = mysqli_fetch_array($result) ){ ?>

  <tr>
  <td class="center"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];?></td>
   
  <td class="center"><?php echo $row['age'];?></td>
  <td class="center"><?php echo $row['purok']; ?></td>
  <td class="center"><?php echo $row['purpose'];?></td>
  <td class="center"><?php echo $row['requestdate'];?></td>
  <td class="center"><?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> </td>

   
  </tr>
</tbody>
<?php } ?>
</table>

<?php ;}if( $type  == 'tblindigency'){   ?>

<table>
<thead>
<tr>
<th>Name</th>
            <th>Purpose</th>
            <th>Date</th>
            <th>Status</th>


 
</tr>
</thead>
<style>
  .center{
    text-align: center;
  }
</style>
<tbody>
<?php    while( $row = mysqli_fetch_array($result) ){ ?>

  <tr>
  <td class="center"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];?></td>
  <td class="center"><?php echo $row['purpose'];?></td>
  <td class="center"><?php echo $row['requestdate'];?></td>
  <td class="center"><?php 
                        if( $row['status']  ==1){
                        echo "Pending";}
                        if( $row['status']  ==2){
                            echo "Approved";}
                        if( $row['status']  ==3){
                                echo "Decline";}
                        ?> </td>

   
  </tr>
</tbody>
<?php } ?>
</table>

<?php ;}if( $type  == 'reservation'){   ?>

<table>
<thead>
<tr>
  <th>Name</th>
  <th>Event</th>
  <th>Location</th>
  <th>Date</th>
  <th>Start</th>
  <th>End</th>
  <th>Status</th>



 
</tr>
</thead>
<style>
  .center{
    text-align: center;
  }
</style>
<tbody>
<?php    while( $row = mysqli_fetch_array($result) ){ ?>

  <tr>
  <td class="center"><?php echo $row['organization_name']?></td>
  <td class="center"><?php echo $row['name_of_event']?></td>
  <td class="center"><?php echo $row['gym_address']?></td>
  <td class="center"><?php echo $row['description']?></td>
  <td class="center"><?php echo $row['start_from']?></td>
  <td class="center"><?php echo $row['end_to']?></td>
  <td class="center"><?php 
                        if( $row['status']  ==1){
                        echo "Pending";}
                        if( $row['status']  ==2){
                            echo "Approved";}
                        if( $row['status']  ==3){
                                echo "Decline";}
                        ?> </td>

   
  </tr>
</tbody>
<?php } ?>
</table>
<?php } ?>























































































































</div>

</div>
<br><br><br>
<p class="p4">Hon. Florencio D. Bernardo</p>
<p class="p5">Punong Barangay</p>
</form>
</div>
 
<script src="../../js/day.js"></script>
<script src="../../js/month.js"></script>
<script src="../../js/year.js"></script>

    </body>
</html>