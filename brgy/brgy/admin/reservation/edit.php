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
						<h3 class="mb-4">Accept</h3>
					
                        <form action="reservation/update.php" method="post">
						<div class="row">
						
							

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Name Of Event</label>
                                <input type="text" name="event" class="form-control"   value="<?php echo $row['name_of_event'];?>"> 
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
                                <label>Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date'];?>" required>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Start From</label>
                                <select id="appt" class="form-control" name="start" required>
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
</select>	</div>
							</div>

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Status</label>
                               <select name="status" class="form-control" id="">
                               <option  value="1" <?php echo ($row['status'] == "1")? 'Selected' : '';?> >Pending</option>
     <option  value="2" <?php echo ($row['status'] == "2")? 'Selected' : '';?> >Accept</option>
     <option  value="3" <?php echo ($row['status'] == "3")? 'Selected' : '';?> >Decline</option></select>


                            <div class="col-md-10">
								<div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id=""class="form-control" cols="30" rows="5" ><?php echo $row['description'];?></textarea> 	</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment" id=""class="form-control" cols="30" rows="5" ><?php echo $row['comment'];?></textarea> 	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="update"  value="update" class="btn btn-primary">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="hidden" name="status" value="2">
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>