
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
					
						<form action="resident/insert.php"  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
                                <label>First Name:</label>
                            <input type="text" class="form-control"  name="firstname" placeholder="First Name"  required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" class="form-control"  name="lastname" placeholder="Last Name"  required>
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Middle Name:</label>
                            <input type="text" name="middlename"  class="form-control"  placeholder="Middle Name" >
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Extention Name:</label>
                            <input type="text" name="exname" class="form-control"  placeholder="Extention Name">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday:</label>
                            <input type="text" id="nu_datebirth" class="form-control"   name="birthday" placeholder="Birthday" required>
                            </div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Age:</label>
                            <input type="text" placeholder="Age" class="form-control"  name="age" id="a_ge" class="nu_field" readonly/>
                        

                        <script>
 $(function() {
    $("#nu_datebirth").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#a_ge').val(age);
    },
       
    dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });
      
});
  </script>  	</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Gender:</label>
							<select name="gender" id="gender" class="form-control"   required>
							  <option value="" disabled selected value>Select Gender</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							</select>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
                            <label>Purok</label>
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
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Birth Place:</label>
                            <input type="text" name="placebirth" class="form-control"  placeholder="Birth Place"  required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Contact NUmber:</label>
                            <input type="text" placeholder="Contact Number" class="form-control"  name="contactnumber" id="contactnumber" />
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
                            <input type="email" placeholder="Email" name="email" class="form-control"  id="email"  required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Civil Status:</label>
                            <select name="status" class="form-control"  required >
                                            <option value="" disabled selected value>Select Status</option>
							                <option value="Single"> Single</option>
                                            <option value="Married"> Married</option>
                                            <option value="Divorced"> Divorced</option>
                                            <option value="Widow"> Widow</option>
                                         
                                        </select>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label>Religion:</label>
                            <input type="text" placeholder="Religion" class="form-control"  name="religion" id="religion" required />
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
                            <label>Household Number</label>
                            <input type="text" name="hh" class="form-control"  placeholder="Household Number" required>
								</div>
							</div>




							<div class="col-md-6">
							<div class="form-group">
                            <label>Relation:</label>

							<select name="relation" id="relation" class="form-control"   required>
							  <option value="" disabled selected value>Select Relation</option>
							  <option value="GrandFather">GrandFather</option>
							  <option value="GrandMother">GrandMother</option>
                              <option value="Father">Father</option>
                              <option value="Husband">Husband</option>
                              <option value="Wife">Wife</option>
                              <option value="Mother">Mother</option>
                              <option value="Brother">Brother</option>
                              <option value="Sister">Sister</option>
                              <option value="Son">Son</option>
                              <option value="Daugther">Daugther</option>
							  <option value="Other">Other</option>
</select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
                            <label>School:</label>
                            <select name="school" id="school"  class="form-control"  required>
							  <option value="" disabled selected value>Select </option>
							  <option value="In">In</option>
							  <option value="Out">Out</option>
							</select>
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label>Educational:</label>
                            <select name="educational" class="form-control"  required >
                                            <option value="" disabled selected value>No schooling completed</option>
							                <option value="Elementary" >Elementary</option>
                                            <option value="High school, undergrad"> High school, undergrad</option>
                                            <option value="High school graduate"> High school graduate</option>
                                            <option value="College, undergrad"> College, undergrad</option>
                                            <option value="Vocational"> Vocational</option>
                                            <option value="Bachelor’s degree"> Bachelor’s degree</option>
                                            <option value="Master’s degree"> Master’s degree</option>
                                            <option value="Doctorate degree"> Doctorate degree</option>
                                        </select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Employment:</label>
                            <select name="employment" id="employment" class="form-control"   required >
							  <option value="" disabled selected value>Select </option>
							  <option value="Government">Goverment</option>
							  <option value="Public">Public</option>
							  <option value="None">N/A</option>
							</select>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
							<label>Occupation:</label>
                            <input type="text" class="form-control" name="occupation" placeholder="Occupation" required>
								</div>
							</div>



							<div class="col-md-6">
							<div class="form-group">
                            <label>Income:</label>
                            <input type="text" name="income" class="form-control"  placeholder="Income" required>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
                            <label>Voter:</label>
                            <select name="voter" class="form-control"  id="voter"  required >
							  <option value="" disabled selected value>Select </option>
							  <option value="YES">YES</option>
							  <option value="NO">NO</option>
							</select>
								</div>
							</div>

                            <div class="col-md-6">
							<div class="form-group">
                            <label>Picture:</label>
							<input type="file" name="image" class="form-control"  id="profile-img" size="50"  required />
                             <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script>
                                    </div>
							</div>    
                             <div class="col-md-6">
							<div class="form-group">
                            <label>Picture:</label>
                            <br>
                            <br>
                            <img src="" id="profile-img-tag" width="150px" height="150px"  />
							
                                    </div>
							</div>




						<div>
							<br>
						<div>
							<input type="reset" value="Reset" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
							
                   
						
						</div>
						</div>
					</form> 




						
						</form>
					</div> 
				</div> 
			</div> 
</div>

       </div>
   
   
 