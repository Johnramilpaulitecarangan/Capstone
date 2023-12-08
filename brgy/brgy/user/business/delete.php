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
						<h3 class="mb-4">Delete</h3>
					
                        <form action="business/deleted.php" method="post">
						<div class="row">
						
			
                          

                           

                                            
                       
                                                <div class="col-md-10">
								<div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control" value=" <?php echo $row['requestdate'];?>" readonly>	</div>
							</div>
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Business Name</label>
                                <input type="text" class="form-control" value=" <?php echo $row['businessName'];?>" readonly>  </div>
							</div>
                                                       
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Business Type</label>
                                <input type="text" class="form-control" value=" <?php echo $row['businessType'];?>" readonly>  </div>
							</div>
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" readonly name="purpose" value="<?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?>">	</div>
							</div>
                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment" class="form-control" cols="30" readonly rows="10" ><?php echo $row['comment'];?></textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="delete"  value="Delete" class="btn btn-danger">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                          
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>