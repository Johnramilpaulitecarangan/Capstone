<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Residents</title>
  
    <?php include "topbar.php" ?>
    <?php include "sidebar.php" ?>
</head>
<style>
h1{
        text-align: center;
    }
	.tab_bar{
        border-bottom: 1px solid #000000;
        height: 64px;
        margin-right: 5px;
    }
    .tab_bar ul{
		
        list-style: none;
        width: 100%;
    }
    .tab_bar ul li{
        float: left;
        font-size: 16px;
         font-weight: bold;
		 
    }
    .tab_bar ul li a{
		
        text-decoration: none;
        color: #000000;
        background: #6db1e4;
        border: 1px solid #000000;
	
  
        padding: 20px 20px 18px 20px;
       border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        width: 100%;
        display: block;
        text-align: center;
		
    }
    .tab_bar ul li a:hover{
        background: #96e0e9;
		margin: 2px;
      
    }

    .tab_bar ul li a#onlink{
        background: #ffffff;
        color:#000000;
        border-bottom: 2px solid white;
		z-index: 99;
    }
    .tab_bar ul li a#onlink:hover{
        background: skyblue;
        color:#000000;
		margin: 2px;
		
    }
    .main_container1{
        padding: 20px;
        border: 1px solid #000000;
       margin-right: 5px;
        border-top: none;
        background: #ffffff
    }


td,
th {
    border: 1px solid rgb(190, 190, 190);
  
}
.decline{
                        background: red;
                    }
                    .view{
                        background: blue;
                    }
                    .accept{
                        background: green;
                    }
.print{
    background: skyblue;
}




</style>
</style>
<body>
<div class="main">
<h1>Pending Request of Reservation of Facilitites</h1>
<?php
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from reservation order by requestdate ASC");
?>


  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<div class="tab_bar">
    <ul >
   
        <li><a href="tabReservation.php"  id="onlink">Reservation</a></li>
        <li ><a href="tabcertificate.php">Certifcate</a></li>
        <li ><a href="tabBusiness.php">Business Permit</a></li>
        <li ><a href="tabClearance.php">Clearance</a></li>
        <li ><a href="tabIndigency.php">Indigency</a></li>
    </ul>
</div>
<div class="main_container1">
<div class="table-responsive">
	<table class="table">
		<thead>
        <tr style="text-align:center; background: #009cd5;">
            <th>Name</th>
                                <th>Event</th>
                                <th>Location</th>
                                <th>Date</th> 
                                <th>Start</th>
                                <th>End</th>
                                <th>Status</th>
                                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_assoc($res)){?>
			<tr>
            <td><?php echo $row['organization_name'];?></td>
                            <td><?php echo $row['name_of_event']; ?></td>
                            <td><?php echo $row['gym_address'];?>
                            <td><?php echo $row['requestdate'];?></td>
                        
                            <td><?php 
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
                                                echo "12:00 (AM)";}
                                                if( $row['start_from']  ==13){
                                                    echo "01:00 (PM)";}
                                                if( $row['start_from']  ==14){
                                                    echo "O2:00 (PM)";}
                                                if( $row['start_from']  ==15){
                                                    echo "03:00 (PM)";}
                                                if( $row['start_from']  ==16){
                                                    echo "04:00 (PM)";}
                                                if( $row['start_from']  ==17){
                                                    echo "05:00 (PM)";}
                                                    if( $row['start_from']  ==18){
                                                        echo "07:00 (PM)";}
                                                    if( $row['start_from']  ==19){
                                                        echo "08:00 (PM)";}
                                                    if( $row['start_from']  ==20){
                                                        echo "08:00 (PM)";}
                                                   
                                            ?></td>
                          <td><?php 
                                            if( $row['end_to']  ==8){
                                                echo "08:00 (AM)";}
                                            if( $row['end_to']  ==9){
                                                echo "09:00 (AM)";}
                                            if( $row['end_to']  ==10){
                                                echo "10:00 (AM)";}
                                            if( $row['end_to']  ==11){
                                                echo "11:00 (AM)";}
                                            if( $row['end_to']  ==12){
                                                echo "12:00 (AM)";}
                                                if( $row['end_to']  ==13){
                                                    echo "01:00 (PM)";}
                                                if( $row['end_to']  ==14){
                                                    echo "O2:00 (PM)";}
                                                if( $row['end_to']  ==15){
                                                    echo "03:00 (PM)";}
                                                if( $row['end_to']  ==16){
                                                    echo "04:00 (PM)";}
                                                if( $row['end_to']  ==17){
                                                    echo "05:00 (PM)";}
                                                    if( $row['end_to']  ==18){
                                                        echo "07:00 (PM)";}
                                                    if( $row['end_to']  ==19){
                                                        echo "08:00 (PM)";}
                                                    if( $row['end_to']  ==20){
                                                        echo "08:00 (PM)";}
                                                    if( $row['end_to']  ==21){
                                                        echo "09:00 (PM)";}
                                                    if( $row['end_to']  ==22){
                                                        echo "10:00 (PM)";}
                                            ?></td>
                            <td><?php 
                                            if( $row['status']  ==1){
                                            echo "Pending";}
                                            if( $row['status']  ==2){
                                                echo "Approved";}
                                            if( $row['status']  ==3){
                                                    echo "Decline";}
                                            ?> </td>
                              <td><?php 
                                            if( $row['status']  ==1){
                                           ?> <button data-id='<?php echo $row['id']; ?>'class="decline las la-ban"></button>
                                           <button data-id='<?php echo $row['id']; ?>'  class="accept las la-check"></button>
                                           <button data-id='<?php echo $row['id']; ?>'  class="view las la-eye"></button>

                                        <?php }
                                            if( $row['status']  ==2){
                                                ?>
                                                 <button data-id='<?php echo $row['id']; ?>' class="decline las la-ban"></button>
                                                 <button data-id='<?php echo $row['id']; ?>' class="view las la-eye"></button>
                                                <?php }
                                            if( $row['status']  ==3){
                                                ?><button data-id='<?php echo $row['id']; ?>' class="accept las la-check"></button>
                                                 <button data-id='<?php echo $row['id']; ?>' class="view las la-eye"></button>
                                                <?php }
                                            ?> 
                            </td>	</tr>
			<?php } ?>
		</thead>
	  </table>
</div>
</div>
</div> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>  
  <script>
    
    $(document).ready(function(){
                $('.decline').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'reservation/decline.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaldecline-body').html(response); 
                            $('#empModaldecline').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.accept').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'reservation/accept.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modalaccept-body').html(response); 
                            $('#empModalaccept').modal('show'); 
                        }
                    });
                });
            });
</script>  <script>
    
    $(document).ready(function(){
                $('.view').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'reservation/view.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modalview-body').html(response); 
                            $('#empModalview').modal('show'); 
                        }
                    });
                });
            });
</script> 
<?php include ("modal/view.php"); ?>
<?php include ("modal/decline.php"); ?>
<?php include ("modal/accept.php"); ?>
</body>
</html>