<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from residents where id=".$id;
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
					
						<form action="resident/deleted.php"  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
								  	<input type="text" class="form-control" 
 name="firstname"value="<?php echo $row['firstname'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
								  	<input type="text" class="form-control" name="lastname"  value="<?php echo $row['lastname'];?>" required >
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
								  	<input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename'];?>" >
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Extention Name</label>
								  	<input type="text" class="form-control" name="exname" value="<?php echo $row['exname'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday:</label>
                            <input type="text" class="form-control"  id="nu_datebirth" name="birthday" value="<?php echo $row['birthday'];?>"required>
                       
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
 name="placebirth" value="<?php echo $row['placebirth'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Phone Number</label>
								  	<input type="text" name="contactnumber" class="form-control" 
id="contactnumber" value="<?php echo $row['contactnumber'];?>"class="nu_field" />
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="email" class="form-control" 
 name="email" id="email" class="nu_field" value="<?php echo $row['email'];?>" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Civil Status</label>
							<select name="status" class="form-control" 
 id="status" ?>">
                        <option  value="Single"<?php echo ($row['status'] == "Single")? 'Selected' : '';?> >Single</option>
                        <option  value="Married" <?php echo ($row['status'] == "Married")? 'Selected' : '';?> >Married</option>
                        <option  value="Divorced" <?php echo ($row['status'] == "Divorced")? 'Selected' : '';?> >Divorced</option>
                        <option  value="Widow" <?php echo ($row['status'] == "Widow")? 'Selected' : '';?> >Widow</option>
            </select>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label>Religion</label>
							<input type="text"  name="religion" id="religion" value="<?php echo $row['religion'];?>" required class="form-control" 
/>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Household Number</label>
							<input type="text" name="hh" class="form-control" 
 value="<?php echo $row['hh'];?>" required>
								</div>
							</div>




							<div class="col-md-6">
							<div class="form-group">
							<label>Relation</label>
							<select name="relation" class="form-control" 
 id="relation" ?>">
                        <option  value="Wife" <?php echo ($row['relation'] == "Wife")? 'Selected' : '';?> >Wife</option>
                        <option  value="Son" <?php echo ($row['relation'] == "Son")? 'Selected' : '';?> >Son</option>
                        <option  value="Daughter" <?php echo ($row['relation'] == "Daughter")? 'Selected' : '';?> >Daughter</option>
            </select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>School:</label>
                            <select name="school" class="form-control" 
 id="school" ?>">
                        <option  value="In" <?php echo ($row['school'] == "In")? 'Selected' : '';?> >In</option>
                        <option  value="Out" <?php echo ($row['school'] == "Out")? 'Selected' : '';?> >Out</option>
            </select>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label>Educational:</label>
							<select name="educational" class="form-control" 
 id="educational" ?>">
                        <option  value="Elementary" <?php echo ($row['educational'] == "Elementary")? 'Selected' : '';?> >Elementary</option>
                        <option  value="High school, undergrad" <?php echo ($row['educational'] == "High school, undergrad")? 'Selected' : '';?> >High school, undergrad</option>
                        <option  value="High school graduate" <?php echo ($row['educational'] == "High school graduate")? 'Selected' : '';?> >High school graduate</option>
                        <option  value="College, undergrad" <?php echo ($row['educational'] == "College, undergrad")? 'Selected' : '';?> >College, undergrad</option>
                        <option  value="Vocational" <?php echo ($row['educational'] == "Vocational")? 'Selected' : '';?> >Vocational</option>
                        <option  value="Bachelor’s degree" <?php echo ($row['educational'] == "Bachelor’s degree")? 'Selected' : '';?> >Bachelor’s degree</option>
                        <option  value="Master’s degree" <?php echo ($row['educational'] == "Master’s degree")? 'Selected' : '';?> >Master’s degree</option>
                        <option  value="Doctorate degree" <?php echo ($row['educational'] == "Doctorate degree")? 'Selected' : '';?> >Doctorate degree</option>
            </select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Employment:</label>
                            <select name="employment" class="form-control" 
 id="employment" ?>">
                        <option  value="Government" <?php echo ($row['employment'] == "Government")? 'Selected' : '';?> >Government</option>
                        <option  value="Public" <?php echo ($row['employment'] == "Public")? 'Selected' : '';?> >Public</option>
            </select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Occupation:</label>
                            <input type="text" class="form-control" 
 name="occupation" value="<?php echo $row['occupation'];?>" required>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Income:</label>
                            <input type="text"  class="form-control" 
 name="income" value="<?php echo $row['income'];?>"required>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label>Voter:</label>
                            <select name="voter" class="form-control" 
 id="voter" ?>">
                        <option  value="YES" <?php echo ($row['voter'] == "YES")? 'Selected' : '';?> >YES</option>
                        <option  value="NO" <?php echo ($row['voter'] == "NO")? 'Selected' : '';?> >NO</option>
            </select>
								</div>
							</div>



							
						<div>
							<br>
						<div>
							 <input type="submit" name="delete"  value="Delete" class="btn btn-danger">
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
   
 