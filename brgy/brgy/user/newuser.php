<?php 
    
    include_once("../connections/connection.php");

    $con = connection();

    if(isset($_POST['submit'])){

	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       $username =$_POST['username'];
       $password =$_POST['password'];
       $lastName=$_POST['lastName'];
       $firstName =$_POST['firstName'];
       $middleName =$_POST['middleName'];
	   $exName =$_POST['exName'];
       $birthDate=$_POST['birthDate'];
       $age=$_POST['age'];
       $birthPlace=$_POST['birthPlace'];
       $gender=$_POST['gender'];
       $emailAddress=$_POST['emailAddress'];
       $contactNumber=$_POST['contactNumber'];
       $purok=$_POST['purok'];
      

     $sql = "INSERT INTO `users`( `photo`,`username`, `password`,`lastName`, `firstName`,`middleName`, `exName`,`birthDate`,`age`,`birthPlace`,`gender`,`emailAddress`,`contactNumber`,`purok` ) VALUES 
     ('$file','$username','$password','$lastName','$firstName','$middleName','$exName','$birthDate','$age','$birthPlace','$gender','$emailAddress','$contactNumber','$purok')";

        $con->query($sql) or die ($con->error);

		echo '<script>alert("Registered")</script>';
        echo'<script>window.location.href = "index.php"</script>';
 
      
    }
?>  
       <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

	
  
    <title>Document</title>

</head>
<style>

</style>
<body>
<div class="main">
<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-10">
							
							
							</div>
						
							<div class="img-circle text-center mb-10">
							<img src="../img/atate.png" id="profile-img-tag"  alt="User" width="150px" height ="150px">
						
								
							</div>


							
							
						

						<h4 class="text-center"></h4>
					</div>
					
				</div>

				<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Account Settings</h3>
					
						<form action=""  method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
								  	<input type="text" name="firstName" class="form-control" required placeholder="Enter First Name">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
								  	<input type="text" name="lastName" class="form-control" required placeholder="Enter Last Name">
									  </div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
								  	<input type="text" name="middleName" class="form-control" required placeholder="Enter Middle Name">
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Extention Name</label>
								  	<input type="text" name="exName" class="form-control"  placeholder="Enter Extention Name">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      
                            <label>Birthday:</label>
                            <input type="text" class="form-control"  id="nu_datebirth" name="birthDate" required placeholder="Birthday">
                       
                          <input type="hidden" required placeholder="Age" name="age" id="a_ge" readonly/>
                        

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
								<select class="form-control" name="gender" id="gender">
								<option  disabled selected value >Gender</option>
                        			<option  value="Male">Male</option>
                                    <option  value="Female">Female</option>
            </select>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label>Purok</label>
									  <select class="form-control" name="purok">
									  <option  disabled selected value>Purok</option>
											<option  value="1">1</option>
											<option  value="2">2</option>
											<option  value="3">3</option>
											<option  value="4">4</option>
											<option  value="5">5</option>
											<option  value="6">6</option>
											<option  value="7">7</option>
           								 </select>
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Birth Place</label>
								  	<input type="text" name="birthPlace" class="form-control" required placeholder="Enter Birth Place">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Phone Number</label>
								  	<input type="text" name="contactNumber" class="form-control" required placeholder="Enter Phone Number">
							</div></div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="email" name="emailAddress" class="form-control" required placeholder="Enter Email Address">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								<label>Username</label>
								  	<input type="text" name="username" class="form-control" required placeholder="Enter Username">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label>Password</label>
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
</script>
								</div>
							</div>
							<input type="file" name="image"  id="profile-img" required />
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
						
						<div>
							<br>
						<div>
							<input type="reset" value="Reset" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" id="" value="Register" class="btn btn-primary">
						
						</div>
						</div>
					</form> 




						
						</form>
					</div> 
				</div> 
			</div> 
</div>
</div>  
  
 
</body>
</html>
