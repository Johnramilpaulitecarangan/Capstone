<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from reservation where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
?> 


<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Decline</h3>
					
                        <form action="reservation/declined.php" method="post">
						<div class="row">
						
							<div class="col-md-10">
								<div class="form-group">
                                <label>Organization Name</label>
                            <input type="text" class="form-control"  value="<?php echo $row['organization_name'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Name Of Event</label>
                            <input type="text" class="form-control"  value="<?php echo $row['name_of_event'];?>" readonly>
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Address</label>
                            <input type="text" class="form-control"  value="<?php echo $row['gym_address'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Date</label>
                            <input type="text" class="form-control"  value="<?php echo $row['requestdate'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Date</label>
                            <input type="text" class="form-control"  value="<?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> "readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control"  readonly><?php echo $row['description'];?></textarea>	</div>
							</div>

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment"  class="form-control" rows="5" placeholder="enter your comment here"><?php echo $row['comment'];?> </textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="decline"  value="Decline" class="btn btn-danger">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="hidden" name="status" value="3">
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>