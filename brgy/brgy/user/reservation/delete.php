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
						<h3 class="mb-4">Delete</h3>
					
                        <form action="reservation/deleted.php" method="post">
						<div class="row">
						
							<div class="col-md-10">
								<div class="form-group">
                                <label>Organization Name</label>
                                <input class="form-control" type="text" name="form-control" readonly value="<?php echo $row['organization_name'];?>" > 
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Name Of Event</label>
                                <input type="text"  class="form-control" name="event"  readonly value="<?php echo $row['name_of_event'];?>"> 
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Address</label>
                                <input type="text"  class="form-control" name="event" readonly  value="<?php echo $row['gym_address'];?>">
                                </div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
<label for="date">Date</label>
    <input type="text" class="form-control" name="date" value="<?php echo $row['requestdate'];?>" readonly>
								</div>
							</div>

                            <div class="col-md-10">
								<div class="form-group">
                                <label>Start From</label>
                                <input type="text" readonly  class="form-control"      value="<?php
     if( $row['start_from']  ==6){
        echo "06:00 (AM)";}
    if( $row['start_from']  ==7){
            echo "07:00 (AM)";} 
                                            if( $row['start_from']  ==8){
                                            echo "08:00 (AM)";}
                                            if( $row['start_from']  ==9){
                                                echo "09:00 (AM)";}
                                            if( $row['start_from']  ==10){
                                                    echo "10:00 (AM)";}
                                                    if( $row['start_from']  ==11){
                                                        echo "11:00 (AM)";}
                                                        if( $row['start_from']  ==12){
                                                            echo "12:00 (PM)";}
                                                        if( $row['start_from']  ==13){
                                                                echo "01:00 (PM)";}
                                                                if( $row['start_from']  ==14){
                                                                    echo "02:00 (PM)";}
                                                                    if( $row['start_from']  ==15){
                                                                        echo "03:00 (PM)";}
                                                                    if( $row['start_from']  ==16){
                                                                            echo "04:00 (PM)";}
                                                                            if( $row['start_from']  ==17){
                                                                                echo "05:00 (PM)";}
                                                                                if( $row['start_from']  ==18){
                                                                                    echo "06:00 (PM)";}
                                                                                if( $row['start_from']  ==19){
                                                                                        echo "07:00 (PM)";}
                                                                                        if( $row['start_from']  ==20){
                                                                                            echo "08:00 (PM)";}
                                                                                           
                                            ?>" >
								</div>
							</div>
                            <div class="col-md-10">
								<div class="form-group">
                                <label>End To</label>
        <input type="text" readonly  class="form-control"      value="<?php 
                                            if( $row['end_to']  ==8){
                                            echo "08:00 (AM)";}
                                            if( $row['end_to']  ==9){
                                                echo "09:00 (AM)";}
                                            if( $row['end_to']  ==10){
                                                    echo "10:00 (AM)";}
                                                    if( $row['end_to']  ==11){
                                                        echo "11:00 (AM)";}
                                                        if( $row['end_to']  ==12){
                                                            echo "12:00 (PM)";}
                                                        if( $row['end_to']  ==13){
                                                                echo "01:00 (PM)";}
                                                                if( $row['end_to']  ==14){
                                                                    echo "02:00 (PM)";}
                                                                    if( $row['end_to']  ==15){
                                                                        echo "03:00 (PM)";}
                                                                    if( $row['end_to']  ==16){
                                                                            echo "04:00 (PM)";}
                                                                            if( $row['end_to']  ==17){
                                                                                echo "05:00 (PM)";}
                                                                                if( $row['end_to']  ==18){
                                                                                    echo "06:00 (PM)";}
                                                                                if( $row['end_to']  ==19){
                                                                                        echo "07:00 (PM)";}
                                                                                        if( $row['end_to']  ==20){
                                                                                            echo "08:00 (PM)";}
                                                                                            if( $row['end_to']  ==21){
                                                                                                echo "09:00 (PM)";}
                                                                                            if( $row['end_to']  ==22){
                                                                                                    echo "10:00 (PM)";}
                                            ?>" >
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
                                <textarea  class="form-control"  readonly><?php echo $row['description'];?></textarea>	</div>
							</div>

                                            
                            <div class="col-md-10">
								<div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment"  class="form-control" readonly rows="5" placeholder="enter your comment here"><?php echo $row['comment'];?> </textarea>	</div>
							</div>
                            </div>
                            <br><br>
                                           






    
       
                            <input type="submit" name="delete"  value="Delete" class="btn btn-danger">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        
      
        </form>
            
        </div></div></div></div></div>

<?php } ?>