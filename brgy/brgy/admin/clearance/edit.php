<?php 
        
        include_once("../../connections/connection.php");

        $con = connection();
            
$id = $_POST['id'];

$sql = "select * from tblclearance where id=".$id;
$result = mysqli_query($con,$sql);

 

    
while( $row = mysqli_fetch_array($result) ){
?> 

<div class="container mt-5">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
<div class="tab-content p-4 p-md-5">
					<div class="tab-pane fade show active" id="account" >
						<h3 class="mb-4">Accept</h3>
					
                        <form action="clearance/update.php" method="post">
						<div class="row">
						
							<div class="col-md-10">
								<div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" readonly value="<?php echo $row['firstname'] . ' '. $row['middlename'].' ' .$row['lastname'];?>" readonly> 
								</div>
							</div>

                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Purpose</label>
                                <input type="text" name="purpose"class="form-control"   value="<?php echo $row['purpose'];?>">
								</div>
							</div>

                                                        <div class="col-md-10">
								<div class="form-group">
                                <label>Purok</label>
                                <select name="purok" class="form-control" id="purok" ?>">
            <option  value="1" <?php echo ($row['purok'] == "1")? 'Selected' : '';?> >1</option>
            <option  value="2" <?php echo ($row['purok'] == "2")? 'Selected' : '';?> >2</option>
            <option  value="3" <?php echo ($row['purok'] == "3")? 'Selected' : '';?> >3</option>
            <option  value="4" <?php echo ($row['purok'] == "4")? 'Selected' : '';?> >4</option>
            <option  value="5" <?php echo ($row['purok'] == "5")? 'Selected' : '';?> >5</option>
            <option  value="6" <?php echo ($row['purok'] == "6")? 'Selected' : '';?> >6</option>
            <option  value="7" <?php echo ($row['purok'] == "7")? 'Selected' : '';?> >7</option>
            </select>
							</div></div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" readonly  value="<?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> "> 
								</div>
							</div>

                          

                           

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment"  class="form-control" rows="5" placeholder="Enter your comment here"><?php echo $row['comment'];?> </textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="update"  value="Update" class="btn btn-success">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>