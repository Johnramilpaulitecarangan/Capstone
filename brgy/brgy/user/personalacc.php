<?php  if(!isset($_SESSION)){session_start();}
        include_once("../connections/connection.php");
            $con = connection(); 
            
            $sql = " SELECT * FROM users where `id` = '".$_SESSION['userid']."'";
$result=$con->query($sql) or die ($con->error);
$row=$result->fetch_assoc(); 
            ?>
<?php if(isset($_SESSION['UserLogin'])){?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>

	
  
    <title>Document</title>
    
    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
	.pic {
		border:none;
		background: none;
	}
</style>
<body>
<div class="main">
<div class="container">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<!--<img src="../img/sample.png" alt="Image" class="shadow">-->
							<button data-id='<?php echo $row['id']; ?>' class="pic"><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" alt="image" style="width: 75px; height: 75px;">'; ?></button>
						</div>
						<h4 class="text-center">Profile</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" href="personalacc.php"  >
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link"  href="personalpass.php" >
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
					</div>
				</div>

				<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Account Settings</h3>
					
						<form action="personal/accupdate.php"  method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label>First Name</label>
								  	<input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName'];?>">
								</div>
								
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Last Name</label>
								  	<input type="text" name="lastName" class="form-control" value="<?php echo $row['lastName'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Middle Name</label>
								  	<input type="text" name="middleName" class="form-control" value="<?php echo $row['middleName'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Extention Name</label>
								  	<input type="text" name="exName" class="form-control" value="<?php echo $row['exName'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">

							<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      
                            <label>Birthday:</label>
                            <input type="text" class="form-control"  id="nu_datebirth" name="birthDate" value="<?php echo $row['birthDate'];?>">
                       
                          <input type="hidden" placeholder="Age" name="age" id="a_ge"value="<?php echo $row['age'];?>" readonly/>
                        

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
									  <select class="form-control" name="gender" id="gender" value="<?php echo $row['gender'];?>">">
                        <option  value="Male" <?php echo ($row['gender'] == "Male")? 'Selected' : '';?> >Male</option>
                                                <option  value="Female" <?php echo ($row['gender'] == "Female")? 'Selected' : '';?> >Female</option>
            </select>
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label>Purok</label>
									  <select class="form-control" name="purok" id="purok" ?>">
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
								  	<input type="text" name="birthPlace" class="form-control" value="<?php echo $row['birthPlace'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Phone number</label>
								  	<input type="text" name="contactNumber" class="form-control" value="<?php echo $row['contactNumber'];?>">
								</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Email Address</label>
								  	<input type="text" name="emailAddress" class="form-control" value="<?php echo $row['emailAddress'];?>">
								</div>
							</div>
						</div>
						
						<div>
							<br>
						<div>
							<input type="reset" value="Reset" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" id="" value="Update" class="btn btn-primary">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
						</div>
						</div>
					</form> 




						
						</form>
					</div> 
				</div> 
			</div> 
</div>
</div>  
  
<script>
    
    $(document).ready(function(){
                $('.pic').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'personal/pic.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modalpic-body').html(response); 
                            $('#empModalpic').modal('show'); 
                        }
                    });
                });
            });
</script> 
<?php include ("modal/pic.php"); ?>   
</body>
</html>
<?php }else { echo header("location: index.php"); }?>