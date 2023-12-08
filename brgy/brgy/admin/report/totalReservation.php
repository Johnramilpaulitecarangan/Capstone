
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
               <title>Total Reservation Request</title>
       
               <style>
#two{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            font-style: italic;
            font-weight: bold;
            width: 25%;
        } 
        #two2{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 10%;
        } 
        #two3{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 20%;
        } 
        #two4{
            border: none;
            outline:none;
            border-bottom: 1px solid black;
            length: auto;
            width: 23%;
        } 
        

.top{
    font-size:12pt;
    line-height: 3pt;
  
    
    text-align: center;
    font-family:arial;
    font-weight: bold;
}
.sec{
    font-size:18pt;
    line-height: 2;
    text-align: left;
    padding-left: 60px;
    text-align: center;
    font-family:arial;
    font-weight: bold;
}
.sec2{
    font-size:18pt;
    line-height: 0;
    text-align: left;
    padding-left: 60px;
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
  height: 1px;
  background: black;
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
			size:8.5in 11in;
     
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
		input {
            text-align: center;
            text-transform: capitalize;
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
    margin-left: 0 auto;
   margin-right: 0 auto;
}
.certificate{
    margin-left:auto;
    margin-right:auto;
}
                </style>
                 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
      <div id="prt-btn">
        <button onclick="window.print()" id="printb">print</button>
        <button id="printb2"><a href="../report.php"  id="cancel" >cancel</a></button>
        </div>
    <body>
    

    <div class="certificate" id="print" >
    <form>
    <img src="../../img/atate.png" alt="BongabonLogo"   align="left" style="width:130px;height:130px;  border-radius: 50px; padding-left: 50px; padding-top:10px;"><img src="../../img/palayancity.png" alt="NuevaEcijaLogo"  align="right" style="width130px;height:130px; border-radius: 50px; padding-right: 50px;padding-top:10px;" >
    <br><br><br><p class="top">Republic of the Philippines</p>
    <p class="top">Province of Nueva Ecija</p>
   <p class="top">City of Palayan</p>
   <p class="top">Barangay Atate</p>
   <div class="line-1"></div>
   <p class="trd">OFFICE OF THE PUNONG BARANGAY</p>
   <div class="line-1"></div>
   <br>
<div class="main"> 
    <p class="sec">BARANGAY RESERVATION REQUEST</p>
   
</div>
</form>
</div>
 


    </body>
</html>