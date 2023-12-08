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
                <form action="official/deleted.php"  method="post" enctype="multipart/form-data">
				<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">official Information</h3>
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
                                <input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName'];?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
                            <input type="text" name="lastName"  class="form-control"  value="<?php echo $row['lastName'];?>" readonly >
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
                            <input type="text" name="middleName"  class="form-control" value="<?php echo $row['middleName'];?>" readonly>
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Extention Name</label>
                            <input type="text" name="exName"  class="form-control" value="<?php echo $row['exName'];?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday</label>
                            <input type="text" id="nu_datebirth"  class="form-control" name="birthDate" value="<?php echo $row['birthDate'];?>"readonly>


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
                            <input type="text"   class="form-control" value="<?php echo $row['gender'];?>" readonly/>
							
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
                            <label>Contact Number:</label>
                            <input type="text" readonly name="contactNumber" class="form-control" value="<?php echo $row['contactNumber'];?>" />
                     
								</div>
							</div>
						
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="email" class="form-control" 
 name="emailAddress" id="email" value="<?php echo $row['emailAddress'];?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" 
 name="emailAddress" id="email"  value="<?php echo $row['position'];?>" readonly>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
                            <label>Start</label>
                            <input type="date"  class="form-control"  name="start" value="<?php echo $row['start'];?>"readonly>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
                            <label>End</label>
                            <input type="date"   class="form-control"  name="end" value="<?php echo $row['end'];?>"readonly>
								</div>
							</div>





				




		
 
						<div>
							<br>
						<div>
							  <input type="submit" name="delete"  value="Delete" class="btn btn-danger">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>"readonly>
                   
						
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
   
 