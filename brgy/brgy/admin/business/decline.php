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
						<h3 class="mb-4">Decline</h3>
					
                        <form action="business/declined.php" method="post">
						<div class="row">
						
							<div class="col-md-10">
								<div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control"  value="<?php echo $row['name'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Business Name</label>
                                <input type="text" class="form-control" readonly n value="<?php echo $row['businessName'];?>">
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Busuness Type</label>
                                <input type="text" class="form-control" readonly  value="<?php echo $row['businessType'];?>"> 
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Purok</label>
                            <input type="text" class="form-control"  value="<?php echo $row['purok'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control" readonly value="<?php 
                                       if( $row['status']  ==1){
                                       echo "Pending";}
                                       if( $row['status']  ==2){
                                           echo "Approved";}
                                       if( $row['status']  ==3){
                                               echo "Decline";}
                                       ?>">
								</div>
							</div>

                           

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment"  class="form-control" rows="5" placeholder="Enter your comment here"><?php echo $row['comment'];?> </textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="decline"  value="Decline" class="btn btn-danger">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="hidden" name="status" value="3">
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>