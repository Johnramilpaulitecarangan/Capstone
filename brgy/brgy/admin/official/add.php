
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
						<h3 class="mb-4">Official Information</h3>
					
						<form action="official/insert.php"  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
                                <label>First Name:</label>
                                <input type="text" class="form-control" placeholder="First Name" name="firstName" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Last Name:</label>
                            <input type="text"  class="form-control" placeholder="Last Name" name="lastName" required>
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Middle Name:</label>
                            <input type="text" class="form-control" placeholder="Middle Name" name="middleName">
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Extention Name:</label>
                            <input type="text"  class="form-control" placeholder="Extention Name" name="exName">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							
      
                            <label>Birthday:</label>
                            <input type="text"   class="form-control" id="nu_datebirth" name="birthDate" required>
                            </div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Age:</label>
                            <input type="text" class="form-control"  name="age" id="a_ge" class="form-control" readonly/>
                        

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
                           
							<select name="gender" class="form-control" id="gender">
                            <option value="" disabled selected value>Select </option>
                    <option name="Male" value="Male">Male</option>
                    <option name="Female" value="Female">Female</option>
    
                </select>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
                            <label for="">Email Address</label>
                    <input type="email"  id="email" class="form-control"name="emailAddress"  placeholder="Email Address"required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label for="">Contact Number</label>
                    <input type="text" class="form-control" name="contactNumber" placeholder="Contact Number" required>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>Position</label>
                            <select name="position" id="position" class="form-control" ?>">
                            <option value="" disabled selected value>Select </option> 
                        <option  value="Captain" >Captain</option>
                                                <option  value="Secratary">Secretary</option>
                                                <option  value="Councilor">Councilor</option>
                                              
            
            </select>
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Start</label>
                            <input type="date" class="form-control" name="start" id="start">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
                            <label>End</label>
                            <input type="date" class="form-control" name="end" id="end">
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label>Picture</label>
                            <input type="file" name="image"  id="profile-img"  class="form-control" size="50"  required />
                            
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
                                <label for="">Picture</label>
                                <br><br>
                            <img src="" id="profile-img-tag" width="150px" height="150px" />
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
   
   
 