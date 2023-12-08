
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
					
						<form action="user/insert.php"  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
                                <label for="">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                  		</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control"  name="password"  id="myInput" placeholder="Enter Password">
									<input type="checkbox" onclick="myFunction()"> Show Password
									<script>
									function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>  </div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstName" required>
                  </div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label for="">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middle Name" name="middleName" required>
                	</div>
							</div>
                            <div class="col-md-6">
							<div class="form-group">
                            <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" required>
                    </div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label for="">Extention Name</label>
                    <input type="text" class="form-control" placeholder="Extention Name" name="exName" required>
                	</div>
							</div>

                            
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday:</label>
                            <input type="text" id="nu_datebirth" class="form-control"   name="birthDate" placeholder="Birthday" required>
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
       
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
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
                            <input type="text" class="form-control" name="birthPlace" placeholder="Birth Place">
		</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Contact NUmber:</label>
                            <input type="text" class="form-control" name="contactNumber" placeholder="Contact Number" required>
</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
                            <input type="email"  id="email" class="form-control"name="emailAddress"  placeholder="Email Address"required>
	</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label><b>Images: </b> &nbsp;</label><br>
                           <input type="file" name="image" class="form-control" id="profile-img" size="50"  required />
									</br>
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
							<label>Picture</label>
                            <br>
                            <img src="" id="profile-img-tag" width="100px"  />
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
   
   
 