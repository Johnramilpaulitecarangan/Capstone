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
    <title>Document</title>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
    
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
						<h4 class="text-center" > Profile</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link" id="account-tab" href="personalacc.php"  >
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link active"  href="personalpass.php" >
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
					</div>
				</div>

				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active">
					<h3 class="mb-4">Password Settings</h3>
						<form action="personal/passupdate.php"  method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">
									
									
					

								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control" id="myInput" value="<?php echo $row['password'];?>">
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
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input name="password" type="password" id="myInput2" class="form-control">
									  <input type="checkbox" onclick="myFunction1()"> Show Password <script>
									function myFunction1() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input name="newpassword" type="password" id="myInput3" class="form-control">
									  <input type="checkbox" onclick="myFunction2()"> Show Password<script>
									function myFunction2() {
  var x = document.getElementById("myInput3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></div>
							</div>
						</div>
						
						<br>
						<div>
							<br>
                        <input type="submit" name="submitpass" id="" value="Update" class="btn btn-primary">
						<input type="hidden" name="idpass" value="<?php echo $row['id'];?>">
						</div>
					</div>
					</form> 	

						
	
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