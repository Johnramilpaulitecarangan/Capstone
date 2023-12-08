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
						<h3 class="mb-4">Edit</h3>
					
                        <form action="reservation/update.php" method="post">
						<div class="row">
						
							<div class="col-md-10">
								<div class="form-group">
                                <label>Organization Name</label>
                                <input class="form-control" type="text" name="organization_name"  value="<?php echo $row['organization_name'];?>" > 
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Name Of Event</label>
                                <input type="text"  class="form-control" name="event"   value="<?php echo $row['name_of_event'];?>"> 
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Address</label>
                                <select id="appt" class="form-control" name="gym" required>

<option  value="Atate Bliss Gym" <?php echo ($row['gym_address'] == "Atate Bliss Gym")? 'Selected' : '';?> >Atate Bliss Gym</option>
<option  value="Atate Gym" <?php echo ($row['gym_address'] == "Atate Gym")? 'Selected' : '';?> >Atate Gym</option>
<option  value="RVC Gym" <?php echo ($row['gym_address'] == "RVC Gym")? 'Selected' : '';?> >RVC Gym</option>
<option  value="Pinaltakan Gym" <?php echo ($row['gym_address'] == "Pinaltakan Gym")? 'Selected' : '';?> >Pinaltakan Gym</option> 
</select>
                                </div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
<label for="date">Date</label>
<input type="date" class="form-control" name="date" value="<?php echo $row['requestdate'];?>" required>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Start From</label>
                                <select id="appt" name="start" class="form-control" required>
     <option  value="6" <?php echo ($row['start_from'] == "6")? 'Selected' : '';?> >06:00 (AM)</option>
     <option  value="7" <?php echo ($row['start_from'] == "7")? 'Selected' : '';?> >07:00 (AM)</option>
     <option  value="8" <?php echo ($row['start_from'] == "8")? 'Selected' : '';?> >08:00 (AM)</option>
     <option  value="9" <?php echo ($row['start_from'] == "9")? 'Selected' : '';?> >09:00 (AM)</option>
     <option  value="10" <?php echo ($row['start_from'] == "10")? 'Selected' : '';?> >10:00 (AM)</option>
     <option  value="11" <?php echo ($row['start_from'] == "11")? 'Selected' : '';?> >11:00 (AM)</option>
     <option  value="12" <?php echo ($row['start_from'] == "12")? 'Selected' : '';?> >12:00 (PM)</option>
     <option  value="13" <?php echo ($row['start_from'] == "13")? 'Selected' : '';?> >01:00 (PM)</option>
     <option  value="14" <?php echo ($row['start_from'] == "14")? 'Selected' : '';?> >02:00 (PM)</option>
     <option  value="15" <?php echo ($row['start_from'] == "15")? 'Selected' : '';?> >03:00 (PM)</option>
     <option  value="16" <?php echo ($row['start_from'] == "16")? 'Selected' : '';?> >04:00 (PM)</option>
     <option  value="17" <?php echo ($row['start_from'] == "17")? 'Selected' : '';?> >05:00 (PM)</option>
     <option  value="18" <?php echo ($row['start_from'] == "18")? 'Selected' : '';?> >06:00 (PM)</option>
     <option  value="19" <?php echo ($row['start_from'] == "19")? 'Selected' : '';?> >07:00 (PM)</option>
     <option  value="20" <?php echo ($row['start_from'] == "20")? 'Selected' : '';?> >08:00 (PM)</option>
</select>
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>End To</label>
                                <select id="appt" name="end" class="form-control" required>
     <option  value="8" <?php echo ($row['end_to'] == "8")? 'Selected' : '';?> >08:00 (AM)</option>
     <option  value="9" <?php echo ($row['end_to'] == "9")? 'Selected' : '';?> >09:00 (AM)</option>
     <option  value="10" <?php echo ($row['end_to'] == "10")? 'Selected' : '';?> >10:00 (AM)</option>
     <option  value="11" <?php echo ($row['end_to'] == "11")? 'Selected' : '';?> >11:00 (AM)</option>
     <option  value="12" <?php echo ($row['end_to'] == "12")? 'Selected' : '';?> >12:00 (PM)</option>
     <option  value="13" <?php echo ($row['end_to'] == "13")? 'Selected' : '';?> >01:00 (PM)</option>
     <option  value="14" <?php echo ($row['end_to'] == "14")? 'Selected' : '';?> >02:00 (PM)</option>
     <option  value="15" <?php echo ($row['end_to'] == "15")? 'Selected' : '';?> >03:00 (PM)</option>
     <option  value="16" <?php echo ($row['end_to'] == "16")? 'Selected' : '';?> >04:00 (PM)</option>
     <option  value="17" <?php echo ($row['end_to'] == "17")? 'Selected' : '';?> >05:00 (PM)</option>
     <option  value="18" <?php echo ($row['end_to'] == "18")? 'Selected' : '';?> >06:00 (PM)</option>
     <option  value="19" <?php echo ($row['end_to'] == "19")? 'Selected' : '';?> >07:00 (PM)</option>
     <option  value="20" <?php echo ($row['end_to'] == "20")? 'Selected' : '';?> >08:00 (PM)</option>
     <option  value="21" <?php echo ($row['end_to'] == "21")? 'Selected' : '';?> >09:00 (PM)</option>
     <option  value="22" <?php echo ($row['end_to'] == "22")? 'Selected' : '';?> >10:00 (PM)</option>
</select>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Status</label>
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
                                <textarea  class="form-control" name="description"  ><?php echo $row['description'];?></textarea>	</div>
							</div>

                                            
                            
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="update"  value="Update" class="btn btn-success">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>