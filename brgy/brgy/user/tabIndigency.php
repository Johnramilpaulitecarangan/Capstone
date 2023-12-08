<?php  if(!isset($_SESSION)){session_start();}
        include_once("../connections/connection.php");
            $con = connection(); 
            
            $sql = " SELECT * FROM users where `id` = '".$_SESSION['userid']."'";
$result=$con->query($sql) or die ($con->error);
$row=$result->fetch_assoc(); 
            ?>
<?php if(isset($_SESSION['UserLogin'])){?>
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
.delete{
                        background: red;
                    }
                    .edit{
                        background: blue;
                    }
                    .view{
                        background: green;
                    }





</style>
<body>
<div class="main">
<h1>Pending Request of Barangay Indigency</h1>



  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<div class="tab_bar">
    <ul >
   
        <li><a href="tabReservation.php"  >Reservation</a></li>
        <li ><a href="tabcertificate.php">Certificate</a></li>
        <li ><a href="tabBusiness.php">Business Permit</a></li>
        <li ><a href="tabClearance.php">Clearance</a></li>
        <li ><a href="tabIndigency.php" id="onlink">Indigency</a></li>
    </ul>
</div>
<div class="main_container1">
<div class="table-responsive">
	<table class="table">
		<thead>
        <tr style="text-align:center; background: #009cd5;">
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Purpose</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Tools</th>
                        
                 
                    </tr>
		</thead>
        <?php
$con=mysqli_connect('localhost','root','','barangaysystem');
$res=mysqli_query($con,"select * from `tblindigency` where requesterId ='".$_SESSION['userid']."'");
while($row=mysqli_fetch_assoc($res)){?>
		<tbody>
		
        <tr>
                
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['middlename']; ?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['purpose'];?></td>
                <td><?php echo $row['requestdate'];?></td>
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
                                           ?> <button data-id='<?php echo $row['id']; ?>' id="delete" class="delete las la-trash"></button>
                                           <button data-id='<?php echo $row['id']; ?>' id="edit" class="edit las la-pen"></button>

                                        <?php }
                                            if( $row['status']  ==2){
                                                ?>
                                                 <button data-id='<?php echo $row['id']; ?>' id="delete" class="delete las la-trash"></button>
                                                 <button data-id='<?php echo $row['id']; ?>' id="view" class="view las la-eye"></button>
                                                <?php }
                                            if( $row['status']  ==3){
                                                ?><button data-id='<?php echo $row['id']; ?>' id="delete" class="delete las la-trash"></button>
                                                 <button data-id='<?php echo $row['id']; ?>' id="view" class="view las la-eye"></button>
                                                <?php }
                                            ?> 
                            </td>
                                       
                                       	</tr>
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
                $('.edit').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'indigency/edit.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaledit-body').html(response); 
                            $('#empModaledit').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.delete').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'indigency/delete.php',
                        type: 'post',
                        data: {id: id},
                        success: function(response){ 
                            $('.modaldelete-body').html(response); 
                            $('#empModaldelete').modal('show'); 
                        }
                    });
                });
            });
</script> 
<script>
    
    $(document).ready(function(){
                $('.view').click(function(){
                    var id = $(this).data('id');
                    $.ajax({
                        url: 'indigency/view.php',
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
<?php include ("modal/edit.php"); ?>
<?php include ("modal/delete.php"); ?>
<?php include ("modal/view.php"); ?>
</body>
</html>
<?php }else { echo header("location: index.php"); }?>