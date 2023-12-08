<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from tblbusiness where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
?> 

<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Edit</h3>
					
                        <form action="business/update.php" method="post">
						<div class="row">
						
			
                          

                           

                                            
                       
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Business Name</label>
                                <input type="text" name="businessName"class="form-control" value=" <?php echo $row['businessName'];?>" >  </div>
							</div>
                                                       
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Business Type</label>
                                <input type="text" name="businessType"class="form-control" value=" <?php echo $row['businessType'];?>" >  </div>
							</div>
                                       
                                           
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="update"  value="Update" class="btn btn-success">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                          
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>