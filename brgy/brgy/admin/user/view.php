<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from users where id=".$id;
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
						<h3 class="mb-4">User Information</h3>
					
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
								  	<input type="text" class="form-control" 
 name="firstname"value="<?php echo $row['firstName'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
								  	<input type="text" class="form-control" name="lastname"  value="<?php echo $row['lastName'];?>" required >
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
								  	<input type="text" class="form-control" name="middlename" value="<?php echo $row['middleName'];?>" >
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Extention Name</label>
								  	<input type="text" class="form-control" name="exname" value="<?php echo $row['exName'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday:</label>
                            <input type="text" class="form-control"  id="nu_datebirth" name="birthday" value="<?php echo $row['birthDate'];?>"required>
                       
                          <input type="hidden" value="<?php echo $row['birthday'];?>" name="age" id="a_ge" class="nu_field" readonly/>
                        

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
							<label>Purok</label>
							<select name="purok" class="form-control" 
 id="purok" ?>">
            <option  value="1" <?php echo ($row['purok'] == "1")? 'Selected' : '';?> >1</option>
            <option  value="2" <?php echo ($row['purok'] == "2")? 'Selected' : '';?> >2</option>
            <option  value="3" <?php echo ($row['purok'] == "3")? 'Selected' : '';?> >3</option>
            <option  value="4" <?php echo ($row['purok'] == "4")? 'Selected' : '';?> >4</option>
            <option  value="5" <?php echo ($row['purok'] == "5")? 'Selected' : '';?> >5</option>
            <option  value="6" <?php echo ($row['purok'] == "6")? 'Selected' : '';?> >6</option>
            <option  value="7" <?php echo ($row['purok'] == "7")? 'Selected' : '';?> >7</option>
            </select>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Birth Place</label>
								  	<input type="text" class="form-control" 
 name="placebirth" value="<?php echo $row['birthPlace'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Phone Number</label>
								  	<input type="text" name="contactnumber" class="form-control" 
id="contactnumber" value="<?php echo $row['contactNumber'];?>"class="nu_field" />
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="email" class="form-control" 
 name="email" id="email" class="nu_field" value="<?php echo $row['emailAddress'];?>" required>
								</div>
							</div>
							


							



							




							



							


						





							
						<div>
							<br>
						<div>
							
						
						</div>
						</div>
					




						
						
					</div> 
				</div> 
			</div> 
</div>

       </div>
    <?php } ?>
   
 