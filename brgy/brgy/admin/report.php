<?php  
        include_once("../connections/connection.php");
            $con = connection(); 
            
            
?>
<!DOCTYPE html>
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
.col-md-2{
    
    display: inline-block;
}
.form-control{
    display: inherit;
    font-weight: 500;
}
.col-md-2 label{
    font-weight: 500;
}
.container .birthday{
    margin-left: -1px;
}
</style>
   
<body>
<div class="main">
<div class="container">
    <div class="birthday">
        <h3>Report Of Residents Filter By Birthday</h3>
        <form action="report/residentBirthday.php"  method="post" enctype="multipart/form-data">
        <div class="col-md-2">
        <label for="">From </label>
<input type="text"  class="date form-control"   name="from" placeholder="Birthday From" required >
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="date form-control"   name="to" placeholder="Birthday To" required>
</div>
<div class="col-md-2">
<input type="submit" name="submit" class="form-control btn-success" value="Generate">
</div>                
                        <script>
                         $(function() {
                            $(".date").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
                          
</form>



            <form action="report/residentBirthdaypurok.php"  method="post" enctype="multipart/form-data">
       
<div class="col-md-2">
      <label for="">From </label>
<input type="text"  class="datepurok form-control"   name="from" placeholder="Birthday From" required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="datepurok form-control"   name="to" placeholder="Birthday To" required>
</div>
<div class="col-md-2">
                            <label for="">Purok</label>
<select name="purok" id="purok" class="form-control"   required>
							  <option value="" disabled selected value>Select </option>
							  <option value="1">1</option>
							  <option value="2">2</option>
                              <option value="3">3</option>
							  <option value="4">4</option>
                              <option value="5">5</option>
							  <option value="6">6</option>
                              <option value="7">7</option>
						
							</select>
                            </div>
<div class="col-md-2">
<input type="submit" name="submit" class="form-control btn-success"value="Generate" ><br>
</div>
         
                        <script>
                         $(function() {
                            $(".datepurok").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
                           </form>


            <form action="report/residentBirthdaygender.php"  method="post" enctype="multipart/form-data">
          
<div class="col-md-2">

            <label for="">From </label>
<input type="text"  class="dategender form-control"   name="from" placeholder="Birthday From"  required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="dategender form-control"   name="to" placeholder="Birthday To" required>
</div>
<div class="col-md-2">
<label for="">Gender</label>
<select name="gender" id="gender" class="form-control" required>
							  <option value="" disabled selected value>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select> 
                            </div>
<div class="col-md-2">
<input type="submit" name="submit" class="form-control btn-success"value="Generate" ><br>
</div>
    
                        <script>
                         $(function() {
                            $(".dategender").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
</form>




            <form action="report/residentBirthdaygenderpurok.php"  method="post" enctype="multipart/form-data">

           
<div class="col-md-2">
            <label for="">From </label>
<input type="text"  class="dategp form-control"   name="from" placeholder="Birthday From" required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="dategp form-control"   name="to" placeholder="Birthday To" required>
</div>
<div class="col-md-2">
<label for="">Gender</label>
<select name="gender" id="gender" class="form-control"  required>
							  <option value="" disabled selected value>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select> 
                            </div>
<div class="col-md-2">
                            <label for="">Purok</label>
<select name="purok" id="purok" class="form-control"   required>
							  <option value="" disabled selected value>Select </option>
							  <option value="1">1</option>
							  <option value="2">2</option>
                              <option value="3">3</option>
							  <option value="4">4</option>
                              <option value="5">5</option>
							  <option value="6">6</option>
                              <option value="7">7</option>
						
							</select>
                            </div>
<div class="col-md-2">
<input type="submit" name="submit" class="form-control btn-success"value="Generate" ><br>
</div>
        
                        <script>
                         $(function() {
                            $(".dategp").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
             
                          </div>  
                    </form>


<!-- birthday -->
<!-- age -->






<br>
<div class="age">
    <h3>Report Of Residents Filter By Age</h3>
    <form action="report/residentAge.php"  method="post" enctype="multipart/form-data">
  
<div class="col-md-2">
        <label for="">From </label>
<input type="number"   class="form-control" name="age_start" placeholder="Age From"  required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="number"  class="form-control" name="age_end" placeholder="Age To" required >
</div>
<div class="col-md-2">

                            <input type="submit" name="age" class="form-control btn-success" value="Generate">
                   
                            </div>

                      
                    </form>


                    <form action="report/residentAgepurok.php"  method="post" enctype="multipart/form-data">
                  
<div class="col-md-2">
        <label for="">From </label>
<input type="number"   class="form-control" name="age_start" placeholder="Age From"  required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="number" class="form-control"  name="age_end" placeholder="Age To"  required>
</div>
<div class="col-md-2">

<label for="">Purok</label>
<select name="purok" id="purok" class="form-control"  required>
							  <option value="" disabled selected value>Select </option>
							  <option value="1">1</option>
							  <option value="2">2</option>
                              <option value="3">3</option>
							  <option value="4">4</option>
                              <option value="5">5</option>
							  <option value="6">6</option>
                              <option value="7">7</option>
						
							</select>
                            </div>
<div class="col-md-2">
                            <input type="submit" name="age" class="form-control btn-success" value="Generate">
                   
                            </div>

                      
                    </form>


                    <form action="report/residentAgegender.php"  method="post" enctype="multipart/form-data">
                  
<div class="col-md-2">
        <label for="">From </label>
<input type="number"  class="form-control"  name="age_start" placeholder="Age From" required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="number"  class="form-control" name="age_end" placeholder="Age To" required>
</div>
<div class="col-md-2">
<label for="">Gender</label>
<select name="gender" id="gender" class="form-control"  required>
							  <option value="" disabled selected value>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select>
                            </div>
<div class="col-md-2">

                            <input type="submit" name="age" class="form-control btn-success" value="Generate">
                            </div>

                      
                      
                    </form>



                    <form action="report/residentAgegenderpurok.php"  method="post" enctype="multipart/form-data">
                 
<div class="col-md-2">
        <label for="">From </label>
<input type="number" class="form-control"   name="age_start" placeholder="Age From"  required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="number" class="form-control"  name="age_end" placeholder="Age To"  required>
</div>
<div class="col-md-2">
<label for="">Gender</label>
<select name="gender" id="gender" class="form-control"   required>
							  <option value="" disabled selected value>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select>
                            </div>
<div class="col-md-2">

<label for="">Purok</label>
<select name="purok" id="purok" class="form-control"   required>
							  <option value="" disabled selected value>Select </option>
							  <option value="1">1</option>
							  <option value="2">2</option>
                              <option value="3">3</option>
							  <option value="4">4</option>
                              <option value="5">5</option>
							  <option value="6">6</option>
                              <option value="7">7</option>
						
							</select>
                            </div>
<div class="col-md-2">
                            <input type="submit" name="age" class="form-control btn-success" value="Generate">
                   
                      
                            </div>

                      
                    </form>

</div>  

<div class="other">

</div>





















                     <br>
<div class="certificate">
    <h3>Generate Report of Request</h3>
    <form action="report/reports.php"  method="post" enctype="multipart/form-data">
  
<div class="col-md-2">
    <label for="">Type</label>
<select name="type" class="form-control" id="type" required>
                            <option value="" disabled selected value>Select </option>
                    <option name="tblbusiness" value="tblbusiness">Business Permit</option>
                    <option name="tblcertificate" value="tblcertificate">Barangay Certificate</option>
                    <option name="tblclearance" value="tblclearance">Barangay Clearance</option>
                    <option name="tblindigency" value="tblindigency">Barangay Indigency</option>
                    <option name="reservation" value="reservation">Gym Reservation</option>
    
                </select> 
                </div>
<div class="col-md-2"><label for="">From </label>
<input type="text"  class="cer form-control"   name="cer_from" placeholder="Date From" required >
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="cer form-control"   name="cer_to" placeholder="Date To"  required>
</div>
<div class="col-md-2">
<input type="submit" name="certificate" class="form-control btn-success" value="Generate">
</div>
        
<script>
                         $(function() {
                            $(".cer").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
                        
                    </form>

                    <form action="report/reportStatus.php"  method="post" enctype="multipart/form-data">
                   
<div class="col-md-2">
                    <label for="">Type</label>
<select name="type" class="form-control" id="type" required>
                            <option value="" disabled selected value>Select </option>
                            <option name="tblbusiness" value="tblbusiness">Business Permit</option>
                    <option name="tblcertificate" value="tblcertificate">Barangay Certificate</option>
                    <option name="tblclearance" value="tblclearance">Barangay Clearance</option>
                    <option name="tblindigency" value="tblindigency">Barangay Indigency</option>
                    <option name="reservation" value="reservation">Gym Reservation</option>
    
                </select>
                </div>
<div class="col-md-2">
                <label for="">From </label>
<input type="text"  class="cer form-control"   name="cer_from" placeholder="Date From"  required>
</div>
<div class="col-md-2">
<label for="">To</label>
<input type="text"  class="cer form-control"   name="cer_to" placeholder="Date To"  required>
</div>
<div class="col-md-2">

<label for="">Status</label>
<select name="status" class="form-control" id="type" required>
                            <option value="" disabled selected value>Select </option>
                    <option name="1" value="1">Pending</option>
                    <option name="2" value="2">Approved</option>
                    <option name="3" value="3">Declined</option>
                  
    
                </select>
                </div>
<div class="col-md-2">

<input type="submit" name="certificate" class="form-control btn-success" value="Generate">
</div>
    
<script>
                         $(function() {
                            $(".cer").datepicker({
                            onSelect: function(value, ui) {
                                var today = new Date(),
                                    age = today.getFullYear() - ui.selectedYear;
                                $('#a_ge').val(age);
                            },
                               
                            dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
                            });
                              
                        });
                          </script>
                        
                    </form>



</div> 


</div>  
<br><br><br><br>
</div>   
</body>
</html>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
