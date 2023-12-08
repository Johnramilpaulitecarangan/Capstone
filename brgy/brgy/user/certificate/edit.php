<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from tblcertificate where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
?> 

<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Edit</h3>
					
                        <form action="certificate/update.php" method="post">
						<div class="row">
						
			
                          

                           

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Purpose</label>
                                <input type="text" class="form-control" name="purpose" value="<?php echo $row['purpose'];?>"> </textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="update"  value="Update" class="btn btn-success">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                          
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>