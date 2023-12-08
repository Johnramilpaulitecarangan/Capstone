<?php  
      
        
      include_once("../../connections/connection.php");

      $con = connection();

  

  
      if(isset($_POST['age'])){ 
        $age_start =$_POST['age_start'];
        $age_end =$_POST['age_end'];
    
        $purok =$_POST['purok'];
        
        // age >= '$age_start'
        $sql = "SELECT * FROM residents WHERE  (age >= $age_start and age <= $age_end) and ( purok = $purok) order by age ASC";
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
      size: landscape;
            margin-left: px ! important;
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
		width:auto;
    margin: 15px;
		
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
<div class="title"><h3>BARANGAY RESIDENTS RECORDS</h3></div>
<div class="table">
  <table>
    <thead>
    <tr>
      <th>HH#</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Birthday</th>
      <th>Age</th>
      <th>Purok</th>
      <th>Contact#</th>
      <th>Employment</th>
      <th>Occupation</th>
      <th>Educational</th>
      <th>School</th>
      <th>Voter</th>
    
     
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
        <td class="center"><?php echo $row['hh']?></td>
			  <td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']." ".$row['exname'];?></td>
				<td class="center"><?php echo $row['gender']?></td>
        <td class="center"><?php echo $row['birthday']?></td>
        <td class="center"><?php echo $row['age']?></td>
        <td class="center" ><?php echo $row['purok']?></td>
        <td class="center"><?php echo $row['contactnumber']?></td>
        <td class="center"><?php echo $row['employment']?></td>
        <td class="center"><?php echo $row['occupation']?></td>
        <td class="center"><?php echo $row['educational']?></td>
        <td class="center"><?php echo $row['school']?></td>
        <td class="center"><?php echo $row['voter']?></td>
       
      </tr>
    </tbody>
    <?php } ?>
  </table>


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