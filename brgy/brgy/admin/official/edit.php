<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from official where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
    ?>
<style>
    .col1{
        display: flex;
    justify-content: space-around;
    }
</style>

<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					
				<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Resident Information</h3>
					
						<form action="official/update.php"  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
                                <input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
                            <input type="text" name="lastName"  class="form-control"  value="<?php echo $row['lastName'];?>" required >
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
                            <input type="text" name="middleName"  class="form-control" value="<?php echo $row['middleName'];?>" >
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Extention Name</label>
                            <input type="text" name="exName"  class="form-control" value="<?php echo $row['exName'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday</label>
                            <input type="text" id="nu_datebirth"  class="form-control" name="birthDate" value="<?php echo $row['birthDate'];?>"required>


                            </div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

                            <label>Age:</label>
                            <input type="text"  name="age" id="a_ge" c class="form-control"  value="<?php echo $row['age'];?>" readonly/>
                        

                        <script>
 $(function() {
    $("#nu_datebirth").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#a_ge').val(age);
    },
       
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });
      
});
  </script>  	</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Gender</label>
							<select name="gender" class="form-control" 
 id="gender" ?>">
                        <option  value="Male" <?php echo ($row['gender'] == "Male")? 'Selected' : '';?> >Male</option>
                        <option  value="Female" <?php echo ($row['gender'] == "Female")? 'Selected' : '';?> >Female</option>
            </select>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
                            <label>Contact NUmber:</label>
                            <input type="text"  name="contactNumber" class="form-control" value="<?php echo $row['contactNumber'];?>" />
                     
								</div>
							</div>
						
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="email" class="form-control" 
 name="emailAddress" id="email" class="nu_field" value="<?php echo $row['emailAddress'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Position</label>
            <select name="position"  class="form-control"  id="position" ?>">
                        <option  value="Captain"<?php echo ($row['position'] == "Captain")? 'Selected' : '';?> >Captain</option>
                        <option  value="Councilor" <?php echo ($row['position'] == "Councilor")? 'Selected' : '';?> >Councilor</option>
                        <option  value="Secretary" <?php echo ($row['position'] == "Secretary")? 'Selected' : '';?> >Secretary</option>
            </select>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
                            <label>Start</label>
                            <input type="date"  class="form-control"  name="start" value="<?php echo $row['start'];?>"required>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
                            <label>End</label>
                            <input type="date"   class="form-control"  name="end" value="<?php echo $row['end'];?>"required>
								</div>
							</div>






							
						<div>
							<br>
						<div>
							<input type="reset" value="Reset" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="update"  value="Update" class="btn btn-primary">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>"required>
                   
						
						</div>
						</div>
					</form> 




						
						</form>
					</div> 
				</div> 
			</div> 
</div>

       </div>
    <?php } ?>
   
 