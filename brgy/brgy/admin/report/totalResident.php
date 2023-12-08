<?php  if(!isset($_SESSION)){session_start();}
        include_once("../../connections/connection.php");
            $con = connection(); 

$sql = " SELECT * FROM residents";
$result=$con->query($sql) or die ($con->error);
$row=$result->fetch_assoc();
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
            border-bottom: 3px solid black;
            length: auto;
            width: 45%;
        } 
        #two2{
            border: none;
            outline:none;
            border-bottom: 2px solid black;
            length: auto;
            width: 40%;
        } 
        #two3{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 2%;
        } 
        #two4{
            border: none;
            outline:none;
            border-bottom: 3px solid red;
            length: auto;
            width: 33%;
        } 
        #two5{
            border: none;
            outline:none;
            border-bottom: 2px solid blue;
            length: auto;
            width: 20%;
        } 
        



.top{
    font-size:12pt;
    line-height: 3pt;
    text-align: center;
    font-family:Century Gothic;
    
}
.sec{
    font-size:18pt;
    
    text-align: left;
    margin-left: 80px;
    text-align: center;
    font-family:Rockwell Extra Bold;
    font-weight: bold;
}
.sec2{
    font-size:18pt;
    line-height: 0;
    text-align: left;
 
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
.line-1 {
  height: 2.5px;
  background: black;
}
.line-2 {
  height: 1px;
  background: black;
}

.p2{ 
    text-indent:10px;
    margin-bottom:0;
    font-size:12pt;
    font-family:Century Gothic;
}
.p3{ 
    
    margin-bottom:0;
    font-size:11pt;
    text-align:center;
    font-family:Century Gothic;
}
.p4{ 
    
    margin:0;
    font-size:10pt;
    text-align:center;
    font-family:Century Gothic;
    font-weight:bold;
}
.p5{    
    margin:0;
    font-size:14pt;
    text-align:center;
    font-family:Arial Narrow;
    font-weight:bold;
    font-style: italic;
}
.p6{ 
    margin:0;
    font-size:12pt;
    text-align:center;
    font-family:Century Gothic;
    font-weight:bold;
}
.p7{ 
    margin:0;
    font-size:12pt;
    text-align:center;
    font-family:Century Gothic;
    font-weight:bold;
}
.p8{ 
    margin:0;
    font-size:11pt;
    text-align:center;
    font-family:Century Gothic;
   
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
			size:landscape;
           
     

		}
        head{
			height:0px;
			display: none;
		}
		#prt-btn{
            height: 0px;
            display: none;
        }
		}
		#print{
            width:11in;
    height:8.5in;
		}
		input {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
}
.certificate{
    margin-left:auto;
    margin-right:auto;
}
.main{margin-left: -80px;}
td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 1px;
}

td {
    text-align: center;
    margin:  200px;
}

tr:nth-child(even) {
    background-color: #eee;
}

th[scope="col"] {
    background-color: #696969;
    color: #fff;
}

th[scope="row"] {
    background-color: #d7d9f2;
}

caption {
    border-radius: 10px;
    background: whitesmoke;
    padding: 10px;
    caption-side: top;
    font-weight: bold; 
    font-size: 20px;
}

table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: .2px;
    font-family: sans-serif;
    font-size: 7px;
    width:100%;
    
}

                </style>
      </head>

      <div id="prt-btn">
        <button onclick="window.print()" id="printb">print</button>
        <button id="printb2"><a href="../business.php"  id="cancel" >cancel</a></button>
        </div>
    <body>
        
    <div class="certificate" id="print">
  

    <img src="../../img/atate.png" alt="Logo"   align="left" style="width:130px;height:130px;  border-radius: 50px; padding-left: 50px; padding-top:10px;"><img src="../../img/palayancity.png" alt="NuevaEcijaLogo"  align="right" style="width130px;height:130px; border-radius: 50px; padding-right: 50px;padding-top:10px;" >
    <br><p class="top">Republic of the Philippines</p>
    <p class="top">Province of Nueva Ecija</p>
   <p class="top">City of Palayan</p>
  <b> <p class="top">BARANGAY ATATE</p>
   <p class="top">OFFICE OF THE PUNONG BARANGAY</p></b><br>
   <div class="line-1"></div>
   
<div class="main"> 
    <p class="sec">TOTAL  BARANGAY RESIDENTS</p>

      
<br>
<table>

   <caption>Resident Records</caption>
  <tr>
  <th colspan="7">Personal Information</th>
</tr>
   <tr>
       <th scope="col">Household No.</th>
       <th scope="col">Address Purok</th>
       <th scope="col">Position</th>
       <th scope="col">Last Name</th>
       <th scope="col">First Name</th>
       <th scope="col">Middle Name</th>
       <th scope="col">Household No.</th>
       <th scope="col">Address Purok</th>
       <th scope="col">Position</th>
       <th scope="col">Last Name</th>
       <th scope="col">First Name</th>
       <th scope="col">Middle Name</th>
       <th scope="col">Household No.</th>
       <th scope="col">Address Purok</th>
       <th scope="col">Position</th>
       <th scope="col">Last Name</th>
       <th scope="col">First Name</th>
       <th scope="col">Middle Name</th>
     
       
   </tr>
   <?php    
              $query = "select * from residents";
              $result = mysqli_query($con,$query);      
?>     
  <?php while($row = mysqli_fetch_array($result)){ ?>
   <tr>
       <th scope="row"><?php echo $row['household']; ?></th>
       <td><?php echo $row['address']; ?></td>
       <td><?php echo $row['position']; ?></td>
       <td><?php echo $row['lastname']; ?></td>
       <td><?php echo $row['firstname']; ?></td>
       <td><?php echo $row['middlename']; ?></td>
       
   </tr>
   <?php } ?>
</table>
<br><br><br><br><br><br>
<p class="p6">KAGAWAD;SONNY T. DE VERA </p>
<p class="p8">OFFICER DUTY OF THE DAY</p>
<br>
<p class="p6">HON. FLORENCIO BERNARDO</p>
<p class="p8">PUNONG BARANGAY </p>
</div>

</div>
 


    </body>
</html>
